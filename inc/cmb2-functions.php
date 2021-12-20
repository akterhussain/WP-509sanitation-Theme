<?php



 /**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}



function cleaning_cmb2(){


	$prefix = '_promotions_';
	 $promotions = new_cmb2_box( array(
        'id'            => 'promotion_metabox',
        'title'         => __( 'Promotion Metabox', 'cleaning' ),
        'object_types'  => array( 'promotion', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, 
    ) );
	$promotions->add_field( array(
	        'name'       => __( 'Promotion Icon', 'cleaning' ),
	        'desc'       => __( 'Write your font-awesome-icon', 'cleaning' ),
	        'id'         => $prefix . 'promotion_icon',
	        'type'       => 'text',
	        'show_on_cb' => 'cmb2_hide_if_no_cats', 
	    ) );
	$promotions->add_field( array(
	        'name'       => __( 'Promotion text', 'cleaning' ),
	        'desc'       => __( 'Write your time addres\'s & phone', 'cleaning' ),
	        'id'         => $prefix . 'promotion_time',
	        'type'       => 'text',
	        'show_on_cb' => 'cmb2_hide_if_no_cats', 
	    ) );


	$counter = new_cmb2_box( array(
        'id'            => 'counter_metabox',
        'title'         => __( 'Counter Metabox', 'cleaning' ),
        'object_types'  => array( 'counter', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, 
    ) );
	$counter->add_field( array(
	        'name'       => __( 'Counter Icon', 'cleaning' ),
	        'desc'       => __( 'Write your counter font-awesome-icon', 'cleaning' ),
	        'id'         => $prefix . 'counter_icons',
	        'type'       => 'text',
	        'show_on_cb' => 'cmb2_hide_if_no_cats', 
	    ) );


	$banner = new_cmb2_box( array(
        'id'            => 'slider_metabox',
        'title'         => __( 'Slider Metabox', 'cleaning' ),
        'object_types'  => array( 'banner', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, 
    ) );
	$banner->add_field( array(
	        'name'       => __( 'Slider link', 'cleaning' ),
	        'desc'       => __( 'Write your slider link', 'cleaning' ),
	        'id'         => $prefix . 'slider_link',
	        'type'       => 'text',
	        'show_on_cb' => 'cmb2_hide_if_no_cats', 
	    ) );
	$banner->add_field( array(
	        'name'       => __( 'Slider Text', 'cleaning' ),
	        'desc'       => __( 'Write your slider Text', 'cleaning' ),
	        'id'         => $prefix . 'slider_text',
	        'type'       => 'text',
	        'show_on_cb' => 'cmb2_hide_if_no_cats', 
	    ) );

}
add_action('cmb2_admin_init','cleaning_cmb2');




