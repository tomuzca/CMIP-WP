<?php

function projects_post_types() {
  register_post_type('projects', array(
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
}

add_action('init', 'projects_post_types');


?>