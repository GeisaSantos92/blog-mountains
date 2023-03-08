<?php

add_action('cmb2_admin_init', 'cmb2_fields_home');


//home

function cmb2_fields_home() {
  $cmb = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

  $cmb->add_field([
    'name' => 'Logo',
    'id' => 'logo_home',
    'type' => 'file',
  ]);

  $cmb->add_field([
    'name' => 'Title Home',
    'id' => 'title_home',
    'type' => 'text',
  ]);
  

  $cmb->add_field([
    'name' => 'Description Home',
    'id' => 'desc_home',
    'type' => 'text',
  ]);


  //About

  $cmb = new_cmb2_box([
    'id' => 'about_box',
    'title' => 'About Us',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

    $cmb->add_field([
      'name' => 'Title About',
      'id' => 'title_about_home',
      'type' => 'text',
    ]);

    $cmb->add_field([
      'name' => 'Description About',
      'id' => 'desc_about_home',
      'type' => 'wysiwyg',
    ]);

    $cmb->add_field([
    'name' => 'Description About 2',
    'id' => 'desc_about_home2',
    'type' => 'wysiwyg',
  ]);



//Leaders
$cmb = new_cmb2_box([
  'id' => 'leaders_box',
  'title' => 'Leaders',
  'object_types' => ['page'],
  'show_on' => [
    'key' => 'page-template',
    'value' => 'page-home.php',
  ],
]);

$cmb->add_field([
  'name' => 'Logo Leaders',
  'id' => 'logo_leaders_home',
  'type' => 'file',
]);


  $cmb->add_field([
    'name' => 'Title Leaders',
    'id' => 'title_leaders_home',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Description Leaders',
    'id' => 'desc_leaders_home',
    'type' => 'text',
  ]);



/*team*/
  $cmb = new_cmb2_box([
    'id' => 'team_box',
    'title' => 'Team',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);

  $team = $cmb->add_field([
    'name' => 'Image Team',
    'id' => 'image_team_home',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Image Team {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  $cmb->add_group_field($team, [
    'name' => 'Image team',
    'id' => 'images_team_home',
    'type' => 'file',
  ]);

  $cmb->add_field([
    'name' => 'Title Team',
    'id' => 'title_team',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Description Team',
    'id' => 'description_team',
    'type' => 'wysiwyg',
  ]);

  //Contact

  $cmb = new_cmb2_box([
    'id' => 'contact_box',
    'title' => 'Contact',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ],
  ]);
  
  $cmb->add_field([
    'name' => 'Title Contact',
    'id' => 'title_contact_home',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Descrição Contact',
    'id' => 'description_contact_home',
    'type' => 'wysiwyg',
  ]);
  


  //Blog

  $cmb = new_cmb2_box([
    'id' => 'blog_box',
    'title' => 'Blog',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-blog.php',
    ],
  ]);
  
  $cmb->add_field([
    'name' => 'Title Blog',
    'id' => 'title_blog',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Sidebar Blog',
    'id' => 'title_sidebar',
    'type' => 'text',
  ]);
 
  $cmb->add_field([
    'name' => 'Sidebar Blog',
    'id' => 'image_sidebar',
    'type' => 'file',
  ]);

  $cmb->add_field([
    'name' => 'Signature Blog',
    'id' => 'signature_sidebar',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Description Blog',
    'id' => 'desc_sidebar',
    'type' => 'text',
  ]);


  $cmb->add_field([
    'name' => 'Sponsor Blog',
    'id' => 'sponsor_sidebar',
    'type' => 'file',
  ]);


}

add_theme_support( 'post-thumbnails' ); 

?>