<?php

function project_post_types() {
  //Project post type
  register_post_type('project', array(
    'rewrite' => array('slug' => 'projects'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Projects',
      'add_new_item' => 'Add New Project',
      'edit_item' => 'Edit Project',
      'all_items' => 'All Projects',
      'singular_name' => 'Project'
    ),
    'menu_icon' => 'dashicons-open-folder'
  ));

// Trade Post Type
  register_post_type('trade', array(
    'show_in_rest' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'trades'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Programs',
      'add_new_item' => 'Add New Trade',
      'edit_item' => 'Edit Trade',
      'all_items' => 'All Trades',
      'singular_name' => 'Trade'
    ),
    'menu_icon' => 'dashicons-awards'
  ));
}