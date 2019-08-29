<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function employee_benefit_post()
{
  // creating (registering) the custom type 
  register_post_type(
    'employee_benefit', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array(
      'labels' => array(
        'name' => __('Employee Benefits', 'jointswp'), /* This is the Title of the Group */
        'singular_name' => __('Employee Benefit', 'jointswp'), /* This is the individual type */
        'all_items' => __('All Employee Benefits', 'jointswp'), /* the all items menu item */
        'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
        'add_new_item' => __('Add New Custom Type', 'jointswp'), /* Add New Display Title */
        'edit' => __('Edit', 'jointswp'), /* Edit Dialog */
        'edit_item' => __('Edit Post Types', 'jointswp'), /* Edit Display Title */
        'new_item' => __('New Post Type', 'jointswp'), /* New Display Title */
        'view_item' => __('View Post Type', 'jointswp'), /* View Display Title */
        'search_items' => __('Search Post Type', 'jointswp'), /* Search Custom Type Title */
        'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
        'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
        'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __('All content related to Employee Benefits', 'jointswp'), /* Custom Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
      'rewrite'  => array('slug' => 'employee-benefit', 'with_front' => false), /* you can specify its url slug */
      'has_archive' => 'employee-benefit', /* you can rename the slug here */
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
    ) /* end of options */
  ); /* end of register post type */

  /* this adds your post categories to your custom post type */
  register_taxonomy_for_object_type('category', 'employee_benefit');
  /* this adds your post tags to your custom post type */
  register_taxonomy_for_object_type('post_tag', 'employee_benefit');
}

// adding the function to the Wordpress init
add_action('init', 'employee_benefit_post');

// let's create the function for the custom type
function hr_consulting_post()
{
  // creating (registering) the custom type 
  register_post_type(
    'hr_consulting', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array(
      'labels' => array(
        'name' => __('HR Consulting', 'jointswp'), /* This is the Title of the Group */
        'singular_name' => __('HR Consulting', 'jointswp'), /* This is the individual type */
        'all_items' => __('All HR Consulting', 'jointswp'), /* the all items menu item */
        'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
        'add_new_item' => __('Add New Custom Type', 'jointswp'), /* Add New Display Title */
        'edit' => __('Edit', 'jointswp'), /* Edit Dialog */
        'edit_item' => __('Edit Post Types', 'jointswp'), /* Edit Display Title */
        'new_item' => __('New Post Type', 'jointswp'), /* New Display Title */
        'view_item' => __('View Post Type', 'jointswp'), /* View Display Title */
        'search_items' => __('Search Post Type', 'jointswp'), /* Search Custom Type Title */
        'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
        'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
        'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __('All content related to HR Consulting', 'jointswp'), /* Custom Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
      'rewrite'  => array('slug' => 'hr-consulting', 'with_front' => false), /* you can specify its url slug */
      'has_archive' => 'hr-consulting', /* you can rename the slug here */
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
    ) /* end of options */
  ); /* end of register post type */

  /* this adds your post categories to your custom post type */
  register_taxonomy_for_object_type('category', 'hr_consulting');
  /* this adds your post tags to your custom post type */
  register_taxonomy_for_object_type('post_tag', 'hr_consulting');
}

// adding the function to the Wordpress init
add_action('init', 'hr_consulting_post');


// let's create the function for the custom type
function individuals_medicare()
{
  // creating (registering) the custom type 
  register_post_type(
    'individuals_medicare', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array(
      'labels' => array(
        'name' => __('Individuals / Medicare', 'jointswp'), /* This is the Title of the Group */
        'singular_name' => __('Individuals / Medicare', 'jointswp'), /* This is the individual type */
        'all_items' => __('All Individuals / Medicare', 'jointswp'), /* the all items menu item */
        'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
        'add_new_item' => __('Add New Custom Type', 'jointswp'), /* Add New Display Title */
        'edit' => __('Edit', 'jointswp'), /* Edit Dialog */
        'edit_item' => __('Edit Post Types', 'jointswp'), /* Edit Display Title */
        'new_item' => __('New Post Type', 'jointswp'), /* New Display Title */
        'view_item' => __('View Post Type', 'jointswp'), /* View Display Title */
        'search_items' => __('Search Post Type', 'jointswp'), /* Search Custom Type Title */
        'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */
        'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
        'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __('All content related to Individuals / Medicare', 'jointswp'), /* Custom Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => false,
      'query_var' => true,
      'menu_position' => 10, /* this is what order you want it to appear in on the left hand side menu */
      'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
      'rewrite'  => array('slug' => 'individuals-medicare', 'with_front' => false), /* you can specify its url slug */
      'has_archive' => 'individuals-medicare', /* you can rename the slug here */
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
    ) /* end of options */
  ); /* end of register post type */

  /* this adds your post categories to your custom post type */
  register_taxonomy_for_object_type('category', 'individuals_medicare');
  /* this adds your post tags to your custom post type */
  register_taxonomy_for_object_type('post_tag', 'individuals_medicare');
}

// adding the function to the Wordpress init
add_action('init', 'individuals_medicare');


add_filter('pre_get_posts', 'post_type_search');
/**
 * This function modifies the main WordPress query to include an array of 
 * post types instead of the default 'post' post type.
 *
 * @param object $query  The original query.
 * @return object $query The amended query.
 */
function post_type_search($query)
{

  if ($query->is_search) {
    $query->set('post_type', array('post', 'attachment', 'individuals_medicare', 'employee-benefits', 'life-disability', 'health-insurance'));
  }

  return $query;
}
/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/

// now let's add custom categories (these act like categories)
register_taxonomy(
  'custom_cat',
  array('individuals_medicare'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
  array(
    'hierarchical' => true,     /* if this is true, it acts like categories */
    'labels' => array(
      'name' => __('Custom Categories', 'jointswp'), /* name of the custom taxonomy */
      'singular_name' => __('Custom Category', 'jointswp'), /* single taxonomy name */
      'search_items' =>  __('Search Custom Categories', 'jointswp'), /* search title for taxomony */
      'all_items' => __('All Custom Categories', 'jointswp'), /* all title for taxonomies */
      'parent_item' => __('Parent Custom Category', 'jointswp'), /* parent title for taxonomy */
      'parent_item_colon' => __('Parent Custom Category:', 'jointswp'), /* parent taxonomy title */
      'edit_item' => __('Edit Custom Category', 'jointswp'), /* edit custom taxonomy title */
      'update_item' => __('Update Custom Category', 'jointswp'), /* update title for taxonomy */
      'add_new_item' => __('Add New Custom Category', 'jointswp'), /* add new title for taxonomy */
      'new_item_name' => __('New Custom Category Name', 'jointswp') /* name title for taxonomy */
    ),
    'show_admin_column' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'individuals-medicare'),
  )
);

// // now let's add custom tags (these act like categories)
// register_taxonomy(
//   'custom_tag',
//   array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
//   array(
//     'hierarchical' => false,    /* if this is false, it acts like tags */
//     'labels' => array(
//       'name' => __('Custom Tags', 'jointswp'), /* name of the custom taxonomy */
//       'singular_name' => __('Custom Tag', 'jointswp'), /* single taxonomy name */
//       'search_items' =>  __('Search Custom Tags', 'jointswp'), /* search title for taxomony */
//       'all_items' => __('All Custom Tags', 'jointswp'), /* all title for taxonomies */
//       'parent_item' => __('Parent Custom Tag', 'jointswp'), /* parent title for taxonomy */
//       'parent_item_colon' => __('Parent Custom Tag:', 'jointswp'), /* parent taxonomy title */
//       'edit_item' => __('Edit Custom Tag', 'jointswp'), /* edit custom taxonomy title */
//       'update_item' => __('Update Custom Tag', 'jointswp'), /* update title for taxonomy */
//       'add_new_item' => __('Add New Custom Tag', 'jointswp'), /* add new title for taxonomy */
//       'new_item_name' => __('New Custom Tag Name', 'jointswp') /* name title for taxonomy */
//     ),
//     'show_admin_column' => true,
//     'show_ui' => true,
//     'query_var' => true,
//   )
// ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/CMB2/CMB2
    */
