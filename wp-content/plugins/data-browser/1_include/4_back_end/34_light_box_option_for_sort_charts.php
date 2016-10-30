<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_sort_charts_light_box_option' ) ) {
	function ws_db_sort_charts_light_box_option($all_setting)
	{
	?>
	<span  style="display:none" >
		<div id="ws_db_sort_charts_light_box_option" style="background-color:white;padding: 38px 20px;" >
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Chart type ', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'Select chart type. ', 'data-browser-by-ws' ); ?></div>
				<div class="ws_db_option_max_length_in">
					<select  class="ws_select_chart_type" name="sort_charts_setting_instance214_chart_type" >
						<?php $select_option= array('Pie Chart','Donut Chart','Bar Chart','Column Chart','Area Chart','Line Chart','Scatter Chart','Stepped Area Chart','Table'); 
						foreach($select_option as $option){
							?><option  value="<?php echo $option; ?>" ><?php echo $option; ?></option><?php	  
						}?>
					</select>
				</div>			
			</div>
			<div class="ws_db_setting_section" >
				<h5 class="ws_db_setting_title" ><?php _e( 'Chart title ', 'data-browser-by-ws' ); ?></h5>
				<div class="ws_db_setting_description" ><?php _e( 'Set chart title. ', 'data-browser-by-ws' ); ?></div>
				<div class="ws_db_option_max_length_in">
					<input type="text" name="sort_charts_setting_instance214_chart_title" >
				</div>			
			</div>
		</div>
	</span>
	<?php 
		
	}
}
?>