<?php
/**
 * EventON Admin Include
 *
 * Include for EventON related events in admin.
 *
 * @author 		AJDE
 * @category 	Admin
 * @package 	EventON/Admin
<<<<<<< refs/remotes/origin/dev4
 * @version     2.3.21
=======
 * @version     2.4.4
>>>>>>> AddedFlatsome Themes
 */
class eventon_admin_shortcode_box{
	
	private $_in_select_step=false;
	private $evopt;

	function __construct(){
		$this->evopt =  get_option('evcal_options_evcal_1');
	}
	
	public function shortcode_default_field($key){
		$options_1 = $this->evopt;

<<<<<<< refs/remotes/origin/dev4
		// event type 3
			 if(!empty($options_1['evcal_ett_3']) && $options_1['evcal_ett_3']=='yes' && !empty($options_1['evcal_eventt3'])){
			 	$__event_tt3 = array(
					'name'=>'Event Type 3',
					'type'=>'taxonomy',
					'guide'=>'Event Type 3 category IDs - seperate by commas (eg. 3,12)',
					'placeholder'=>'eg. 3, 12',
					'var'=>'event_type_3',
					'default'=>'0'
				);
			 }else{ $__event_tt3 = array(); }
=======
		// Additional Event Type taxonomies 
			$event_types_sc = array();
			for( $x=1; $x <= (apply_filters('evo_event_type_count',5)); $x++){
				if($x <=2 ) continue;
				if(!empty($options_1['evcal_ett_'.$x]) && $options_1['evcal_ett_'.$x]=='yes' && !empty($options_1['evcal_eventt'.$x])){
				 	$event_types_sc['event_type_'.$x] = array(
						'name'=>'Event Type '.$x,
						'type'=>'taxonomy',
						'guide'=>'Event Type '.$x.' category IDs - seperate by commas (eg. 3,12)',
						'placeholder'=>'eg. 3, 12',
						'var'=>'event_type_'.$x,
						'default'=>'0'
					);
				}else{ $event_types_sc['event_type_'.$x] = array(); }
			}
>>>>>>> AddedFlatsome Themes

		
		$SC_defaults = array(
			'cal_id'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Calendar ID (optional)',
=======
				'name'=>__('Calendar ID (optional)','eventon'),
>>>>>>> AddedFlatsome Themes
				'type'=>'text',
				'var'=>'cal_id',
				'default'=>'0',
				'placeholder'=>'eg. 1'
			),
			'number_of_months'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Number of Months',
=======
				'name'=>__('Number of Months','eventon'),
>>>>>>> AddedFlatsome Themes
				'type'=>'text',
				'var'=>'number_of_months',
				'default'=>'0',
				'placeholder'=>'eg. 5'
			),		
			'show_et_ft_img'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Show Featured Image',
=======
				'name'=>__('Show Featured Image','eventon'),
>>>>>>> AddedFlatsome Themes
				'type'=>'YN',
				'var'=>'show_et_ft_img',
				'default'=>'no'
			),
			'hide_past'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Hide Past Events',
=======
				'name'=>__('Hide Past Events','eventon'),
>>>>>>> AddedFlatsome Themes
				'type'=>'YN',
				'var'=>'hide_past',
				'default'=>'no'
			),'hide_past_by'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Hide Past Events by',
				'guide'=>'You can choose which date (start or end) to use to decide when to clasify them as past events.',
=======
				'name'=>__('Hide Past Events by','eventon'),
				'guide'=>__('You can choose which date (start or end) to use to decide when to clasify them as past events.','eventon'),
>>>>>>> AddedFlatsome Themes
				'type'=>'select',
				'var'=>'hide_past_by',
				'default'=>'ee',
				'options'=>array( 
					'ss'=>'Start Date/time',
					'ee'=>'End Date/Time',
				)
			),
			'ft_event_priority'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Feature event priority',
				'type'=>'YN',
				'guide'=>'Move featured events above others',
=======
				'name'=>__('Feature event priority','eventon'),
				'type'=>'YN',
				'guide'=>__('Move featured events above others','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'ft_event_priority',
				'default'=>'no',
			),
			'event_count'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Event count limit',
				'placeholder'=>'eg. 3',
				'type'=>'text',
				'guide'=>'Limit number of events for each month eg. 3',
=======
				'name'=>__('Event count limit','eventon'),
				'placeholder'=>'eg. 3',
				'type'=>'text',
				'guide'=>__('Limit number of events for each month eg. 3','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'event_count',
				'default'=>'0'
			),
			'month_incre'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Month Increment',
				'type'=>'text',
				'placeholder'=>'eg. +1',
				'guide'=>'Change starting month (eg. +1)',
=======
				'name'=>__('Month Increment','eventon'),
				'type'=>'text',
				'placeholder'=>'eg. +1',
				'guide'=>__('Change starting month (eg. +1)','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'month_incre',
				'default'=>'0'
			),
			'event_type'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Event Type',
				'type'=>'taxonomy',
				'guide'=>'Event Type category IDs - seperate by commas (eg. 3,12)',
=======
				'name'=>__('Event Type','eventon'),
				'type'=>'taxonomy',
				'guide'=>__('Event Type category IDs - seperate by commas (eg. 3,12)','eventon'),
>>>>>>> AddedFlatsome Themes
				'placeholder'=>'eg. 3, 12',
				'var'=>'event_type',
				'default'=>'0'
			),'event_type_2'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Event Type 2',
				'type'=>'taxonomy',
				'guide'=>'Event Type 2 category IDs - seperate by commas (eg. 3,12)',
				'placeholder'=>'eg. 3, 12',
				'var'=>'event_type_2',
				'default'=>'0'
			),'event_type_3'=>$__event_tt3,
			'fixed_month'=>array(
				'name'=>'Fixed Month',
				'type'=>'text',
				'guide'=>'Set fixed month for calendar start (integer)',
=======
				'name'=>__('Event Type 2','eventon'),
				'type'=>'taxonomy',
				'guide'=>__('Event Type 2 category IDs - seperate by commas (eg. 3,12)','eventon'),
				'placeholder'=>'eg. 3, 12',
				'var'=>'event_type_2',
				'default'=>'0'
			),
			'event_type_3'=>$event_types_sc['event_type_3'],
			'event_type_4'=>$event_types_sc['event_type_4'],
			'event_type_5'=>$event_types_sc['event_type_5'],
			'fixed_month'=>array(
				'name'=>__('Fixed Month','eventon'),
				'type'=>'text',
				'guide'=>__('Set fixed month for calendar start (integer)','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'fixed_month',
				'default'=>'0',
				'placeholder'=>'eg. 10'
			),
			'fixed_year'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Fixed Year',
				'type'=>'text',
				'guide'=>'Set fixed year for calendar start (integer)',
=======
				'name'=>__('Fixed Year','eventon'),
				'type'=>'text',
				'guide'=>__('Set fixed year for calendar start (integer)','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'fixed_year',
				'default'=>'0',
				'placeholder'=>'eg. 2013'
			),
			'event_order'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Event Order',
				'type'=>'select',
				'guide'=>'Select ascending or descending order for event. By default it will be Ascending order.',
=======
				'name'=>__('Event Order','eventon'),
				'type'=>'select',
				'guide'=>__('Select ascending or descending order for event. By default it will be Ascending order.','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'event_order',
				'default'=>'ASC',
				'options'=>array('ASC'=>'ASC','DESC'=>'DESC')
			),
			'pec'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Event Cut-off',
				'type'=>'select',
				'guide'=>'Past or upcoming events cut-off time. This will allow you to override past event cut-off settings for calendar events. Current date = today at 12:00am',
=======
				'name'=>__('Event Cut-off','eventon'),
				'type'=>'select',
				'guide'=>__('Past or upcoming events cut-off time. This will allow you to override past event cut-off settings for calendar events. Current date = today at 12:00am','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'pec',
				'default'=>'Current Time',
				'options'=>array( 
					'ct'=>'Current Time: '.date('m/j/Y g:i a', current_time('timestamp')),
					'cd'=>'Current Date: '.date('m/j/Y', current_time('timestamp')),
				)
			),
			'lang'=>array(
				'name'=>'Language Variation (<a href="'.get_admin_url().'admin.php?page=eventon&tab=evcal_2">Update Language Text</a>)',
				'type'=>'select',
<<<<<<< refs/remotes/origin/dev4
				'guide'=>'Select which language variation text to use',
=======
				'guide'=>__('Select which language variation text to use','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'lang',
				'default'=>'L1',
				'options'=>array('L1'=>'L1','L2'=>'L2','L3'=>'L3')
			),
			'hide_mult_occur'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Hide multiple occurence (HMO)',
				'type'=>'YN',
				'guide'=>'Hide events from showing more than once between months',
=======
				'name'=>__('Hide multiple occurence (HMO)','eventon'),
				'type'=>'YN',
				'guide'=>__('Hide events from showing more than once between months','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'hide_mult_occur',
				'default'=>'no',
			),
			'show_repeats'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Show all repeating events while HMO',
				'type'=>'YN',
				'guide'=>'If you are hiding multiple occurence of event but want to show all repeating events set this to yes',
=======
				'name'=>__('Show all repeating events while HMO','eventon'),
				'type'=>'YN',
				'guide'=>__('If you are hiding multiple occurence of event but want to show all repeating events set this to yes','eventon'),
>>>>>>> AddedFlatsome Themes
				'var'=>'show_repeats',
				'default'=>'no',
			),
			'fixed_mo_yr'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Fixed Month/Year',
				'type'=>'fmy',
				'guide'=>'Set fixed month and year value (Both values required)(integer)',
				'var'=>'fixed_my',
			),'fixed_d_m_y'=>array(
				'name'=>'Fixed Date/Month/Year',
				'type'=>'fdmy',
				'guide'=>'Set fixed date, month and year value (All values required)(integer)',
				'var'=>'fixed_my',
			),'evc_open'=>array(
				'name'=>'Open eventCards on load',
				'type'=>'YN',
				'guide'=>'Open eventCards when the calendar first load on the page by default. This will override the settings saved for default calendar.',
				'var'=>'evc_open',
				'default'=>'no',
			),'UIX'=>array(
				'name'=>'User Interaction',
				'type'=>'select',
				'guide'=>'Select the user interaction option to override individual event user interactions',
				'var'=>'ux_val',
				'default'=>'0',
				'options'=>apply_filters('eventon_uix_shortcode_opts', array('0'=>'None','X'=>'Do not interact','1'=>'Slide Down EventCard','3'=>'Lightbox popup window'))
			),'etc_override'=>array(
				'name'=>'Event type color override',
				'type'=>'YN',
				'guide'=>'Select this option to override event colors with event type colors, if they exists',
				'var'=>'etc_override',
				'default'=>'no',
			),'only_ft'=>array(
				'name'=>'Show only featured events',
				'type'=>'YN',
				'guide'=>'Display only featured events in the calendar',
				'var'=>'only_ft',
				'default'=>'no',
			),'jumper'=>array(
				'name'=>'Show jump months option',
				'type'=>'YN',
				'guide'=>'Display month jumper on the calendar',
				'var'=>'jumper',
				'default'=>'no',
			),'accord'=>array(
				'name'=>'Accordion effect on eventcards','type'=>'YN',
				'guide'=>'This will close open events when new one clicked','var'=>'accord','default'=>'no',
			),'sort_by'=>array(
				'name'=>'Default Sort by',
				'type'=>'select',
				'guide'=>'Sort calendar events by on load',
				'var'=>'sort_by',
				'default'=>'sort_date',
				'options'=>array( 
					'sort_date'=>'Date',
					'sort_title'=>'Title',
					'sort_posted'=>'Posted Date',
					'sort_rand'=>'Random Order',
				)
			),'hide_sortO'=>array(
				'name'=>'Hide sort options section',
				'type'=>'YN',
				'guide'=>'This will hide sort options section on the calendar.',
				'var'=>'hide_so',
				'default'=>'no',
			),'expand_sortO'=>array(
				'name'=>'Expand sort options by default',
				'type'=>'YN',
				'guide'=>'This will expand sort options section on load for calendar.',
				'var'=>'exp_so',
				'default'=>'no',
			),'rtl'=>array(
				'name'=>'* RTL can now be changed from eventON settings',
=======
				'name'=>__('Fixed Month/Year','eventon'),
				'type'=>'fmy',
				'guide'=>__('Set fixed month and year value (Both values required)(integer)','eventon'),
				'var'=>'fixed_my',
			),'fixed_d_m_y'=>array(
				'name'=>__('Fixed Date/Month/Year','eventon'),
				'type'=>'fdmy',
				'guide'=>__('Set fixed date, month and year value (All values required)(integer)','eventon'),
				'var'=>'fixed_my',
			),'evc_open'=>array(
				'name'=>__('Open eventCards on load','eventon'),
				'type'=>'YN',
				'guide'=>__('Open eventCards when the calendar first load on the page by default. This will override the settings saved for default calendar.','eventon'),
				'var'=>'evc_open',
				'default'=>'no',
			),'UIX'=>array(
				'name'=>__('User Interaction','eventon'),
				'type'=>'select',
				'guide'=>__('Select the user interaction option to override individual event user interactions','eventon'),
				'var'=>'ux_val',
				'default'=>'0',
				'options'=>apply_filters('eventon_uix_shortcode_opts', array(
					'0'=>'None',
					'X'=>__('Do not interact','eventon'),
					'1'=>__('Slide Down EventCard','eventon'),
					'3'=>__('Lightbox popup window','eventon')))
			),'etc_override'=>array(
				'name'=>__('Event type color override','eventon'),
				'type'=>'YN',
				'guide'=>__('Select this option to override event colors with event type colors, if they exists','eventon'),
				'var'=>'etc_override',
				'default'=>'no',
			),'only_ft'=>array(
				'name'=>__('Show only featured events','eventon'),
				'type'=>'YN',
				'guide'=>__('Display only featured events in the calendar','eventon'),
				'var'=>'only_ft',
				'default'=>'no',
			),'jumper'=>array(
				'name'=>__('Show jump months option','eventon'),
				'type'=>'YN',
				'guide'=>__('Display month jumper on the calendar','eventon'),
				'var'=>'jumper',
				'default'=>'no',
				),'exp_jumper'=>array(
					'name'=>__('Expand jump month on load','eventon'),
					'type'=>'YN',
					'guide'=>__('Show expand jump month section when calendar load','eventon'),
					'var'=>'exp_jumper',
					'default'=>'no',
				),
			'accord'=>array(
				'name'=>__('Accordion effect on eventcards','eventon'),'type'=>'YN',
				'guide'=>__('This will close open events when new one clicked','eventon'),'var'=>'accord','default'=>'no',
			),'sort_by'=>array(
				'name'=>__('Default Sort by','eventon'),
				'type'=>'select',
				'guide'=>__('Sort calendar events by on load','eventon'),
				'var'=>'sort_by',
				'default'=>'sort_date',
				'options'=>array( 
					'sort_date'=>__('Date','eventon'),
					'sort_title'=>__('Title','eventon'),
					'sort_posted'=>__('Posted Date','eventon'),
					'sort_rand'=>__('Random Order','eventon'),
				)
			),'hide_sortO'=>array(
				'name'=>__('Hide sort options section','eventon'),
				'type'=>'YN',
				'guide'=>__('This will hide sort options section on the calendar.','eventon'),
				'var'=>'hide_so',
				'default'=>'no',
			),'expand_sortO'=>array(
				'name'=>__('Expand sort options by default','eventon'),
				'type'=>'YN',
				'guide'=>__('This will expand sort options section on load for calendar.','eventon'),
				'var'=>'exp_so',
				'default'=>'no',
			),'rtl'=>array(
				'name'=>__('* RTL can now be changed from eventON settings','eventon'),
>>>>>>> AddedFlatsome Themes
				'type'=>'note',
				'var'=>'rtl',
				'default'=>'no',
			),'show_limit'=>array(
<<<<<<< refs/remotes/origin/dev4
				'name'=>'Show load more events button',
				'type'=>'YN',
				'guide'=>'Require "event count limit" to work, then this will add a button to show rest of the events for calendar in increments',
				'var'=>'show_limit',
				'default'=>'no',
			),'show_limit_redir'=>array(
				'name'=>'Redirect load more events button',
				'type'=>'text',
				'guide'=>'http:// URL the load more events button will redirect to instead of loading more events on the same calendar.',
				'var'=>'show_limit_redir',
				'default'=>'no',
			),'only_logged_user'=>array(
				'name'=>'Make this calendar only visible to loggedin user',
				'type'=>'YN',
				'guide'=>'This will make this calendar only visible to loggedin users',
				'var'=>'only_logged_user',
				'default'=>'no',
=======
				'name'=>__('Show load more events button','eventon'),
				'type'=>'YN',
				'guide'=>__('Require "event count limit" to work, then this will add a button to show rest of the events for calendar in increments','eventon'),
				'var'=>'show_limit',
				'default'=>'no',
			),'show_limit_redir'=>array(
				'name'=>__('Redirect load more events button','eventon'),
				'type'=>'text',
				'guide'=>__('http:// URL the load more events button will redirect to instead of loading more events on the same calendar.','eventon'),
				'var'=>'show_limit_redir',
				'default'=>'no',
			),'members_only'=>array(
				'name'=>__('Make this calendar only visible to loggedin user','eventon'),
				'type'=>'YN',
				'guide'=>__('This will make this calendar only visible to loggedin users','eventon'),
				'var'=>'members_only',
				'default'=>'no',
			),'layout_changer'=>array(
				'name'=>__('Show calendar layout changer','eventon'),
				'type'=>'YN',
				'guide'=>__('Show layout changer on calendar so users can choose between tiles or rows layout','eventon'),
				'var'=>'layout_changer',
				'default'=>'no',
			),'filter_type'=>array(
				'name'=>__('Calendar Filter Type','eventon'),
				'type'=>'select',
				'guide'=>__('If sorting/filter allowed for calendar, you can select between dropdown list or checkbox list for multiple filter selection.','eventon'),
				'var'=>'filter_type',
				'default'=>'default',
				'options'=>array( 
					'default'=>__('Dropdown Filter List','eventon'),
					'select'=>__('Multiple Checkbox Filter','eventon'),
				)
>>>>>>> AddedFlatsome Themes
			)

		);
		
		return $SC_defaults[$key];
	
	}	
	
	// array of shortcode variables
		public function get_shortcode_field_array(){
			$_current_year = date('Y');
			$shortcode_guide_array = apply_filters('eventon_shortcode_popup', array(
				array(
					'id'=>'s1',
					'name'=>'Main Calendar',
					'code'=>'add_eventon',
					'variables'=>apply_filters('eventon_basiccal_shortcodebox', array(
						$this->shortcode_default_field('cal_id')
						,$this->shortcode_default_field('show_et_ft_img')
						,$this->shortcode_default_field('ft_event_priority')
						,$this->shortcode_default_field('only_ft')
						,$this->shortcode_default_field('hide_past')	
						,$this->shortcode_default_field('hide_past_by')	
						,$this->shortcode_default_field('sort_by')
						,$this->shortcode_default_field('event_order')
						,$this->shortcode_default_field('event_count')
						,$this->shortcode_default_field('show_limit')
						,$this->shortcode_default_field('show_limit_redir')
						,$this->shortcode_default_field('month_incre')
						,$this->shortcode_default_field('event_type')
						,$this->shortcode_default_field('event_type_2')
						,$this->shortcode_default_field('event_type_3')
<<<<<<< refs/remotes/origin/dev4
=======
						,$this->shortcode_default_field('event_type_4')
						,$this->shortcode_default_field('event_type_5')
>>>>>>> AddedFlatsome Themes
						,$this->shortcode_default_field('etc_override')
						,$this->shortcode_default_field('fixed_mo_yr')						
						,$this->shortcode_default_field('lang')
						,$this->shortcode_default_field('UIX')
						,$this->shortcode_default_field('evc_open')					
						,array(
								'name'=>'Show jump months option',
								'type'=>'YN',
								'guide'=>'Display month jumper on the calendar',
								'var'=>'jumper',
								'default'=>'no',
								'afterstatement'=>'jumper_offset'
<<<<<<< refs/remotes/origin/dev4
							),array(
=======
							),
								$this->shortcode_default_field('exp_jumper'),							
								array(
>>>>>>> AddedFlatsome Themes
								'name'=>' Jumper Start Year',
								'type'=>'select',
								'options'=>array(
									'0'=>$_current_year-2,
									'1'=>$_current_year-1,
									'2'=>$_current_year,
									),
								'guide'=>'Select which year you want to set to start jumper options at relative to current year',
								'var'=>'jumper_offset','default'=>'0',
								'closestatement'=>'jumper_offset'
							)

						,$this->shortcode_default_field('hide_sortO')						
						,$this->shortcode_default_field('expand_sortO')
<<<<<<< refs/remotes/origin/dev4
=======
						,$this->shortcode_default_field('filter_type')
>>>>>>> AddedFlatsome Themes
						,$this->shortcode_default_field('accord')
						,array(
								'name'=>'Hide Calendar Arrows',
								'type'=>'YN',
								'guide'=>'This will hide calendar arrow navigations',
								'var'=>'hide_arrows',
								'default'=>'no',
							)
<<<<<<< refs/remotes/origin/dev4
						,array(
=======
						,
							array(
>>>>>>> AddedFlatsome Themes
								'name'=>'Activate Tile Design',
								'type'=>'YN',
								'guide'=>'This will activate the tile event design for calendar instead of rows of events.',
								'default'=>'no',
								'var'=>'tiles',
								'afterstatement'=>'tiles'
							),
							array(
								'name'=>'Tile Box Height (px)',
								'placeholder'=>'eg. 200',
								'type'=>'text',
								'guide'=>'Set the fixed height of event tile for the tiled calendar design',
								'var'=>'tile_height','default'=>'0'
							),array(
								'name'=>'Tile Background Color',
								'type'=>'select',
								'options'=>array(
									'0'=>'Event Color',
									'1'=>'Featured Image',
									),
								'guide'=>'Select the type of background for the event tile design',
								'var'=>'tile_bg','default'=>'0'
							),array(
								'name'=>'Number of Tiles in a Row',
								'type'=>'select',
								'options'=>array(
									'2'=>'2',
									'3'=>'3',
									'4'=>'4',
									),
								'guide'=>'Select the number of tiles to show on one row',
								'var'=>'tile_count','default'=>'0'
							),
							/*array(
								'name'=>'Tile Style',
								'type'=>'select',
								'options'=>array(
									'0'=>'Default',
									'1'=>'Top bar',
									),
								'guide'=>'With this you can select different layout styles for tiles',
								'var'=>'tile_style','default'=>'0'
							),*/
							array(
								'name'=>'Custom Code',
								'type'=>'customcode', 'value'=>'',
								'closestatement'=>'tiles'
							)
						,
<<<<<<< refs/remotes/origin/dev4
						//$this->shortcode_default_field('only_logged_user')
=======
						$this->shortcode_default_field('members_only')
>>>>>>> AddedFlatsome Themes
						
					))
				),
				array(
					'id'=>'s2',
					'name'=>'Events List',
					'code'=>'add_eventon_list',
<<<<<<< refs/remotes/origin/dev4
					'variables'=>array(
=======
					'variables'=> apply_filters('eventon_basiclist_shortcodebox',array(
>>>>>>> AddedFlatsome Themes
						$this->shortcode_default_field('number_of_months')
						,array(
							'name'=>'Event count limit',
							'placeholder'=>'eg. 3',
							'type'=>'text',
							'guide'=>'Limit number of events per month (integer)',
							'var'=>'event_count',
							'default'=>'0'
						)
						,$this->shortcode_default_field('show_limit')
						,$this->shortcode_default_field('show_limit_redir')
						,$this->shortcode_default_field('month_incre')
						,$this->shortcode_default_field('fixed_mo_yr')
						,$this->shortcode_default_field('cal_id')
						,$this->shortcode_default_field('event_order')
						,$this->shortcode_default_field('hide_past')
<<<<<<< refs/remotes/origin/dev4
						,$this->shortcode_default_field('hide_past_by')	
=======
						,$this->shortcode_default_field('hide_past_by')
						,$this->shortcode_default_field('event_type')
						,$this->shortcode_default_field('event_type_2')
						,$this->shortcode_default_field('event_type_3')
						,$this->shortcode_default_field('event_type_4')
						,$this->shortcode_default_field('event_type_5')	
>>>>>>> AddedFlatsome Themes
						,$this->shortcode_default_field('hide_mult_occur'),
						array(
							'name'=>'Show all repeating events while HMO',
							'type'=>'YN',
							'guide'=>'If you are hiding multiple occurence of event but want to show all repeating events set this to yes',
							'var'=>'show_repeats',
							'default'=>'no',
						),array(
<<<<<<< refs/remotes/origin/dev4
							'name'=>'Hide empty months',
=======
							'name'=>'Hide empty months (Use ONLY w/ event list)',
>>>>>>> AddedFlatsome Themes
							'type'=>'YN',
							'guide'=>'Hide months without any events on the events list',
							'var'=>'hide_empty_months',
							'default'=>'no',
						),array(
							'name'=>'Show year',
							'type'=>'YN',
							'guide'=>'Show year next to month name on the events list',
							'var'=>'show_year',
							'default'=>'no',
						),$this->shortcode_default_field('ft_event_priority'),
						$this->shortcode_default_field('only_ft'),
						$this->shortcode_default_field('etc_override'),
						$this->shortcode_default_field('accord'),
<<<<<<< refs/remotes/origin/dev4
						
					)
=======
						array(
								'name'=>'Activate Tile Design',
								'type'=>'YN',
								'guide'=>'This will activate the tile event design for calendar instead of rows of events.',
								'default'=>'no',
								'var'=>'tiles',
								'afterstatement'=>'tiles'
							),
							array(
								'name'=>'Tile Box Height (px)',
								'placeholder'=>'eg. 200',
								'type'=>'text',
								'guide'=>'Set the fixed height of event tile for the tiled calendar design',
								'var'=>'tile_height','default'=>'0'
							),array(
								'name'=>'Tile Background Color',
								'type'=>'select',
								'options'=>array(
									'0'=>'Event Color',
									'1'=>'Featured Image',
									),
								'guide'=>'Select the type of background for the event tile design',
								'var'=>'tile_bg','default'=>'0'
							),array(
								'name'=>'Number of Tiles in a Row',
								'type'=>'select',
								'options'=>array(
									'2'=>'2',
									'3'=>'3',
									'4'=>'4',
									),
								'guide'=>'Select the number of tiles to show on one row',
								'var'=>'tile_count','default'=>'0'
							),array(
								'name'=>'Custom Code',
								'type'=>'customcode', 'value'=>'',
								'closestatement'=>'tiles'
							)
						
					))
>>>>>>> AddedFlatsome Themes
				)
			));
			
			return $shortcode_guide_array;
		}

	// get content for shortcode generator
		public function get_content(){
<<<<<<< refs/remotes/origin/dev4
			global $ajde;

=======
			global $ajde, $eventon;

			if(!$eventon->evo_updater->kriyathmakada()) 
				return '<p style="padding:10px;text-align:center">'.$eventon->evo_updater->akriyamath_niwedanaya() .'</p>';
			
>>>>>>> AddedFlatsome Themes
			return $ajde->wp_admin->get_content(
				$this->get_shortcode_field_array(),
				'add_eventon'
			);
		}
<<<<<<< refs/remotes/origin/dev4

	/*
	// replaced	
		// INTERPRET shortcode from array
			public function shortcode_interpret($var){
				global $eventon;
				$line_class = array('fieldline');

				ob_start();		
				
				// GUIDE popup
				$guide = (!empty($var['guide']))? $eventon->throw_guide($var['guide'], 'L',false):null;

				// afterstatemnt class
				if(!empty($var['afterstatement'])){	$line_class[]='trig_afterst'; }

				// select step class
				if($this->_in_select_step){ $line_class[]='ss_in'; }


				if(!empty($var['type'])):

				switch($var['type']){
					// custom type and its html pluggability
					case has_action("eventon_shortcode_box_interpret_{$var['type']}"):
						do_action("eventon_shortcode_box_interpret_{$var['type']}");
					
					case 'YN':
						$line_class[]='evoYN_row';
						echo 
						"<div class='".implode(' ', $line_class)."'>
							<p class='label'><a class='evo_YN_btn ".( ($var['default']=='no')? 'NO':null )."' codevar='".$var['var']."'></a>
							<span >".$var['name'].
							"</span>".$guide."</p>							
						</div>";
					break;

					case 'customcode':
						echo $var['value'];
					break;
					
					case 'text':
						echo 
						"<div class='".implode(' ', $line_class)."'>
							<p class='label'><input class='evoPOSH_input' type='text' codevar='".$var['var']."' placeholder='".( (!empty($var['placeholder']))?$var['placeholder']:null) ."'/> ".$var['name']."".$guide."</p>
						</div>";
					break;

					case 'note':
						echo 
						"<div class='".implode(' ', $line_class)."'><p class='label'>".$var['name']."</p></div>";
					break;

					case 'fmy':
						$line_class[]='fmy';
						echo 
						"<div class='".implode(' ', $line_class)."'>
							<p class='label'>
								<input class='evoPOSH_input short' type='text' codevar='fixed_month' placeholder='eg. 11' title='Month'/><input class='evoPOSH_input short' type='text' codevar='fixed_year' placeholder='eg. 2014' title='Year'/> ".$var['name']."".$guide."</p>
						</div>";
					break;
					case 'fdmy':
						$line_class[]='fdmy';
						echo 
						"<div class='".implode(' ', $line_class)."'>
							<p class='label'>
								<input class='evoPOSH_input short shorter' type='text' codevar='fixed_date' placeholder='eg. 31' title='Date'/><input class='evoPOSH_input short shorter' type='text' codevar='fixed_month' placeholder='eg. 11' title='Month'/><input class='evoPOSH_input short shorter' type='text' codevar='fixed_year' placeholder='eg. 2014' title='Year'/> ".$var['name']."".$guide."</p>
						</div>";
					break;
					
					case 'eventtype':
						
						$terms = get_terms($var['var']);	
						
						$view ='';
						if(!empty($terms) && count($terms)>0){
							foreach($terms as $term){
								$view.= '<em>'.$term->name .' ('.$term->term_id.')</em>';
							}
						}
						
						$view_html = (!empty($view))? '<span class="evoPOSH_tax">Possible Values <span >'. $view .'</span></span>': null;
						
						
						echo 
						"<div class='".implode(' ', $line_class)."'>
							<p class='label'><input class='evoPOSH_input' type='text' codevar='".$var['var']."' placeholder='".( (!empty($var['placeholder']))?$var['placeholder']:null) ."'/> ".$var['name']." {$view_html}</p>
						</div>";
					break;
					
					case 'select':
						echo 
						"<div class='".implode(' ', $line_class)."'>
							<p class='label'>
								<select class='evoPOSH_select' codevar='".$var['var']."'>";
								$default = (!empty($var['default']))? $var['default']: null;
								foreach($var['options'] as $valf=>$val){
									echo "<option value='".$valf."' ".( $default==$valf? 'selected="selected"':null).">".$val."</option>";
								}		
								
								echo 
								"</select> ".$var['name']."".$guide."</p>
						</div>";
					break;

					// select steps
					case 'select_step':
						$line_class[]='select_step_line';
						echo 
						"<div class='".implode(' ', $line_class)."'>
							<p class='label '>
								<select class='evoPOSH_select_step' data-codevar='".$var['var']."'>";
								
								foreach($var['options'] as $f=>$val){
									echo (!empty($val))? "<option value='".$f."'>".$val."</option>":null;
								}		
								echo 
								"</select> ".__($var['name'],'eventon')."".$guide."</p>
						</div>";
					break;

					case 'open_select_steps':
						echo "<div id='".$var['id']."' class='evo_open_ss' style='display:none' data-step='".$var['id']."' >";
						$this->_in_select_step=true;	// set select step section to on
					break;

					case 'close_select_step':	echo "</div>";	$this->_in_select_step=false; break;
					
				}// end switch

				endif;

				// afterstatement
				if(!empty($var['afterstatement'])){
					echo "<div class='evo_afterst ".$var['afterstatement']."' style='display:none'>";
				}

				// closestatement
				if(!empty($var['closestatement'])){
					echo "</div>";
				}
				
				return ob_get_clean();
			}
		// content of the shortcode generator HTML
			public function get_content_(){
				global $ajde;
				
			$shortcode_guide_array = $this->get_shortcode_field_array();
			
			$__text_a = __('Select option below to customize shortcode variable values', 'eventon');

			ob_start();

			?>		
				<div id='evoPOSH_outter'>
					<h3 class='notifications '><em id='evoPOSH_back'></em><span id='evoPOSH_subtitle' data-section='' data-bf='<?php echo $__text_a;?>'><?php echo $__text_a;?></span></h3>
					<div class='evoPOSH_inner'>
						<div class='step1 steps'>
						<?php					
							foreach($shortcode_guide_array as $options){
								$__step_2 = (empty($options['variables']))? ' nostep':null;
								
								echo "<div class='evoPOSH_btn{$__step_2}' step2='".$options['id']."' code='".$options['code']."'>".$options['name']."</div>";
							}	
						?>				
						</div>
						<div class='step2 steps' >
							<?php
								foreach($shortcode_guide_array as $options){
									
									if(!empty($options['variables']) ) {
									
										echo "<div id='".$options['id']."' class='step2_in' style='display:none'>";
										
										// each shortcode option variable row
										foreach($options['variables'] as $var){

											if($var == 'event_type_3' && is_array($var) && count($var)>0){
												$options_1 = $this->evopt;

												// event type 3
												if(!empty($options_1['evcal_ett_3']) && $options_1['evcal_ett_3']=='yes' && !empty($options_1['evcal_eventt3'])){
													echo $this->shortcode_interpret($var);
												}
											}else{
												echo $this->shortcode_interpret($var);
											}
										}	
										echo "</div>";
									}
								}						
							?>					
						</div>
						<div class='clear'></div>
					</div>
					<div class='evoPOSH_footer'>
						<p id='evoPOSH_var_'></p>
						<p id='evoPOSH_code' data-defsc='add_eventon' data-curcode='add_eventon' code='add_eventon' >[add_eventon]</p>
						<span class='evoPOSH_insert' title='Click to insert shortcode'></span>
					</div>
				</div>
			
			<?php
			return ob_get_clean();
			
			}
	*/
}

$GLOBALS['evo_shortcode_box'] = new eventon_admin_shortcode_box();


=======
}

$GLOBALS['evo_shortcode_box'] = new eventon_admin_shortcode_box();
>>>>>>> AddedFlatsome Themes
?>