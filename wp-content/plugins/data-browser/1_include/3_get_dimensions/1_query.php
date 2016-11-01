<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( ! function_exists( 'ws_db_query' ) ) {
	function ws_db_query($incoming_ajax_data){
		
		
		global $ws_db_all_setting;
		if (isset($ws_db_all_setting['default_queries'])){
		$default_queries=$ws_db_all_setting['default_queries'];
		}else{
			$default_queries=array();
		}
		//var_dump($default_queries);
		
		$exclude_posts_by_statuses = $ws_db_all_setting['exclude_posts_by_statuses'];
		foreach($exclude_posts_by_statuses as $key=>$value){
			if($value == false) {
				unset($exclude_posts_by_statuses[$key]);
			}
		}
		if(empty($exclude_posts_by_statuses)){
			$exclude_posts_by_statuses['publish']='true';
		}
		$exclude_posts_by_statuses_turn_key_to_value = array();
		foreach($exclude_posts_by_statuses as $key=>$value){
			$exclude_posts_by_statuses_turn_key_to_value[]=$key;		
		}
		
		global $wpdb;
		$exclude_posts_by_statuses_turn_key_to_value_implode = implode("','", $exclude_posts_by_statuses_turn_key_to_value);
		$exclude_posts_by_statuses_turn_key_to_value_implode = "'".$exclude_posts_by_statuses_turn_key_to_value_implode."'";
		$statuses = $exclude_posts_by_statuses_turn_key_to_value_implode;
		
		//$base_query_simple="SELECT * FROM  $wpdb->posts WHERE $wpdb->posts.post_status IN (".$statuses.");";
		$base_query_string="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.post_status IN (".$statuses.") ";
			foreach($default_queries as $query){
				if($query['group'] == "basic") {
					if($query['query_type'] == "level_one"){
						// do nothing
					}elseif($query['query_type'] == "level_two"){
						// do nothing
					}elseif($query['query_type'] == "level_three"){
						if($query['value']=="EMPTY_STRING"){$query['value']=""; }
						elseif($query['value']=="ONE_SPACE_STRING"){$query['value']==" ";}
						$base_query_string = $base_query_string." AND $wpdb->posts.".$query['dimension']." = '".$query['value']."' ";
					}
				}
			}
		$base_query_simple=$base_query_string;
		$for_queries_include_ides =" AND $wpdb->posts.post_status IN (".$statuses.");";
		

		
		///////////////////////////////////////////////////////////////////////////////////////////////////
		if(empty($incoming_ajax_data)){
			
			


			//$base_query_string2="SELECT * FROM $wpdb->posts LEFT JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) LEFT JOIN $wpdb->term_taxonomy ON($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)  WHERE $wpdb->posts.post_status IN (".$statuses.") ";
			
			
			
			global $wpdb;
			$wpdb->show_errors();
			$posts = $wpdb->get_results($base_query_string);
			//
			foreach($default_queries as $query){
				if($query['group'] == "taxo") {
					$dimension_group = $query['group']; 
					$dimension_name = $query['dimension'];
					$dimension_value = $query['value'];
					if($query['query_type'] == "level_one"){
						foreach($posts as $key=>$post){
							$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
							if(empty($taxonomy_objects)){
								unset($posts[$key]);
							}
						}
					}elseif($query['query_type'] == "level_two"){
						foreach($posts as $key=>$post){
							$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
							if(array_key_exists($dimension_name,$taxonomy_objects)){
							}else{
								unset($posts[$key]);
							}
						}
					}elseif($query['query_type'] == "level_three"){
						foreach($posts as $key=>$post){
							$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
							if(array_key_exists($dimension_name,$taxonomy_objects)){	
								$terms_array = wp_get_post_terms( $post->ID, $dimension_name, array("fields" => "names") );
								if(!in_array($dimension_value, $terms_array )){
									unset($posts[$key]);
								}
							}else{
								unset($posts[$key]);
							}
						}
					}
				}
			}
			foreach($default_queries as $query){
				if($query['group'] == "field") {
					$dimension_group = $query['group']; 
					$dimension_name = $query['dimension'];
					$dimension_value = $query['value'];
					if($query['query_type'] == "level_one"){
						foreach($posts as $key=>$post){
							$custom_fields = get_post_custom($post->ID);
							if(empty($custom_fields)){
								unset($posts[$key]);
							}
						}
					}elseif($query['query_type'] == "level_two"){
						foreach($posts as $key=>$post){
							$custom_fields = get_post_custom($post->ID);
							if(array_key_exists($dimension_name,$custom_fields)){
							}else{
								unset($posts[$key]);
							}
						}
					}elseif($query['query_type'] == "level_three"){
						foreach($posts as $key=>$post){
							$custom_fields = get_post_custom($post->ID);
							if(array_key_exists($dimension_name,$custom_fields)){
								$custom_field_value_array = $custom_fields[$dimension_name]; 
								if(!in_array($dimension_value, $custom_field_value_array)){
									unset($posts[$key]);
								}
							}else{
								unset($posts[$key]);
							}
						}
					}
				}
			}
			//
			$base_post_ides =array() ;
			foreach($posts as $key=>$post){
				$base_post_ides[]=$post->ID;
			}
			
			
			$current_post_ides = $base_post_ides ;
			$navigation_path=array();	
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>array());	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='row_of_data_table_clicked'){
			//var_dump($incoming_ajax_data['dimension_value_key'] );
			$current_post_ides2=$incoming_ajax_data['all_basic_info']['current_post_ides'];
			$current_post_ides_implode = implode(",", $current_post_ides2);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$current_post_ides_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			//
			$alternative_text_for_empty_values = $ws_db_all_setting['alternative_text_for_empty_values'];
			if($incoming_ajax_data['dimension_value_key']==$alternative_text_for_empty_values){
				$incoming_ajax_data['dimension_value_key']='';
			}
			$alternative_text_for_one_space_values = $ws_db_all_setting['alternative_text_for_one_space_values'];
			if($incoming_ajax_data['dimension_value_key']==$alternative_text_for_one_space_values){
				$incoming_ajax_data['dimension_value_key']=' ';
			}
			foreach($posts as $key=>$post){
				if($incoming_ajax_data['dimension_group_key']== 'all_dimensions_static'){
					$property_name = $incoming_ajax_data['dimension_name'];
					$property_value = $incoming_ajax_data['dimension_value_key'];
					if( $property_value == $post->$property_name  ){}else{unset($posts[$key]);}
				}elseif($incoming_ajax_data['dimension_group_key']== 'all_dimensions_taxonomy'){
					$taxonomy_slug_s_post = $incoming_ajax_data['dimension_name'];
					$taxonomy_term_value_s_post = $incoming_ajax_data['dimension_value_key'];
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					if(array_key_exists($taxonomy_slug_s_post,$taxonomy_objects)){
						$terms_array = wp_get_post_terms( $post->ID, $taxonomy_slug_s_post, array("fields" => "names") );
						if(!in_array($taxonomy_term_value_s_post, $terms_array )){
							unset($posts[$key]);
						}
					}else{
						unset($posts[$key]);
					}
				}elseif($incoming_ajax_data['dimension_group_key']== 'all_dimensions_custom_field'){
					$custom_field_key_s_post = $incoming_ajax_data['dimension_name'];
					$custom_field_value_s_post = $incoming_ajax_data['dimension_value_key'];
					$custom_fields = get_post_custom($post->ID);
					if(array_key_exists($custom_field_key_s_post,$custom_fields)){
						$custom_field_value_array = $custom_fields[$custom_field_key_s_post]; 
						if(!in_array($custom_field_value_s_post, $custom_field_value_array))
						{
							unset($posts[$key]);
						}
					}else{
						unset($posts[$key]);
					}
				}
			}
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$alternative_text_for_empty_values = $ws_db_all_setting['alternative_text_for_empty_values'];
			$alternative_text_for_one_space_values = $ws_db_all_setting['alternative_text_for_one_space_values'];
				if($incoming_ajax_data['dimension_value_key']==$alternative_text_for_empty_values){
					$incoming_ajax_data['dimension_value_key']='';
				}
				if($incoming_ajax_data['dimension_value_key']==$alternative_text_for_one_space_values){
					$incoming_ajax_data['dimension_value_key']=' ';
				}
			$selected_parametr_now=array('dimension_group_key'=>$incoming_ajax_data['dimension_group_key'],'dimension_name'=>$incoming_ajax_data['dimension_name'],'dimension_value_key'=>$incoming_ajax_data['dimension_value_key'],'this_step_post_ides'=>$current_post_ides);	
			if (isset($incoming_ajax_data['all_basic_info']['navigation_path'])){
				$navigation_path = 	$incoming_ajax_data['all_basic_info']['navigation_path'];
				$navigation_path[]= $selected_parametr_now;	
			}else{
				$navigation_path=array($selected_parametr_now);	
			}
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='th_row_of_data_table_clicked'){
			$current_post_ides2=$incoming_ajax_data['all_basic_info']['current_post_ides'];
			$current_post_ides_implode = implode(",", $current_post_ides2);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$current_post_ides_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			foreach($posts as $key=>$post){
				$dimension_group_key = $incoming_ajax_data['dimension_group_key']; 
				$dimension_name = $incoming_ajax_data['dimension_name'];
				if($dimension_group_key=='all_dimensions_static'){
					if(isset($post->$dimension_name)){
						$this_dimension_value = $post->$dimension_name;
						//if( $this_dimension_value == '' or $this_dimension_value == ' '  ){unset($posts[$key]);}
					}else{
						unset($posts[$key]);	
					}
				}elseif($dimension_group_key=='all_dimensions_taxonomy'){
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					if(array_key_exists($dimension_name,$taxonomy_objects)){
					}else{
						unset($posts[$key]);
					}
				}elseif($dimension_group_key=='all_dimensions_custom_field'){
					$custom_fields = get_post_custom($post->ID);
					if(array_key_exists($dimension_name,$custom_fields)){
					}else{
						unset($posts[$key]);
					}
				}
				
			}
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$selected_parametr_now=array('dimension_group_key'=>$incoming_ajax_data['dimension_group_key'],'dimension_name'=>$incoming_ajax_data['dimension_name'],'this_step_post_ides'=>$current_post_ides);	
			if (isset($incoming_ajax_data['all_basic_info']['navigation_path'])){
				$navigation_path = 	$incoming_ajax_data['all_basic_info']['navigation_path'];
				$navigation_path[]= $selected_parametr_now;	
			}else{
				$navigation_path=array($selected_parametr_now);	
			}
			
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='dimension_type_element_of_data_clicked'){
			$current_post_ides=$incoming_ajax_data['all_basic_info']['current_post_ides'];
			$current_post_ides_implode = implode(",", $current_post_ides);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$current_post_ides_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			foreach($posts as $key=>$post){
				$dimension_group_key = $incoming_ajax_data['dimension_group_key']; 
				//$dimension_name = $selected_step_of_navigation_path['dimension_name'];				
				if($dimension_group_key=='all_dimensions_static'){
				}elseif($dimension_group_key=='all_dimensions_taxonomy'){
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					if(empty($taxonomy_objects)){
						unset($posts[$key]);
					}
				}elseif($dimension_group_key=='all_dimensions_custom_field'){
					$custom_fields = get_post_custom($post->ID);
					if(empty($custom_fields)){
						unset($posts[$key]);
					}
					
				}
				
			}
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$selected_parametr_now=array('dimension_group_key'=>$incoming_ajax_data['dimension_group_key'],'this_step_post_ides'=>$current_post_ides);	
			if (isset($incoming_ajax_data['all_basic_info']['navigation_path'])){
				$navigation_path = 	$incoming_ajax_data['all_basic_info']['navigation_path'];
				$navigation_path[]= $selected_parametr_now;	
			}else{
				$navigation_path=array($selected_parametr_now);	
			}
			
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='reset_element_of_path_clicked'){
			$base_post_ides_form_query=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$base_post_ides_form_query_implode = implode(",", $base_post_ides_form_query);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$base_post_ides_form_query_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$all_basic_from_ajax=$incoming_ajax_data['all_basic_info'];	
			$selected_parametr_now=array();	
			$navigation_path=array($selected_parametr_now);	
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
			
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='dimension_type_element_of_path_clicked'){
			$base_post_ides_form_query=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$base_post_ides_form_query_implode = implode(",", $base_post_ides_form_query);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$base_post_ides_form_query_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			foreach($posts as $key=>$post){
				$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
				$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
				$selected_step_of_navigation_path=$navigation_path_from_ajax[$index_of_selected_step_of_path];
				//
				$dimension_group_key = $selected_step_of_navigation_path['dimension_group_key'];
				//$dimension_name = $selected_step_of_navigation_path['dimension_name'];				
				if($dimension_group_key=='all_dimensions_static'){
				}elseif($dimension_group_key=='all_dimensions_taxonomy'){
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					if(empty($taxonomy_objects)){
						unset($posts[$key]);
					}
				}elseif($dimension_group_key=='all_dimensions_custom_field'){
					$custom_fields = get_post_custom($post->ID);
					if(empty($custom_fields)){
						unset($posts[$key]);
					}
					
				}
				
			}
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
			$selected_step_of_navigation_path=$navigation_path_from_ajax[$index_of_selected_step_of_path];
			unset($selected_step_of_navigation_path['dimension_value_key']);
			unset($selected_step_of_navigation_path['dimension_name']);
			$selected_step_of_navigation_path['this_step_post_ides']=$current_post_ides;
			//var_dump($selected_step_of_navigation_path);
			$base_post_ides = $incoming_ajax_data['all_basic_info']['base_post_ides'];
			$navigation_path=array($selected_step_of_navigation_path);	
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
			
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='dimension_element_of_path_clicked'){
			$base_post_ides_form_query=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$base_post_ides_form_query_implode = implode(",", $base_post_ides_form_query);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$base_post_ides_form_query_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			foreach($posts as $key=>$post){
				$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
				$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
				$selected_step_of_navigation_path=$navigation_path_from_ajax[$index_of_selected_step_of_path];
				//
				$dimension_group_key = $selected_step_of_navigation_path['dimension_group_key']; 
				$dimension_name = $selected_step_of_navigation_path['dimension_name'];
				if($dimension_group_key=='all_dimensions_static'){
					if(isset($post->$dimension_name)){
						$this_dimension_value = $post->$dimension_name;
						//if( $this_dimension_value == '' or $this_dimension_value == ' '  ){unset($posts[$key]);}
					}else{
						unset($posts[$key]);		
					}
				}elseif($dimension_group_key=='all_dimensions_taxonomy'){
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					if(array_key_exists($dimension_name,$taxonomy_objects)){
					}else{
						unset($posts[$key]);
					}
				}elseif($dimension_group_key=='all_dimensions_custom_field'){
					$custom_fields = get_post_custom($post->ID);
					if(array_key_exists($dimension_name,$custom_fields)){
					}else{
						unset($posts[$key]);
					}
				}
				
			}
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
			$selected_step_of_navigation_path=$navigation_path_from_ajax[$index_of_selected_step_of_path];
			unset($selected_step_of_navigation_path['dimension_value_key']);
			$selected_step_of_navigation_path['this_step_post_ides']=$current_post_ides;
			//var_dump($selected_step_of_navigation_path);
			$base_post_ides = $incoming_ajax_data['all_basic_info']['base_post_ides'];
			$navigation_path=array($selected_step_of_navigation_path);	
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='value_element_of_path_clicked'){
			$base_post_ides_form_query=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$base_post_ides_form_query_implode = implode(",", $base_post_ides_form_query);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$base_post_ides_form_query_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			foreach($posts as $key=>$post){
				$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
				$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
				$selected_step_of_navigation_path=$navigation_path_from_ajax[$index_of_selected_step_of_path];
				//
				$dimension_group_key = $selected_step_of_navigation_path['dimension_group_key']; 
				$dimension_name = $selected_step_of_navigation_path['dimension_name'];
				$dimension_value_key = $selected_step_of_navigation_path['dimension_value_key'];
				if($dimension_group_key=='all_dimensions_static'){
					if( $dimension_value_key == $post->$dimension_name  ){}else{unset($posts[$key]);}
				}elseif($dimension_group_key=='all_dimensions_taxonomy'){
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					
					if(array_key_exists($dimension_name,$taxonomy_objects)){	
						$terms_array = wp_get_post_terms( $post->ID, $dimension_name, array("fields" => "names") );
						if(!in_array($dimension_value_key, $terms_array )){
							unset($posts[$key]);
						}
					}else{
						unset($posts[$key]);
					}
				}elseif($dimension_group_key=='all_dimensions_custom_field'){
					$custom_fields = get_post_custom($post->ID);
					if(array_key_exists($dimension_name,$custom_fields)){
						$custom_field_value_array = $custom_fields[$dimension_name]; 
						if(!in_array($dimension_value_key, $custom_field_value_array)){
							unset($posts[$key]);
						}
					}else{
						unset($posts[$key]);
					}
				}
				
			}
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
			$selected_step_of_navigation_path=$navigation_path_from_ajax[$index_of_selected_step_of_path];
			$selected_step_of_navigation_path['this_step_post_ides']=$current_post_ides;
			$base_post_ides = $incoming_ajax_data['all_basic_info']['base_post_ides'];
			$navigation_path=array($selected_step_of_navigation_path);	
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
			///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='number_element_of_path_clicked'){
			$all_basic_from_ajax=$incoming_ajax_data['all_basic_info'];
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_path=$incoming_ajax_data['index_of_path'];	
			$Intended_step_of_the_navigation_path = $incoming_ajax_data['all_basic_info']['navigation_path'][$index_of_path];
			$this_step_post_ides=$Intended_step_of_the_navigation_path['this_step_post_ides'];
			$current_post_ides2= $this_step_post_ides;
			$current_post_ides_implode = implode(",", $current_post_ides2);
			global $wpdb;
			$wpdb->show_errors();
			$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$current_post_ides_implode.") ".$for_queries_include_ides;
			$posts = $wpdb->get_results($base_query);
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_path=$incoming_ajax_data['index_of_path'];	
			$index_of_path ++;
			$pos = array_search($index_of_path, array_keys($navigation_path_from_ajax));
			if($pos){//if not false - that mean the intended index founded
				$navigation_path_removed_unwanted_step= array_slice($navigation_path_from_ajax,0,$pos,true);
			}else{
				$navigation_path_removed_unwanted_step=$navigation_path_from_ajax;
			}
			$base_post_ides = $incoming_ajax_data['all_basic_info']['base_post_ides'];
			$navigation_path=$navigation_path_removed_unwanted_step;	
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='dimension_sign_of_path_clicked'){
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];
			global $wpdb;
			$wpdb->show_errors();
			if($index_of_selected_step_of_path==0){
				$base_query=$base_query_simple;
				$query_type_tt="base_query_simple";
				
			}else{
				$previous_index_before_delete_step=	$index_of_selected_step_of_path-1;
				if(array_key_exists($previous_index_before_delete_step,$navigation_path_from_ajax) and !empty($navigation_path_from_ajax[$previous_index_before_delete_step])){				
					$previous_step_before_delete_step=$navigation_path_from_ajax[$previous_index_before_delete_step];
					$current_post_ides_before_delete_step = $previous_step_before_delete_step['this_step_post_ides'];
					$ready_array_for_sql = implode(",", $current_post_ides_before_delete_step);
					$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$ready_array_for_sql.") ".$for_queries_include_ides;
					$query_type_tt="for_queries_include_ides";
				}else{
					$base_query=$base_query_simple;
					$query_type_tt="base_query_simple";
				}
				
				
			}
			$posts = $wpdb->get_results($base_query);
			
			//
			//default_queries only used for $base_query_simple;
			if($query_type_tt=="base_query_simple"){
				foreach($default_queries as $query){
					if($query['group'] == "taxo") {
						$dimension_group = $query['group']; 
						$dimension_name = $query['dimension'];
						$dimension_value = $query['value'];
						if($query['query_type'] == "level_one"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(empty($taxonomy_objects)){
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_two"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(array_key_exists($dimension_name,$taxonomy_objects)){
								}else{
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_three"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(array_key_exists($dimension_name,$taxonomy_objects)){	
									$terms_array = wp_get_post_terms( $post->ID, $dimension_name, array("fields" => "names") );
									if(!in_array($dimension_value, $terms_array )){
										unset($posts[$key]);
									}
								}else{
									unset($posts[$key]);
								}
							}
						}
					}
				}
				foreach($default_queries as $query){
					if($query['group'] == "field") {
						$dimension_group = $query['group']; 
						$dimension_name = $query['dimension'];
						$dimension_value = $query['value'];
						if($query['query_type'] == "level_one"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(empty($custom_fields)){
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_two"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(array_key_exists($dimension_name,$custom_fields)){
								}else{
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_three"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(array_key_exists($dimension_name,$custom_fields)){
									$custom_field_value_array = $custom_fields[$dimension_name]; 
									if(!in_array($dimension_value, $custom_field_value_array)){
										unset($posts[$key]);
									}
								}else{
									unset($posts[$key]);
								}
							}
						}
					}
				}
			}
			//
			//
			
			foreach($posts as $key=>$post){
				$selected_step_of_navigation_path = $incoming_ajax_data['all_basic_info']['navigation_path'][$index_of_selected_step_of_path];
				$dimension_group_key = $selected_step_of_navigation_path['dimension_group_key']; 
				$dimension_name = $selected_step_of_navigation_path['dimension_name'];
				//	
				if($dimension_group_key=='all_dimensions_static'){
					if(isset($post->$dimension_name)){
						$this_dimension_value = $post->$dimension_name;
						//if( $this_dimension_value == '' or $this_dimension_value == ' '  ){unset($posts[$key]);}
					}else{
						unset($posts[$key]);		
					}
				}elseif($dimension_group_key=='all_dimensions_taxonomy'){
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					if(array_key_exists($dimension_name,$taxonomy_objects)){
					}else{
						unset($posts[$key]);
					}
				}elseif($dimension_group_key=='all_dimensions_custom_field'){
					$custom_fields = get_post_custom($post->ID);
					if(array_key_exists($dimension_name,$custom_fields)){
					}else{
						unset($posts[$key]);
					}
				}
			}
			global $base_post_ides ;
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			global $current_post_ides ;
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
			$next_step_of_selected_step_of_path=$index_of_selected_step_of_path +1;
			$pos = array_search($next_step_of_selected_step_of_path, array_keys($navigation_path_from_ajax));
			if($pos){//if not false - that mean the intended index founded
				$navigation_path_removed_unwanted_step= array_slice($navigation_path_from_ajax,0,$pos,true);
			}else{
				$navigation_path_removed_unwanted_step=$navigation_path_from_ajax;
			}
			$navigation_path_removed_unwanted_step[$index_of_selected_step_of_path]['this_step_post_ides'] = $current_post_ides;
			unset($navigation_path_removed_unwanted_step[$index_of_selected_step_of_path]['dimension_value_key']);// unset dimension_value_key of selected step
			$base_post_ides = $incoming_ajax_data['all_basic_info']['base_post_ides'];
			$navigation_path=$navigation_path_removed_unwanted_step;
			$navigation_path = array_filter($navigation_path);//remove empty steps		
			$navigation_path = array_values($navigation_path);//reindex
			//
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='dimension_group_sign_of_path_clicked'){
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];
			global $wpdb;
			$wpdb->show_errors();
			if($index_of_selected_step_of_path==0){
				$base_query=$base_query_simple;
				$query_type_tt="base_query_simple";
				
			}else{
				$previous_index_before_delete_step=	$index_of_selected_step_of_path-1;
				if(array_key_exists($previous_index_before_delete_step,$navigation_path_from_ajax) and !empty($navigation_path_from_ajax[$previous_index_before_delete_step])){				
					$previous_step_before_delete_step=$navigation_path_from_ajax[$previous_index_before_delete_step];
					$current_post_ides_before_delete_step = $previous_step_before_delete_step['this_step_post_ides'];
					$ready_array_for_sql = implode(",", $current_post_ides_before_delete_step);
					$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$ready_array_for_sql.") ".$for_queries_include_ides;
					$query_type_tt="for_queries_include_ides";
				}else{
					$base_query=$base_query_simple;
					$query_type_tt="base_query_simple";
				}
				
				
			}
			$posts = $wpdb->get_results($base_query);
			
			//
			//default_queries only used for $base_query_simple;
			if($query_type_tt=="base_query_simple"){
				foreach($default_queries as $query){
					if($query['group'] == "taxo") {
						$dimension_group = $query['group']; 
						$dimension_name = $query['dimension'];
						$dimension_value = $query['value'];
						if($query['query_type'] == "level_one"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(empty($taxonomy_objects)){
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_two"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(array_key_exists($dimension_name,$taxonomy_objects)){
								}else{
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_three"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(array_key_exists($dimension_name,$taxonomy_objects)){	
									$terms_array = wp_get_post_terms( $post->ID, $dimension_name, array("fields" => "names") );
									if(!in_array($dimension_value, $terms_array )){
										unset($posts[$key]);
									}
								}else{
									unset($posts[$key]);
								}
							}
						}
					}
				}
				foreach($default_queries as $query){
					if($query['group'] == "field") {
						$dimension_group = $query['group']; 
						$dimension_name = $query['dimension'];
						$dimension_value = $query['value'];
						if($query['query_type'] == "level_one"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(empty($custom_fields)){
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_two"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(array_key_exists($dimension_name,$custom_fields)){
								}else{
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_three"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(array_key_exists($dimension_name,$custom_fields)){
									$custom_field_value_array = $custom_fields[$dimension_name]; 
									if(!in_array($dimension_value, $custom_field_value_array)){
										unset($posts[$key]);
									}
								}else{
									unset($posts[$key]);
								}
							}
						}
					}
				}
			}
			//
			//
			
			foreach($posts as $key=>$post){
				$selected_step_of_navigation_path = $incoming_ajax_data['all_basic_info']['navigation_path'][$index_of_selected_step_of_path];
				$dimension_group_key = $selected_step_of_navigation_path['dimension_group_key']; 				
				if($dimension_group_key=='all_dimensions_static'){
				}elseif($dimension_group_key=='all_dimensions_taxonomy'){
					$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
					if(empty($taxonomy_objects)){
						unset($posts[$key]);
					}
				}elseif($dimension_group_key=='all_dimensions_custom_field'){
					$custom_fields = get_post_custom($post->ID);
					if(empty($custom_fields)){
						unset($posts[$key]);
						//var_dump($custom_fields );
					}
					
				}
			}
			global $base_post_ides ;
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			global $current_post_ides ;
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
			$next_step_of_selected_step_of_path=$index_of_selected_step_of_path +1;
			$pos = array_search($next_step_of_selected_step_of_path, array_keys($navigation_path_from_ajax));
			if($pos){//if not false - that mean the intended index founded
				$navigation_path_removed_unwanted_step= array_slice($navigation_path_from_ajax,0,$pos,true);
			}else{
				$navigation_path_removed_unwanted_step=$navigation_path_from_ajax;
			}
			$navigation_path_removed_unwanted_step[$index_of_selected_step_of_path]['this_step_post_ides'] = $current_post_ides;
			unset($navigation_path_removed_unwanted_step[$index_of_selected_step_of_path]['dimension_value_key']);// unset dimension_value_key of selected step
			unset($navigation_path_removed_unwanted_step[$index_of_selected_step_of_path]['dimension_name']);// unset dimension_name of selected step
			$base_post_ides = $incoming_ajax_data['all_basic_info']['base_post_ides'];
			$navigation_path=$navigation_path_removed_unwanted_step;
			$navigation_path = array_filter($navigation_path);//remove empty steps		
			$navigation_path = array_values($navigation_path);//reindex
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		///////////////////////////////////////////////////////////////////////////////////////////////////	
		}elseif(isset($incoming_ajax_data['type_of_ajax_request']) and $incoming_ajax_data['type_of_ajax_request']=='delete_element_of_path_clicked'){
			$navigation_path_from_ajax=$incoming_ajax_data['all_basic_info']['navigation_path'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];
			global $wpdb;
			$wpdb->show_errors();
			if($index_of_selected_step_of_path==0){
				$base_query=$base_query_simple;
				$query_type_tt="base_query_simple";
				
			}else{
				$previous_index_before_delete_step=	$index_of_selected_step_of_path-1;
				if(array_key_exists($previous_index_before_delete_step,$navigation_path_from_ajax) and !empty($navigation_path_from_ajax[$previous_index_before_delete_step])){				
					$previous_step_before_delete_step=$navigation_path_from_ajax[$previous_index_before_delete_step];
					$current_post_ides_before_delete_step = $previous_step_before_delete_step['this_step_post_ides'];
					$ready_array_for_sql = implode(",", $current_post_ides_before_delete_step);
					$base_query="SELECT * FROM $wpdb->posts WHERE $wpdb->posts.ID IN (".$ready_array_for_sql.") ".$for_queries_include_ides;
					$query_type_tt="for_queries_include_ides";
				}else{
					$base_query=$base_query_simple;
					$query_type_tt="base_query_simple";
				}
				
				
			}
			
			$posts = $wpdb->get_results($base_query);
			
			//
			//default_queries only used for $base_query_simple;
			if($query_type_tt=="base_query_simple"){
				foreach($default_queries as $query){
					if($query['group'] == "taxo") {
						$dimension_group = $query['group']; 
						$dimension_name = $query['dimension'];
						$dimension_value = $query['value'];
						if($query['query_type'] == "level_one"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(empty($taxonomy_objects)){
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_two"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(array_key_exists($dimension_name,$taxonomy_objects)){
								}else{
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_three"){
							foreach($posts as $key=>$post){
								$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
								if(array_key_exists($dimension_name,$taxonomy_objects)){	
									$terms_array = wp_get_post_terms( $post->ID, $dimension_name, array("fields" => "names") );
									if(!in_array($dimension_value, $terms_array )){
										unset($posts[$key]);
									}
								}else{
									unset($posts[$key]);
								}
							}
						}
					}
				}
				foreach($default_queries as $query){
					if($query['group'] == "field") {
						$dimension_group = $query['group']; 
						$dimension_name = $query['dimension'];
						$dimension_value = $query['value'];
						if($query['query_type'] == "level_one"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(empty($custom_fields)){
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_two"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(array_key_exists($dimension_name,$custom_fields)){
								}else{
									unset($posts[$key]);
								}
							}
						}elseif($query['query_type'] == "level_three"){
							foreach($posts as $key=>$post){
								$custom_fields = get_post_custom($post->ID);
								if(array_key_exists($dimension_name,$custom_fields)){
									$custom_field_value_array = $custom_fields[$dimension_name]; 
									if(!in_array($dimension_value, $custom_field_value_array)){
										unset($posts[$key]);
									}
								}else{
									unset($posts[$key]);
								}
							}
						}
					}
				}
			}
			//
			//
			foreach($posts as $key=>$post){
				$next_index_after_delete_step=	$index_of_selected_step_of_path+1;
				if(array_key_exists($next_index_after_delete_step,$navigation_path_from_ajax)){
					//run filter on each item of remained item and update its current ides
					foreach($navigation_path_from_ajax as $current_step_key=>$step_array ){
						if($current_step_key > $index_of_selected_step_of_path){//if this step is after deleted step
							// detect the type of filter ( dimension only ) and ( dimension + value)
							if(array_key_exists('dimension_value_key',$step_array)){// is ( dimension + value )
								$dimension_group_key=$step_array['dimension_group_key'];
								$dimension_name=$step_array['dimension_name'];
								$dimension_value_key=$step_array['dimension_value_key'];
								if($dimension_group_key=='all_dimensions_static'){
									if( $dimension_value_key == $post->$dimension_name  ){}else{unset($posts[$key]);}
								}elseif($dimension_group_key=='all_dimensions_taxonomy'){
									$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
									if(array_key_exists($dimension_name,$taxonomy_objects)){	
										$terms_array = wp_get_post_terms( $post->ID, $dimension_name, array("fields" => "names") );
										if(!in_array($dimension_value_key, $terms_array )){
											unset($posts[$key]);
										}
									}else{
										unset($posts[$key]);
									}
								}elseif($dimension_group_key=='all_dimensions_custom_field'){
									$custom_fields = get_post_custom($post->ID);
									if(array_key_exists($dimension_name,$custom_fields)){
										$custom_field_value_array = $custom_fields[$dimension_name]; 
										if(!in_array($dimension_value_key, $custom_field_value_array)){
											unset($posts[$key]);
										}
									}else{
										unset($posts[$key]);
									}
								}
								//extract current ides after this filter and assain ides to $current_post_ides element of this step
								$current_step_post_ides=array();
								foreach($posts as $key=>$post){
									$current_step_post_ides[]=$post->ID;
								}
								$navigation_path_from_ajax[$current_step_key]['this_step_post_ides'] = $current_step_post_ides;	
							}elseif(array_key_exists('dimension_name',$step_array)){// is ( dimension only )
								$dimension_group_key=$step_array['dimension_group_key'];
								$dimension_name=$step_array['dimension_name'];
								if($dimension_group_key=='all_dimensions_static'){
									if(isset($post->$dimension_name)){
										$this_dimension_value = $post->$dimension_name;
										//if( $this_dimension_value == '' or $this_dimension_value == ' '  ){unset($posts[$key]);}
									}else{
										unset($posts[$key]);		
									}
								}elseif($dimension_group_key=='all_dimensions_taxonomy'){
									$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
									if(array_key_exists($dimension_name,$taxonomy_objects)){
									}else{
										unset($posts[$key]);
									}
								}elseif($dimension_group_key=='all_dimensions_custom_field'){
									$custom_fields = get_post_custom($post->ID);
									if(array_key_exists($dimension_name,$custom_fields)){
									}else{
										unset($posts[$key]);
									}
								}
								//extract current ides after this filter and assain ides to $current_post_ides element of this step
								$current_step_post_ides=array();
								foreach($posts as $key=>$post){
									$current_step_post_ides[]=$post->ID;
								}
								$navigation_path_from_ajax[$current_step_key]['this_step_post_ides'] = $current_step_post_ides;	
		
							}elseif(array_key_exists('dimension_group_key',$step_array)){//only dimension_group_key is in this path
								$dimension_group_key=$step_array['dimension_group_key'];
								if($dimension_group_key=='all_dimensions_static'){
								}elseif($dimension_group_key=='all_dimensions_taxonomy'){
									$taxonomy_objects = get_object_taxonomies( $post, 'objects' );
									if(empty($taxonomy_objects)){
										unset($posts[$key]);
									}
								}elseif($dimension_group_key=='all_dimensions_custom_field'){
									$custom_fields = get_post_custom($post->ID);
									if(empty($custom_fields)){
										unset($posts[$key]);
									}
									
								}
								//extract current ides after this filter and assain ides to $current_post_ides element of this step
								$current_step_post_ides=array();
								foreach($posts as $key=>$post){
									$current_step_post_ides[]=$post->ID;
								}
								$navigation_path_from_ajax[$current_step_key]['this_step_post_ides'] = $current_step_post_ides;
							}
						}	
					}
				}else{
					// do not run any filter
				}						
			}
			$navigation_path_global = $navigation_path_from_ajax;
			$base_post_ides=$incoming_ajax_data['all_basic_info']['base_post_ides'];
			$current_post_ides=array();
			foreach($posts as $key=>$post){
				$current_post_ides[]=$post->ID;
			}
			$all_basic_from_ajax=$incoming_ajax_data['all_basic_info'];
			$index_of_selected_step_of_path=$incoming_ajax_data['index_of_selected_step_of_path'];	
			unset($navigation_path_global[$index_of_selected_step_of_path]);
			$navigation_path_diminished = array_values($navigation_path_global);//reindex
			$base_post_ides = $incoming_ajax_data['all_basic_info']['base_post_ides'];
			$navigation_path=$navigation_path_diminished;	
			$all_basic_info=array('base_post_ides'=>$base_post_ides,'current_post_ides'=>$current_post_ides,'navigation_path'=>$navigation_path);	
			$data =array('all_basic_info'=>$all_basic_info,'navigation_path'=>$navigation_path,'posts'=>$posts);
			return $data;
		}
	}
}
?>