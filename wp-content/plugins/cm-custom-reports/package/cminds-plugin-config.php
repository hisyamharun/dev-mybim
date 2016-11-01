<?php

$cminds_plugin_config = array(
	'plugin-is-pro'				 => FALSE,
	'plugin-is-addon'			 => FALSE,
	'plugin-version'			 => '1.0.7',
	'plugin-abbrev'				 => 'cmcr',
	'plugin-file'				 => CMCR_PLUGIN_FILE,
    'plugin-affiliate'               => '',
    'plugin-redirect-after-install'  => admin_url( 'admin.php?page=cm-custom-reports-settings' ),
    'plugin-show-guide'              => TRUE,
    'plugin-guide-text'              => '<div style="display:block">
        <ol>
            <li>Go to <strong>"Reports"</strong> under the CM Custom Reports  menu</li>
            <li>Choose the report you want to generate</li>
            <li>You can adjust the dates or select the report graph type.</li>
            <li>You can also download the generated report output to a PDF format</li>
        </ol>
    </div>',
    'plugin-guide-video-height'      => 240,
    'plugin-guide-videos'            => array(
        array( 'title' => 'Installation tutorial', 'video_id' => '164061174' ),
    ),
	'plugin-dir-path'			 => plugin_dir_path( CMCR_PLUGIN_FILE ),
	'plugin-dir-url'			 => plugin_dir_url( CMCR_PLUGIN_FILE ),
	'plugin-basename'			 => plugin_basename( CMCR_PLUGIN_FILE ),
	'plugin-icon'				 => '',
	'plugin-name'				 => CMCR_NAME,
	'plugin-license-name'		 => CMCR_NAME,
	'plugin-slug'				 => '',
	'plugin-short-slug'			 => 'custom-reports',
	'plugin-menu-item'			 => CMCR_SLUG_NAME,
	'plugin-textdomain'			 => CMCR_SLUG_NAME,
	'plugin-userguide-key'		 => '306-cm-custom-reports',
	'plugin-store-url'			 => 'https://www.cminds.com/wordpress-plugins-library/purchase-cm-custom-reports-plugin-for-wordpress/',
	'plugin-support-url'		 => 'https://wordpress.org/support/plugin/cm-custom-reports',
	'plugin-review-url'			 => 'https://wordpress.org/support/view/plugin-reviews/cm-custom-reports',
	'plugin-changelog-url'		 => CMCR_RELEASE_NOTES,
	'plugin-licensing-aliases'	 => array( '' ),
	'plugin-compare-table'	 => '<div class="pricing-table" id="pricing-table">
                <ul>
                    <li class="heading">Current Edition</li>
                    <li class="price">$0.00</li>
                    <li class="noaction"><span>Free Download</span></li>
                    <li>Includes 5 Reports</li>
                    <li>Includes PDF export</li>
                    <li>X</li>
                    <li>X</li>
                    <li>X</li>
                    <li>X</li>
                 <li class="price">$0.00</li>
                    <li class="noaction"><span>Free Download</span></li>
                </ul>

                <ul>
                    <li class="heading">Pro</li>
                    <li class="price">$29.00</li>
                    <li class="action"><a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-custom-reports-plugin-for-wordpress/" style="background-color:darkblue;" target="_blank">More Info</a> &nbsp;&nbsp;<a href="https://www.cminds.com/downloads/cm-custom-reports/?edd_action=add_to_cart&download_id=32472&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" target="_blank">Buy Now</a></li>
                 <li>Includes <strong>17</strong> Reports</li>
                    <li>Includes PDF export</li>
                    <li>Includes CSV export</li>
                    <li>Includes reports scheduling</li>
                    <li>Includes Email Templates</li>
                    <li>Includes sent reports log</li>
                    <li class="price">$29.00</li>
                     <li class="action"><a href="https://www.cminds.com/wordpress-plugins-library/purchase-cm-custom-reports-plugin-for-wordpress/" style="background-color:darkblue;" target="_blank">More Info</a> &nbsp;&nbsp;<a href="https://www.cminds.com/downloads/cm-custom-reports/?edd_action=add_to_cart&download_id=32472&wp_referrer=https://www.cminds.com/checkout/&edd_options[price_id]=1" target="_blank">Buy Now</a></li>
               </ul>

            </div>',
);