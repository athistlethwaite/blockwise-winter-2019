<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...


function blockwise_event()
{

    $labels = array(
        'name'                  => 'Events',
        'singular_name'         => 'Event',
        'menu_name'             => 'Events',
        'name_admin_bar'        => 'Event',
        'archives'              => 'Event Archives',
        'attributes'            => 'Event Attributes',
        'parent_item_colon'     => 'Parent Event:',
        'all_items'             => 'All Events',
        'add_new_item'          => 'Add New Event',
        'add_new'               => 'Add New Event',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Event',
        'update_item'           => 'Update Event',
        'view_item'             => 'View Event',
        'view_items'            => 'View Event',
        'search_items'          => 'Search Event',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Event',
        'uploaded_to_this_item' => 'Uploaded to this Event',
        'items_list'            => 'Events list',
        'items_list_navigation' => 'Events list navigation',
        'filter_items_list'     => 'Filter Events list',
    );
    $args = array(
        'label'                 => 'Event',
        'description'           => 'Blockwise Events',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'            => true,
    );
    register_post_type('event', $args);
}
add_action('init', 'blockwise_event', 0);

function blockwise_lesson()
{

    $labels = array(
        'name'                  => 'Lessons',
        'singular_name'         => 'Lesson',
        'menu_name'             => 'Lessons',
        'name_admin_bar'        => 'Lesson',
        'archives'              => 'Lesson Archives',
        'attributes'            => 'Lesson Attributes',
        'parent_item_colon'     => 'Parent Lesson:',
        'all_items'             => 'All Lessons',
        'add_new_item'          => 'Add New Lesson',
        'add_new'               => 'Add New Lesson',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Lesson',
        'update_item'           => 'Update Lesson',
        'view_item'             => 'View Lesson',
        'view_items'            => 'View Lesson',
        'search_items'          => 'Search Lesson',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Lesson',
        'uploaded_to_this_item' => 'Uploaded to this Lesson',
        'items_list'            => 'Lessons list',
        'items_list_navigation' => 'Lessons list navigation',
        'filter_items_list'     => 'Filter Lessons list',
    );
    $args = array(
        'label'                 => 'Lesson',
        'description'           => 'Blockwise Lessons',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-book-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'            => true,
    );
    register_post_type('lesson', $args);
}
add_action('init', 'blockwise_lesson', 0);

function blockwise_mentor()
{

    $labels = array(
        'name'                  => 'Mentors',
        'singular_name'         => 'Mentor',
        'menu_name'             => 'Mentors',
        'name_admin_bar'        => 'Mentor',
        'archives'              => 'Mentor Archives',
        'attributes'            => 'Mentor Attributes',
        'parent_item_colon'     => 'Parent Mentor:',
        'all_items'             => 'All Mentors',
        'add_new_item'          => 'Add New Mentor',
        'add_new'               => 'Add New Mentor',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Mentor',
        'update_item'           => 'Update Mentor',
        'view_item'             => 'View Mentor',
        'view_items'            => 'View Mentor',
        'search_items'          => 'Search Mentor',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Mentor',
        'uploaded_to_this_item' => 'Uploaded to this Mentor',
        'items_list'            => 'Mentors list',
        'items_list_navigation' => 'Mentors list navigation',
        'filter_items_list'     => 'Filter Mentors list',
    );
    $args = array(
        'label'                 => 'Mentor',
        'description'           => 'Blockwise Mentors',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'            => true,
    );
    register_post_type('product', $args);
}
add_action('init', 'blockwise_mentor', 0);

function blockwise_partner()
{

    $labels = array(
        'name'                  => 'Partners',
        'singular_name'         => 'Partner',
        'menu_name'             => 'Partners',
        'name_admin_bar'        => 'Partner',
        'archives'              => 'Partner Archives',
        'attributes'            => 'Partner Attributes',
        'parent_item_colon'     => 'Parent Partner:',
        'all_items'             => 'All Partners',
        'add_new_item'          => 'Add New Partner',
        'add_new'               => 'Add New Partner',
        'new_item'              => 'New Item',
        'edit_item'             => 'Edit Partner',
        'update_item'           => 'Update Partner',
        'view_item'             => 'View Partner',
        'view_items'            => 'View Partner',
        'search_items'          => 'Search Partner',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Partner',
        'uploaded_to_this_item' => 'Uploaded to this Partner',
        'items_list'            => 'Partners list',
        'items_list_navigation' => 'Partners list navigation',
        'filter_items_list'     => 'Filter Partners list',
    );
    $args = array(
        'label'                 => 'Partner',
        'description'           => 'Blockwise Partners',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'            => true,
    );
    register_post_type('partner', $args);
}
add_action('init', 'blockwise_partner', 0);
