<?php
/**
 * EventON Settings Tab for addons and licensing
<<<<<<< refs/remotes/origin/dev4
 * 
 * @version 2.3.21
 * @updated 2016-4
=======
 * @version 2.4
>>>>>>> AddedFlatsome Themes
 */

global $ajde, $eventon;

?>
<div id="evcal_4" class="postbox evcal_admin_meta">	
	<?php
		// UPDATE eventon addons list
		$eventon->evo_updater->product->ADD_update_addons();		
	?>
	<div class='evo_button_h1'>
<<<<<<< refs/remotes/origin/dev4
		<p><a href='http://www.myeventon.com/documentation/can-download-addon-updates/' class='evo_admin_btn btn_prime' target='_blank'><?php _e('How to update EventON plugin and addons to latest version?','eventon');?></a>  <a style='margin-left:5px;'href='http://www.myeventon.com/documentation/update-eventon/' target='_blank' class='evo_admin_btn btn_triad'><?php _e('How to update EventON Manually','eventon');?></a></p>
=======
		<p><a href='http://www.myeventon.com/documentation/can-download-addon-updates/' class='evo_admin_btn btn_prime' target='_blank'><?php _e('How to update EventON addons to latest version','eventon');?></a>  <a style='margin-left:5px;'href='http://www.myeventon.com/documentation/update-eventon/' target='_blank' class='evo_admin_btn btn_triad'><?php _e('How to update EventON Manually','eventon');?></a></p>
>>>>>>> AddedFlatsome Themes
	</div>
	<div class='evo_addons_page addons'>		
		<?php

			$admin_url = admin_url();
			$show_license_msg = true;

			//delete_option('_evo_products');
			
			// get all evo product licenses
			$evo_licenses = $eventon->evo_updater->product->get_products_array();

			$_evo_products = get_option('_evo_products');
<<<<<<< refs/remotes/origin/dev4

			$eventonVersion = $eventon->version; //$_evo_products['eventon']['version']
			
			// ACTIVATED
				if($eventon->evo_updater->product->is_activated()):
=======
			$eventonVersion = $eventon->version; //$_evo_products['eventon']['version']
			
			// ACTIVATED
				if($eventon->evo_updater->product->kriyathmakada()):
>>>>>>> AddedFlatsome Themes

					$_hasUpdate = $eventon->evo_updater->product->has_update('eventon');
					$new_update_details_btn = ($_hasUpdate)?
						"<p class='links'><b>".__('New Update availale','eventon')."</b><br/><a href='".$admin_url."update-core.php'>Update Now</a> | <a class='thickbox' href='".BACKEND_URL."plugin-install.php?tab=plugin-information&plugin=eventon&section=changelog&TB_iframe=true&width=600&height=400'>Version Details</a></p>":null;

<<<<<<< refs/remotes/origin/dev4
						$new_update_details_btn = "<a href='http://www.myeventon.com/documentation/' target='_blank'>Documentation</a><br/><a href='http://www.myeventon.com/news/' target='_blank'>News & Updates</a>";
=======
						$new_update_details_btn = "<a class='evo_admin_btn btn_secondary' href='http://www.myeventon.com/documentation/' target='_blank'>Documentation</a> <a class='evo_admin_btn btn_secondary' href='http://www.myeventon.com/news/' target='_blank'>News & Updates</a>";
>>>>>>> AddedFlatsome Themes

					?>
						<div class="addon main activated <?php echo ($_hasUpdate)? 'hasupdate':null;?>">
							<h2>EventON</h2>
<<<<<<< refs/remotes/origin/dev4
							<p class='version'><?php echo $eventonVersion;?> <i>(<?php echo $_evo_products['eventon']['remote_version'];?>)</i></p>
							<p>License Status: <strong><?php _e('Activated','eventon');?></strong> | <a id='evoDeactLic' style='cursor:pointer'><?php _e('Deactivate','eventon');?></a></p>
							<p>Purchase Key: <strong><?php echo $eventon->evo_updater->product->get_partial_license();?></strong></p>
							<p><i><?php _e('Info: You have successfully activated this license on this site. You will need a seperate license to activate eventON for another site.','eventon');?></i><?php $ajde->wp_admin->echo_tooltips('EventON license you have purchased from Codecanyon, either regular or extended will allow you to install eventON in ONE site only. In order to install eventON in another site you will need a seperate license.');?></p>
							<p class='links'><?php echo $new_update_details_btn;?></p>
=======
							<p class='version'>v<?php echo $eventonVersion;?></p>
							<p>License Status: <strong style='text-transform:uppercase'><?php _e('Activated','eventon');?></strong> | <a id='evoDeactLic' style='cursor:pointer'><?php _e('Deactivate','eventon');?></a></p>
							<p>Purchase Key: <strong><?php echo $eventon->evo_updater->product->get_partial_license();?></strong></p>
							<p><i><?php _e('Info: You will need a seperate license to use eventON on another site.','eventon');?></i><?php $ajde->wp_admin->echo_tooltips('EventON license you have purchased from Codecanyon, either regular or extended will allow you to install eventON in ONE site only. In order to install eventON in another site you will need a seperate license.');?></p>
							<p class='links' style='padding-top:10px;'><?php echo $new_update_details_btn;?></p>
>>>>>>> AddedFlatsome Themes
						</div>
					<?php 

			// NOT ACTIVATED
				else:
				?>
				<div id='evo_license_main' class="addon main">
					<h2>EventON</h2>
<<<<<<< refs/remotes/origin/dev4
					<p class='version'><?php echo $eventonVersion;?><span>/<?php echo $_evo_products['eventon']['remote_version'];?></span></p>
					<p class='status'><?php _e('License Status','eventon');?>: <strong><?php _e('Not Activated','eventon');?></strong></p>
					<p class='action'><a class='ajde_popup_trig evo_admin_btn btn_prime' dynamic_c='1' content_id='eventon_pop_content_001' poptitle='Activate EventON License'>Activate Now</a></p>
					<p class='activation_text'><i>EventON plugin and its addons should function 100% regardless license activation in here. Also we have cut down on autoupdate check times due to server crashes on our end and hope to resolve this in future versions. <a href='http://www.myeventon.com/documentation/how-to-find-eventon-license-key/' target='_blank'>How to find activation key</a><?php $eventon->throw_guide('EventON license you have purchased from Codecanyon, either regular or extended will allow you to install eventON in ONE site only. In order to install eventON in another site you will need a seperate license.');?></i>
					</p>

						<div id='eventon_pop_content_001' class='evo_hide_this'>
							<p><?php _e('Enter your codecanyon Purchase Key','eventon');?>:<br/>
							<input class='eventon_license_key_val' type='text' style='width:100%'/>
							<input class='eventon_slug' type='hidden' value='eventon' />
							<input class='eventon_license_div' type='hidden' value='evo_license_main' /><br/><i>More information on <a href='http://www.myeventon.com/documentation/how-to-find-eventon-license-key/' target='_blank'><?php _e('How to find eventON purchase key','eventon');?></a></i></p>
							<p style='text-align:center'><a class='eventon_submit_license evo_admin_btn btn_prime'><?php _e('Activate Now','eventon');?></a></p>
=======
					<p class='version'>v<?php echo $eventonVersion;?><span></span></p>
					<p class='status'><?php _e('License Status','eventon');?>: <strong style='text-transform:uppercase'><?php _e('Not Activated','eventon');?></strong></p>
					<p class='action'><a class='ajde_popup_trig evo_admin_btn btn_prime' dynamic_c='1' content_id='eventon_pop_content_001' poptitle='Activate EventON License'>Activate Now</a></p>
					<p class='activation_text'><i><a href='http://www.myeventon.com/documentation/how-to-find-eventon-license-key/' target='_blank'>How to find activation key</a><?php $eventon->throw_guide('EventON license you have purchased from Codecanyon, either regular or extended will allow you to install eventON in ONE site only. In order to install eventON in another site you will need a seperate license.');?></i>
					</p>

						<div id='eventon_pop_content_001' class='evo_hide_this'>
							<p style='padding-top:10px;'><?php _e('Enter Your EventON Codecanyon Purchase Key','eventon');?>
							<input class='eventon_license_key_val' type='text' style='width:100%; margin-top:5px; display:block;border-radius:5px; font-size:20px'/>
							<input class='eventon_slug' type='hidden' value='eventon' />
							<input class='eventon_license_div' type='hidden' value='evo_license_main' /><i style='opacity:0.6;padding-top:5px; display:block'><?php _e('More information on','eventon');?> <a href='http://www.myeventon.com/documentation/how-to-find-eventon-license-key/' target='_blank'><?php _e('How to find eventON purchase key','eventon');?></a></i></p>
							<p style='text-align:center'><a class='eventon_submit_license evo_admin_btn btn_prime' data-type='main' data-slug='eventon'><?php _e('Activate Now','eventon');?></a></p>
>>>>>>> AddedFlatsome Themes
						</div>
				</div>
				<?php
				endif;
		?>
		<?php // ADDONS 			
			global $wp_version; ?>				
			<div id='evo_addons_list'></div>
		<div class="clear"></div>
	</div>
	<?php
		// Throw the output popup box html into this page		
		echo $ajde->wp_admin->lightbox_content(array('content'=>'Loading...', 'type'=>'padded'));
	?>
</div>