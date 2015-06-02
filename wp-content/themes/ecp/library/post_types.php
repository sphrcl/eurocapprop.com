<?php
/**
 * Custom Post Types
 *
 * @package WordPress
 * @subpackage cebo
 * @since Dream Home 1.0
 */
 
///////////////////////////////////////////////////////////////////////////// Custom Post Type



function my_project_columns($columns)
{
$columns = array(
 "cb" => "<input type=\"checkbox\" />",
 "title" => "Project Name",
 "projectthumb" => "Project Quick Look",
 );
 return $columns;
}

function my_custom_columns($column)
{
 global $post;
 $dater = get_post_meta($post->ID, 'misfit_dater');
 $link = get_post_meta($post->ID, 'misfit_link');
  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
 if ("ID" == $column) echo $post->ID;
 elseif ("projectthumb" == $column) echo '<img src="' . $imgsrc[0] . '" width="150px"';
 elseif ("dater" == $column) echo $dater[0];
 elseif ("link" == $column) echo $link[0];
}


//create taxonomy for project type

create_type_taxonomies();

include(TEMPLATEPATH . '/options/secondary-panel.php'); 

function create_type_taxonomies()
{
  // Taxonomy for Location
  $labels = array(
    'name' => _x( 'Portfolio Item Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Portfolio Item Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Portfolio Item Types' ),
    'all_items' => __( 'All Portfolio Item Types' ),
    'parent_item' => __( 'Parent Portfolio Item Type' ),
    'parent_item_colon' => __( 'Parent Portfolio Item Type:' ),
    'edit_item' => __( 'Edit Portfolio Item Type' ),
    'update_item' => __( 'Update Portfolio Item Type' ),
    'add_new_item' => __( 'Add New Portfolio Item Type' ),
    'new_item_name' => __( 'New Portfolio Item Type Name' ),
  ); 	

  register_taxonomy('type', array('project'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio-type' ),
  ));

}


$parent_term = term_exists('type' ); // array is returned if taxonomy is given
$parent_term_id = $parent_term['term_id']; // get numeric term id
wp_insert_term(
  'Uncategorized', // the term 
  'type', // the taxonomy
  array(
    'description'=> 'uncategorized',
    'slug' => 'uncategorized',
    'parent'=> $parent_term_id
  )
);



add_action('init', 'developments_items');
function developments_items()
{
  $labels = array(
    'name' => _x('Development', 'post type general name'),
    'singular_name' => _x('Development', 'post type singular name'),
    'add_new' => _x('Add New', 'Development'),
    'add_new_item' => __('Add New Development'),
    'edit_item' => __('Edit Development'),
    'new_item' => __('New Development'),
    'view_item' => __('View Development'),
    'search_items' => __('Search Development Items'),
    'not_found' =>  __('No Development found'),
    'not_found_in_trash' => __('No Development found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'development' ),
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-building',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','custom-fields','editor','author','excerpt','thumbnail','revisions')
  );
  register_post_type('development',$args);
}



create_development_taxonomies();
function create_development_taxonomies() {

  $labels = array(
    'name' => _x( 'Development Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Development Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Development Types' ),
    'all_items' => __( 'All Development Types' ),
    'parent_item' => __( 'Parent Development Type' ),
    'parent_item_colon' => __( 'Parent Development Type:' ),
    'edit_item' => __( 'Edit Development Type' ),
    'update_item' => __( 'Update Development Type' ),
    'add_new_item' => __( 'Add New Development Type' ),
    'new_item_name' => __( 'New Development Type Name' ),
  ); 	

  register_taxonomy('type', array('development'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'development-type' ),
  ));

}



add_action('init', 'leadership_items');
function leadership_items()
{
  $labels = array(
    'name' => _x('Leadership', 'post type general name'),
    'singular_name' => _x('Leadership', 'post type singular name'),
    'add_new' => _x('Add New', 'Leadership'),
    'add_new_item' => __('Add New Leadership'),
    'edit_item' => __('Edit Leadership'),
    'new_item' => __('New Leadership'),
    'view_item' => __('View Leadership'),
    'search_items' => __('Search Leadership Items'),
    'not_found' =>  __('No Leadership found'),
    'not_found_in_trash' => __('No Leadership found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'leadership' ),
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-businessman',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','custom-fields','editor','author','excerpt','thumbnail','revisions')
  );
  register_post_type('leadership',$args);
}



add_action('init', 'management_items');
function management_items()
{
  $labels = array(
    'name' => _x('Management', 'post type general name'),
    'singular_name' => _x('Management', 'post type singular name'),
    'add_new' => _x('Add New', 'Management'),
    'add_new_item' => __('Add New Management'),
    'edit_item' => __('Edit Management'),
    'new_item' => __('New Management'),
    'view_item' => __('View Management'),
    'search_items' => __('Search Management Items'),
    'not_found' =>  __('No Management found'),
    'not_found_in_trash' => __('No Management found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'management' ),
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-admin-users',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','custom-fields','editor','author','excerpt','thumbnail','revisions')
  );
  register_post_type('management',$args);
}



add_action('init', 'partnership_items');
function partnership_items()
{
  $labels = array(
    'name' => _x('Partnership', 'post type general name'),
    'singular_name' => _x('Partnership', 'post type singular name'),
    'add_new' => _x('Add New', 'Partnership'),
    'add_new_item' => __('Add New Partnership'),
    'edit_item' => __('Edit Partnership'),
    'new_item' => __('New Partnership'),
    'view_item' => __('View Partnership'),
    'search_items' => __('Search Partnership Items'),
    'not_found' =>  __('No Partnership found'),
    'not_found_in_trash' => __('No Partnership found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'partnership' ),
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-groups',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','custom-fields','editor','author','excerpt','thumbnail','revisions')
  );
  register_post_type('partnership',$args);
}



add_action('init', 'press_items');
function press_items()
{
  $labels = array(
    'name' => _x('Press', 'post type general name'),
    'singular_name' => _x('Press', 'post type singular name'),
    'add_new' => _x('Add New', 'Press'),
    'add_new_item' => __('Add New Press'),
    'edit_item' => __('Edit Press'),
    'new_item' => __('New Press'),
    'view_item' => __('View Press'),
    'search_items' => __('Search Press Items'),
    'not_found' =>  __('No Press found'),
    'not_found_in_trash' => __('No Press found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'press' ),
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-media-document',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','custom-fields','editor','author','excerpt','thumbnail','revisions')
  );
  register_post_type('press',$args);
}


?>