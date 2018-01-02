<?php
/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}

add_action('cmb2_admin_init','cmb2_office_master');
function cmb2_office_master(){

	$prefix = '_office_master_';

//slider part
    $slider_item = new_cmb2_box( array(
        'id'            => 'slider_metabox',
        'title'         => __( 'Slider Metabox', 'office_master' ),
        'object_types'  => array( 'slider', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $slider_item->add_field( array(
        'name'       => __( 'Slider Caption', 'cmb2' ),
        'desc'       => __( 'Add New slider Caption', 'office_master' ),
        'id'         => $prefix . 'slider_caption',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );

// service part
    $service_item = new_cmb2_box( array(
        'id'            => 'service_metabox',
        'title'         => __( 'Service Metabox', 'office_master' ),
        'object_types'  => array( 'service', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $service_item->add_field( array(
        'name'       => __( 'Service Icon', 'cmb2' ),
        'desc'       => __( 'Add New Service Icon', 'office_master' ),
        'id'         => $prefix . 'service_icon',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );
    // Regular text field
    $service_item->add_field( array(
        'name'       => __( 'Service Description', 'cmb2' ),
        'desc'       => __( 'Add New Service Description', 'office_master' ),
        'id'         => $prefix . 'service_description',
        'type'       => 'textarea',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );
    // Regular text field
    $service_item->add_field( array(
        'name'       => __( 'Service Animation', 'cmb2' ),
        'desc'       => __( 'Add New Service Animation', 'office_master' ),
        'id'         => $prefix . 'service_animation',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );
    // Regular text field
    $service_item->add_field( array(
        'name'       => __( 'Service Link', 'cmb2' ),
        'desc'       => __( 'Add New Service Link', 'office_master' ),
        'id'         => $prefix . 'service_link',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );


// service part
    $team_item = new_cmb2_box( array(
        'id'            => 'team_metabox',
        'title'         => __( 'Team Metabox', 'office_master' ),
        'object_types'  => array( 'team', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $team_item->add_field( array(
        'name'       => __( 'Team Member Designation', 'cmb2' ),
        'desc'       => __( 'Add New Team Member Designation', 'office_master' ),
        'id'         => $prefix . 'team_member_designation',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) ); 
    // Regular text field
    $team_item->add_field( array(
        'name'       => __( 'Block Quote Color', 'cmb2' ),
        'desc'       => __( 'Write your Block Quote Color class name', 'office_master' ),
        'id'         => $prefix . 'block_color',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );

    // Regular text field
    $team_item->add_field( array(
        'name'       => __( 'Animation Type', 'cmb2' ),
        'desc'       => __( 'Write your Animation Type Class Name', 'office_master' ),
        'id'         => $prefix . 'animation_type',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );

// blog post part
    $post_item = new_cmb2_box( array(
        'id'            => 'post_metabox',
        'title'         => __( 'Post Metabox', 'office_master' ),
        'object_types'  => array( 'post', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $post_item->add_field( array(
        'name'       => __( 'Post Icon', 'cmb2' ),
        'desc'       => __( 'Add New Post Icon', 'office_master' ),
        'id'         => $prefix . 'post_icon_class',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats', 
    ) );


// about page part
    $about_page_group = new_cmb2_box( array(
        'id'            => 'group_page_metabox',
        'title'         => __( 'Group Field Metabox', 'office_master' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, 
        'show_on'    => array(
            'key' => 'id',
            'value' => 12,
        ),
    ) );

    // Regular text field
    $about_group_para = $about_page_group->add_field( array(
        'name'       => __( 'Groupable Field', 'cmb2' ),
        'id'         => $prefix . 'about_group_meta_field',
        'type'       => 'group',
         
    ) );
    // Regular text field
    $about_page_group->add_group_field($about_group_para, array(
        'name'       => __( 'Group Heading', 'cmb2' ),
        'id'         => $prefix . 'about_heading',
        'type'       => 'text',
         
    ) );
    // Regular text field
    $about_page_group->add_group_field($about_group_para, array(
        'name'       => __( 'Group Description', 'cmb2' ),
        'id'         => $prefix . 'group_description',
        'type'       => 'textarea_small',
         
    ) );
    // Regular text field
    $about_page_group->add_group_field($about_group_para, array(
        'name'       => __( 'A tag hash link', 'cmb2' ),
        'id'         => $prefix . 'hash_link',
        'type'       => 'text',
        'repeatable' => true,
    ) );


}
?>