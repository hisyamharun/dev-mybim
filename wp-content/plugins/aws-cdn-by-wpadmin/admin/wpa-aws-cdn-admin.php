<?php
	define( 'wpacPLUGIN_URL', plugin_dir_url( __FILE__ ) );
	$wpaac_bootStrapJS = wpacPLUGIN_URL."asset/js/bootstrap.min.js";
	$wpaac_bootStrapCSS = wpacPLUGIN_URL."asset/css/bootstrap.min.css";
	wp_register_script('wpaac-bootstrap_init', $wpaac_bootStrapJS);
	wp_enqueue_script('wpaac-bootstrap_init');
	wp_register_style('wpaac-bootstrapCSS_init', $wpaac_bootStrapCSS);
	wp_enqueue_style('wpaac-bootstrapCSS_init');
	if ( ! defined( 'wpaacbasedir' ) )
	define( 'wpaacbasedir', plugin_dir_path( __FILE__ ) );
	$cdndomain = site_url();
	$cdndomain = preg_replace("(^https?://)", "", $cdndomain);
?>

<div class=col-sm-3>
	<h3>STEP I</h3>
	<b>Access key ID:</b><br>
	<input type=text id=wpaac_cdnak class=form-control placeholder="Access Key ID" value="">	
	<p>
		<b>Secret Key:</b><br>
		<input type=text id=wpaac_cdnsk class=form-control placeholder="Secret Key" value="">	
		<p>
			<b>Domain Name:</b><br>
			<input type=text id=wpaac_cdnorigin class=form-control placeholder="Domain Name" value="<?php echo $cdndomain ; ?>">	
			<P>
				<b>Price Class:</b><br>
				<select id=wpaac_cdnprice class=form-control placeholder="Price Class">	
					<option value='PriceClass_100'>US and Europe</option>
					<option value='PriceClass_200'>US, Europe & Asia</option>
					<option value='PriceClass_All'>All Locations</option>
				</select>
				<P>
					
					<button id=wpaac_deployAWSCDN class='btn btn-info form-control'>Create AWS Distribution</button><br>&nbsp;</br>
					<button id=wpaac_listAWSCDN class='btn btn-info form-control'>List AWS Distribution</button>
					
					
					<p>
					</div>
					
					<?php 
						$cdnurl =  get_option("WPAdmin_CDN_URL"); 
						if($cdnurl == "Blank") $cdnurl = "";	
					?>
					
					<div class=col-sm-3>
						<h3>STEP II</h3>
						<b>CDN DOMAIN / CNAME</b><br>
						<input type=text id=wpaac_cdnurl class=form-control placeholder="CDN Domain" value="<?php echo $cdnurl; ?>">	
						<p>&nbsp;</p>
						<div id=wpaac_WPAResult></div>
						<p>&nbsp;</p>
						<button id=wpaac_resetcdn class='btn btn-danger form-control'>Reset Configuration</button>
					</div>
					<div class=col-sm-6>
						<h3>Response</h3>
						<div id=wpaac_WPAresult>
							<div class="tabbable" id="Bmmli">
								<ul class="nav nav-tabs">
									<li class="active">
										<a href="#tab1" data-toggle="tab">
											<p>
											How to</p>
										</a>
									</li>
									<li>
										<a href="#tab2" data-toggle="tab">
											<p>
											FAQ</p>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab1">
										<p>&nbsp;</p>
										<b>Setup CloudFront</b>
										<ol>
											<li>Setup your AWS Account @ <a href='http://aws.amazon.com/' target=_BLANK>aws.amazon.com</a></li>
											<li>Retrieve the <i>Access Key ID</i> & <i>Secret Key</i></li>
											<li>Enter the <i>Access Key ID</i> & <i>Secret Key</i> in the respective input boxes on the left</li>
											<li>The domain name is automatically listed, change if required</li>
											<li>Select the <u>Price Class</u> (AWS charges may vary depending on your selection)</li>
											<li>Click the <u>Create AWS Distribution</u> button</li>
											<li>Wait for AWS to setup the Distribtuion. Check the progress by clicking the <u>List AWS Distribution</u> button</li>
											<li>Enter the AWS assigned sub domain (<i>E.G: <small>rAnd0mChA6s.cloudfront.net</small></i>) in the <u>CDN DOMAIN / CNAME</u> box</li>
										</ol>
										<b>Setup Custom Domain Name</b> (Optional)
										<ol>
											<li>Create a <i>CNAME</i> record on your DNS Server <b>cdn.<?php echo $cdndomain;?></b> pointing to the AWS Assigned domain name</li>
											<li>Once the Record is live, enter <b>cdn.<?php echo $cdndomain;?></b> in  the <u>CDN DOMAIN / CNAME</u> box</li>
										</ol>
										<b>Disable Cloudfront Temporarily</b>
										<ol>
											<li>Clear the <u>CDN DOMAIN / CNAME</u> box</li>
											<li>Clear cache if you are using any caching plugin</li>
											<li>Visit <a href='http://aws.amazon.com/' target=_BLANK>aws.amazon.com</a>, <i>Disable</i> the Distribution</li>
										</ol>
										<b>Re-enable Cloudfront</b>
										<ol>
											<li>Visit <a href='http://aws.amazon.com/' target=_BLANK>aws.amazon.com</a>, <i>Enable</i> the Distribution</li>
											<li>Enter the AWS assigned sub domain (<i>E.G: <small>rAnd0mChA6s.cloudfront.net</small></i>) in the <u>CDN DOMAIN / CNAME</u> box</li>
											<li>If <b>cdn.<?php echo $cdndomain;?></b> exists in the DNS, enter it in the <u>CDN DOMAIN / CNAME</u> box</li>
											<li>Clear cache if you are using any caching plugin</li>
										</ol>
										<b>Delete Cloudfront Setup</b>
										<ol>
											<li>Visit <a href='http://aws.amazon.com/' target=_BLANK>aws.amazon.com</a>, <i>Disable</i> and then <i>Delete</i> the Distribution</li>
											<li>Click the <u>Reset Configuration</u> button</li>
										</ol>
									</p>
								</div>
								<div class="tab-pane" id="tab2">
									<p>
										<dl>
											<dt>How does the plugin work?</dt>
											<dd>The plugin replaces the domain name on all static assets (images, scripts, stylesheets,etc) in thw wp-content folder.</dd>
											<dt>Where are the AWS Access Key ID and Secret Key Stored?</dt>
											<dd>The AWS Access Key ID and Secret Key is only used to communicate with AWS.Amazon.com and are not stored. It is your responsibility to keep them safe - do not share them with anyone.</dd>
											<dt>What does the <u>Reset Configuration</u> button do?</dt>
											<dd>When you click the <u>Create AWS Distribution</u>. button, it checks if the file <b><?php echo $cdndomain;?>.txt</b> exists in the plugin folder.<br>
												This stops the plugin from sending a duplicate request to Amazon (which will be declined anyway).<br>
												The <u>Reset Configuration</u> button only deletes the file <br>
											The CDN setup does not rely on this file.</dd>
											<dt>What is stored in the <b><?php echo $cdndomain;?>.txt</b> file?</dt>
											<dd>The message you see after a successful request to Amazon to create is Distribution is stored in the <b><?php echo $cdndomain;?>.txt</b> file</dd>
											<dt>Can I use any other CDN?</dt>
											<dd>If you have the domain name from any other CDN, Enter it in the <u>CDN DOMAIN / CNAME</u> box </dd>
											<dt>What if I have a few Questions?</dt>
											<dd>Visit @ <a href='http://wpadmin.ca?utm_source=Websites&utm_medium=WordPress&utm_campaign=WordPressCDNPlugin' target=_BLANK>WPAdmin.ca</a>, Chat with me If I am online or Leave a Message using the <a href='http://wpadmin.ca/contact-us/?utm_source=Websites&utm_medium=WordPress&utm_campaign=WordPressCDNPlugin' target=_BLANK>contact form</a>  </dd>
											<dt>I want to buy you a coffee?</dt>
											<dd>Visit @ <a href='http://wpadmin.ca?utm_source=Websites&utm_medium=WordPress&utm_campaign=WordPressCDNPlugin' target=_BLANK>WPAdmin.ca</a>, scroll down to the footer, the form accepts gratuity in Canadian dollars</dd>
										</dl>
									</p>
								</div>
							</div>
						</div>
						<p>
						</p>
						<p>
						</p>
						
					</div>
				</div>
				<script>
					jQuery(document).ready(function(){
						jQuery(".retval").live('click',function(){
							jQuery("#wpaac_cdnurl").val(jQuery(this).text()).focus();	
						});
						jQuery("#wpaac_listAWSCDN").click(function(){
							var ak = jQuery("#wpaac_cdnak").val();
							jQuery("#wpaac_cdnak").focus();
							if(ak == "") return;
							var sk = jQuery("#wpaac_cdnsk").val();
							jQuery("#wpaac_cdnsk").focus();
							if(sk == "") return;
							var ori = jQuery("#wpaac_cdnorigin").val();
							var ap = jQuery("#wpaac_cdnprice").val();
							jQuery("#wpaac_listAWSCDN").focus();
							jQuery.ajax({
								url: ajaxurl,
								data: {
									'action':'wpaac_list_cdn',
									'wpaac_ak' : ak,
									'wpaac_sk' : sk,
									'wpaac_ori' : ori
								},
								success:function(data) {
									jQuery("#wpaac_WPAresult").html(data);
								},
								error: function(errorThrown){
									jQuery("#wpaac_WPAresult").html(errorThrown);
								}
							});	
						});
						
						jQuery("#wpaac_resetcdn").click(function(){
							var ori = jQuery("#wpaac_cdnorigin").val();
							jQuery.ajax({
								url: ajaxurl,
								data: {
									'action':'wpaac_reset_cdn',
									'wpaac_ori' : ori
								},
								success:function(data) {
									jQuery("#wpaac_WPAResult").html(data);
								},
								error: function(errorThrown){
									jQuery("#wpaac_WPAResult").html(errorThrown);
								}
							});	
						});
						jQuery("#wpaac_deployAWSCDN").click(function(){	
							var ak = jQuery("#wpaac_cdnak").val();
							jQuery("#wpaac_cdnak").focus();
							if(ak == "") return;
							var sk = jQuery("#wpaac_cdnsk").val();
							jQuery("#wpaac_cdnsk").focus();
							if(sk == "") return;
							var ori = jQuery("#wpaac_cdnorigin").val();
							var ap = jQuery("#wpaac_cdnprice").val();
							jQuery("#wpaac_deployAWSCDN").focus();
							jQuery.ajax({
								url: ajaxurl,
								data: {
									'action':'wpaac_deploy_cdn',
									'wpaac_ak' : ak,
									'wpaac_sk' : sk,
									'wpaac_ap' : ap,
									'wpaac_ori' : ori
								},
								success:function(data) {
									jQuery("#wpaac_WPAresult").html(data);
								},
								error: function(errorThrown){
									jQuery("#wpaac_WPAresult").html(errorThrown);
								}
							});
							
						});
						
						jQuery("#wpaac_cdnurl").blur(function(){
							var cdnurl = jQuery(this).val();
							jQuery.ajax({
								url: ajaxurl,
								data: {
									'action':'wpaac_set_cdn',
									'wpaac_cdnurl' : cdnurl
								},
								success:function(data) {
									jQuery("#wpaac_WPAResult").html(data);
								},
								error: function(errorThrown){
									jQuery("#wpaac_WPAResult").html(errorThrown);
								}
							});
							
						});
					});
				</script>				