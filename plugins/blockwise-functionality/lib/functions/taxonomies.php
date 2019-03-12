<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function blockwise_lesson_topic()
{

    $labels = array(
        'name'                       => 'Lesson Types',
        'singular_name'              => 'Lesson Type',
        'menu_name'                  => 'Lesson Type',
        'all_items'                  => 'All Lesson Types',
        'parent_item'                => 'Parent Lesson Type',
        'parent_item_colon'          => 'Parent Lesson Type:',
        'new_item_name'              => 'New Lesson Type',
        'add_new_item'               => 'Add New Lesson Type',
        'edit_item'                  => 'Edit Lesson Type',
        'update_item'                => 'Update Lesson Type',
        'view_item'                  => 'View Lesson Type',
        'separate_items_with_commas' => 'Separate lesson types with commas',
        'add_or_remove_items'        => 'Add or remove lesson types',
        'choose_from_most_used'      => 'Choose from the most used',
        'popular_items'              => 'Popular Items',
        'search_items'               => 'Search Lesson Types',
        'not_found'                  => 'Not Found',
        'no_terms'                   => 'No Lesson Types',
        'items_list'                 => 'Lesson Types list',
        'items_list_navigation'      => 'Lesson Types list navigation',
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy('lesson_type', array('lesson'), $args);
}
add_action('init', 'blockwise_lesson_topic', 0);
