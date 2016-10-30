<?php
/* handle field output */
function pms_pb_subscription_plans_handler( $output, $form_location, $field, $user_id, $field_check_errors, $request_data ) {

    if ( $field['field'] == 'Subscription Plans' ){

        $output = '';

        // Display fields on register forms
        if( $form_location == 'register' ) {


            /*
             * E-mail Confirmation compatibility issues
             * We remove all filters that add data to
             *
             */
            $wppb_general_settings  = get_option( 'wppb_general_settings' );
            $has_email_confirmation = ( !empty( $wppb_general_settings['emailConfirmation'] ) && $wppb_general_settings['emailConfirmation'] == 'yes' ? true : false );

            if( $has_email_confirmation ) {

                remove_filter( 'pms_output_subscription_plans', 'pms_output_subscription_plans_payment_gateways', 10 );
                remove_filter( 'pms_output_subscription_plans', 'pms_dc_output_discount_box', 25 );
                remove_filter( 'pms_output_subscription_plans', 'pms_renewal_option_field', 20 );

            }


            $selected_subscription_plan = ( isset( $field['subscription-plan-selected'] ) && !empty( $field['subscription-plan-selected'] ) ? $field['subscription-plan-selected'] : -1 );

            // Field title
            if( !empty( $field['field-title'] ) )
                $output .= '<h4>' . $field['field-title'] . '</h4>';

            // Field descriptions
            if( !empty( $field['description'] ) )
                $output .= '<span class="description">' . $field['description'] . '</span>';

            // Subscription plans
            if( !empty( $field['subscription-plans'] ) ) {

                $subscription_plans = explode( ', ', $field['subscription-plans'] );
                $output .= pms_output_subscription_plans( $subscription_plans, array(), false, $selected_subscription_plan );

            // If no subscription plans where selected display all subscription plans
            } else {
                $output .= pms_output_subscription_plans( array(), array(), false, $selected_subscription_plan );
            }

            // Add a simple message to let users know that they will be able to complete the payment
            // after they confirm the e-mail address
            if( $has_email_confirmation )
                $output .= apply_filters( 'pms_pb_subscription_plans_field_payment_attention_message', '<p class="pms-email-confirmation-payment-message wppb-success">You will be able to complete the payment after you have confirmed your e-mail address.</p>' );

        }

        // Display field on edit profile form
        if( $form_location == 'edit_profile' ) {

            $member = pms_get_member( $user_id );

            // Display any success message that exists
            if( pms_success()->get_message( 'subscription_plans' ) ) {

                pms_display_success_messages(pms_success()->get_messages('subscription_plans'));

            }

            if( $member->is_member() ) {

                $member_subscriptions = array();
                foreach( $member->subscriptions as $member_subscription )
                    $member_subscriptions[] = $member_subscription['subscription_plan_id'];

                $output .= pms_output_subscription_plans( $member_subscriptions, array(), $member );
            }

        }

        return apply_filters( 'wppb_'.$form_location.'_subscription_plans_field', $output, $form_location, $field, $user_id, $field_check_errors, $request_data );

    }
}
add_filter( 'wppb_output_form_field_subscription-plans', 'pms_pb_subscription_plans_handler', 10, 6 );
add_filter( 'wppb_admin_output_form_field_subscription-plans', 'pms_pb_subscription_plans_handler', 10, 6 );


/*
 * Function that handles the field validation for this field
 *
 */
function pms_pb_check_subscription_plans_value( $message, $field, $request_data, $form_location ) {

    if( $form_location != 'register' )
        return $message;

    $validate = PMS_Form_Handler::validate_subscription_plans( $request_data );

    if( $validate == false ) {
        $code = pms_errors()->get_error_code();
        $message = pms_errors()->get_error_message($code);
    }
    return $message;
}
add_filter( 'wppb_check_form_field_subscription-plans', 'pms_pb_check_subscription_plans_value', 10, 4 );


/*
 * Function that handles the field save for this field
 *
 */
function pms_pb_save_subscription_plans_value( $field, $user_id, $request_data, $form_location ){

    // Exit if this field is not the subscription plans one
    if( $field['field'] != 'Subscription Plans' )
        return;

    if( $form_location != 'register' )
        return;

    // Prepare user data
    $user_data = PMS_Form_Handler::get_request_member_data( $user_id );

    // Add subscriptions to the user
    $registered = PMS_Form_Handler::register_member_data( $user_data );

    if( $registered )
        PMS_Form_Handler::register_payment( $user_data );

}
add_action( 'wppb_save_form_field', 'pms_pb_save_subscription_plans_value', 10, 4 );
add_action( 'wppb_backend_save_form_field', 'pms_pb_save_subscription_plans_value', 10, 4 );