<?php
/*
Plugin Name: Amazon AWS CDN 
Plugin URI: http://wpadmin.ca/amazon-cloudfront-cdn/
Description: Use Amazon Cloudfront as a <acronym title='Content Delivery Network'>CDN</acronym> for your WordPress Site
Author: WPAdmin
Version: 0.9
Author URI: http://wpadmin.ca
*/
if ( ! defined( 'wpaacbasedir' ) )
define( 'wpaacbasedir', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'wpaacPLUGIN_BASENAME' ) )
define( 'wpaacPLUGIN_BASENAME', plugin_basename( __FILE__ ) );

if ( ! defined( 'wpaacPLUGIN_DIRNAME' ) )
define( 'wpaacPLUGIN_DIRNAME', dirname( wpaacPLUGIN_BASENAME ) );

if ( ! defined( 'wpaacPLUGIN_URL' ) )
define( 'wpaacPLUGIN_URL', plugin_dir_url( __FILE__ ) );

if( !function_exists( 'GuzzleHttp\Psr7\str' ) ) {
require  wpaacbasedir . 'admin/aws.phar';
}
use Aws\CloudFront\CloudFrontClient;


class wpaawscdn
{
public function __construct(){


}

public function load()
{
register_activation_hook( __FILE__, array(&$this,'wpaawscdn_activate') );
add_action("admin_menu", array(&$this,'WPAcdnMenus'));
}

public function wpaawscdn_activate() {

}

function WPAcdnMenus() {
add_menu_page("WPAdmin AWS CDN", "WPAdmin AWS CDN", 0, "wpa-aws-cloudfront", array($this,'wpaactoplevel_page'));
}

function wpaactoplevel_page() {
echo "<p><h2>" . __( 'WPAdmin AWS CDN Setup', 'wpaac_menu' ) . "</h2><p>";
require_once(wpaacbasedir . "admin/wpa-aws-cdn-admin.php");
}

function wpaac_reset_cdn(){
if ( isset($_REQUEST) ) {
@$wpaac_ori = $_REQUEST['wpaac_ori'];
if(file_exists(wpaacbasedir . $wpaac_ori . ".txt"))
{
unlink(wpaacbasedir . $wpaac_ori . ".txt");	
echo  "CDN Reset Completed";
}	
}	
wp_die();
}

function wpaac_deploy_cdn() {
if ( isset($_REQUEST) ) {
@$wpaac_ak = $_REQUEST['wpaac_ak'];
@$wpaac_sk = $_REQUEST['wpaac_sk'];
@$wpaac_ap = $_REQUEST['wpaac_ap'];
@$wpaac_ori = $_REQUEST['wpaac_ori'];
$nowww = 'cdn.' . str_replace("www.","",$wpaac_ori);
if(file_exists(wpaacbasedir . $wpaac_ori . ".txt"))
{
$retval = file_get_contents(wpaacbasedir . $wpaac_ori . ".txt");	
}
else
{
$wpaac_client = $this->wpaac_authClient($wpaac_ak,$wpaac_sk);

$preset = array("DistributionConfig"=>array(
'Aliases' => array(
'Quantity' => 1,
'Items' => array($nowww),
),
'CacheBehaviors' => array('Quantity' => 0),
'Comment' => 'MyCDN',
'Enabled' => true,
'CallerReference' => 'WPAdmin-' . time(),
'DefaultCacheBehavior' => array(
'MinTTL' => 3600,
'ViewerProtocolPolicy' => 'allow-all',
'TargetOriginId' => 'WPADminOrigin',
'TrustedSigners' => array(
'Enabled'  => false,
'Quantity' => 0,
),
'ForwardedValues' => array(
'QueryString' => false,
'Cookies' => array(
'Forward' => 'none'
)
)
),
'DefaultRootObject' => '',
'Logging' => array(
'Enabled' => false,
'Bucket' => '',
'Prefix' => '',
'IncludeCookies' => true,
),
'Origins' => array(
'Quantity' => 1,
'Items' => array(
array(
'Id' => 'WPADminOrigin',
'DomainName' => $wpaac_ori,
'CustomOriginConfig' => array(
'HTTPPort' => 80,
'HTTPSPort' => 443,
'OriginProtocolPolicy' => 'match-viewer',
)
)
)
),
'PriceClass' => $wpaac_ap,
));
try{
$result = $wpaac_client->createDistribution($preset);	
$awsdomain = $result['Distribution']['DomainName'];
$retval =  "<p><b>IMP: Before performing the below mentioned steps</b><ol><li>Confirm that the status of the the <i>CloudFront Distribution</i> is <b>Deployed</b> in AWS Console</li><li>Ensure have modified the DNS (If you plan to use $nowww)</li></ol><hr><p>In the <U>CDN DOMAIN / CNAME</U> box</p><p>Add <a class=retval href='#'><b>$awsdomain</b></a></p><p>OR<p>Add <a class=retval href='#'><B>$nowww</B></a><br>[you will have to add a CNAME entry in your DNS pointing <B>$nowww</B> to <b>$awsdomain</b>]";
file_put_contents(wpaacbasedir . $wpaac_ori . ".txt",$retval);
}
catch (Exception $e) {
$err = $e->getMessage();
$er = explode("response",$err);
echo $er[0];
}
}
echo $retval;
}
wp_die();
}


function wpaac_set_cdn() {
if ( isset($_REQUEST) ) {
@$wpaac_cdnurl = $_REQUEST['wpaac_cdnurl'];
if($wpaac_cdnurl == "") $wpaac_cdnurl = "Blank";
if(get_option('WPAdmin_CDN_URL'))
{
update_option('WPAdmin_CDN_URL', $wpaac_cdnurl, $autoload);
}
else
{
add_option('WPAdmin_CDN_URL', $wpaac_cdnurl, $autoload);
}
echo  "CDN Changed To <b>$wpaac_cdnurl</b>";
}
wp_die();
}

function wpaac_enqueue_style() {
if ( ! wp_style_is( 'style', 'done' ) ) {
wp_deregister_style( 'style' );
wp_dequeue_style( 'style' );
$style_fp = get_stylesheet_directory() . '/style.css';
if ( file_exists($style_fp) ) {
wp_enqueue_style( 'style', get_stylesheet_uri() . '?' . filemtime( $style_fp ) );
}
}
}

function wpaac_replace_content($content)
{
$old = $_SERVER['SERVER_NAME']  . "/wp-content/";
$new =  get_option("WPAdmin_CDN_URL"); 
if($new == "Blank") $new = "";
if($new != "")
{
$new .= "/wp-content/";
$content = str_replace( $old, $new, $content );
}
return $content;	
}

function wpaac_list_cdn(){
if ( isset($_REQUEST) ) {
@$wpaac_ak = $_REQUEST['wpaac_ak'];
@$wpaac_sk = $_REQUEST['wpaac_sk'];
@$wpaac_ori = $_REQUEST['wpaac_ori'];
$wpaac_client = $this->wpaac_authClient($wpaac_ak,$wpaac_sk);
try{
$result = $wpaac_client->listDistributions();	
$result = $result['DistributionList']['Items'];
foreach($result as $dl)
{
echo "<small><div class=col-xs-4>" . $dl['Id'] . " [<b>" . $dl['Status']  . "</b>]</div><div style='word-break: break-all;' class=col-xs-4>" . $dl['DomainName']  . "</div><div style='word-break: break-all;'  class=col-xs-4>" .  $dl['Origins']['Items'][0]['DomainName'] . "</div></small><div style='clear:both'></div>";
}
}
catch (Exception $e) {
$err = $e->getMessage();
$er = explode("response",$err);
echo $er[0];
}
}	
wp_die();
}

function wpaac_authClient($wpaac_ak,$wpaac_sk)
{
$wpaac_client = new CloudFrontClient([
'version'     => 'latest',
'region'  => 'us-east-1',
'credentials' => [
'key'    => $wpaac_ak,
'secret' => $wpaac_sk
],
'http'    => [
'verify' => wpaacbasedir.'admin/cacert.pem'
]
]);	
return $wpaac_client;
}
/*class ends here*/
}
$wpaawscdn = new wpaawscdn();
$wpaawscdn->load();

add_action( 'wp_ajax_wpaac_reset_cdn', array($wpaawscdn,'wpaac_reset_cdn') );
add_action( 'wp_ajax_wpaac_list_cdn', array($wpaawscdn,'wpaac_list_cdn'));
add_action( 'wp_ajax_wpaac_deploy_cdn', array($wpaawscdn,'wpaac_deploy_cdn') );
add_action( 'wp_ajax_wpaac_set_cdn', array($wpaawscdn,'wpaac_set_cdn') );
add_action( 'wp_enqueue_style', array($wpaawscdn,'wpaac_enqueue_style'), 999 );

add_filter('the_content',array($wpaawscdn,'wpaac_replace_content'),77);
add_filter( 'post_thumbnail_html', array($wpaawscdn,'wpaac_replace_content') ,77);
add_filter( 'widget_text', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'wp_get_attachment_link', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter('theme_root_uri',array($wpaawscdn,'wpaac_replace_content'),77);
add_filter('plugins_url',array($wpaawscdn,'wpaac_replace_content'),77);	
add_filter( 'widget_text', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'wp_get_attachment_link', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'wp_get_attachment_thumb_file', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'wp_get_attachment_thumb_url', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'wp_get_attachment_url', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'post_gallery ', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'bloginfo', array($wpaawscdn,'wpaac_replace_content'),77 );
add_filter( 'style_loader_src', array($wpaawscdn,'wpaac_replace_content') ,77);
add_filter( 'script_loader_src', array($wpaawscdn,'wpaac_replace_content') ,77);
add_filter( 'metaslider_resized_image_url', array($wpaawscdn,'wpaac_replace_content'),77 );
?>