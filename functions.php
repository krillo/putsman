<?php

//---------------------------------------------------------------------------------
//	Aktivera den inbyggda menyfunktionalliteten
//---------------------------------------------------------------------------------

add_theme_support('menus');
add_theme_support('post-thumbnails'); //to be able to use "get_the_post_thumbnail"


//---------------------------------------------------------------------------------
//	Aktivera widgets
//---------------------------------------------------------------------------------

if (function_exists('register_sidebar'))
  register_sidebar(array(
      'before_widget' => '<section>',
      'after_widget' => '</section>',
      'before_title' => '<h4>',
      'after_title' => '</h4>',
  ));


//---------------------------------------------------------------------------------
//	Ta bort blandat skräp från head
//---------------------------------------------------------------------------------

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

//---------------------------------------------------------------------------------
//	Lägg till Google Analytics i footern, ändra UA-XXXXX-X till din egen tracking-kod
//---------------------------------------------------------------------------------
/*
  function add_google_analytics() {
  echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
  echo '<script type="text/javascript">';
  echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
  echo 'pageTracker._trackPageview();';
  echo '</script>';
  }

  add_action('wp_footer', 'add_google_analytics');
 */


//custom post type
add_action('init', 'create_post_type');

function create_post_type() {
  register_post_type('whoarewe',
          array(
              'labels' => array(
                  'name' => __('whoarewe'),
                  'singular_name' => __('whoarewe')
              ),
              'public' => true,
              'has_archive' => false,
              'supports' => array('title', 'editor', 'thumbnail'),
          )
  );
  register_post_type('field-images',
          array(
              'labels' => array(
                  'name' => __('field-images'),
                  'singular_name' => __('field-image')
              ),
              'public' => true,
              'has_archive' => false,
              'supports' => array('title', 'thumbnail'),
          )
  );
  register_post_type('citat',
          array(
              'labels' => array(
                  'name' => __('citat'),
                  'singular_name' => __('citat')
              ),
              'public' => true,
              'has_archive' => false,
          )
  );
  register_post_type('splash-images',
          array(
              'labels' => array(
                  'name' => __('splash-images'),
                  'singular_name' => __('splash-image')
              ),
              'public' => true,
              'has_archive' => false,
              'supports' => array('title', 'thumbnail'),
          )
  );
  register_post_type('visitkort',
          array(
              'labels' => array(
                  'name' => __('visitkort'),
                  'singular_name' => __('visitkort')
              ),
              'public' => true,
              'has_archive' => false,
          )
  );
  register_post_type('interest-text',
          array(
              'labels' => array(
                  'name' => __('intresseanmälan-text'),
                  'singular_name' => __('intresseanmälan-text')
              ),
              'public' => true,
              'has_archive' => false,
          )
  );
}


if (function_exists('add_image_size')) {
  add_image_size('field-img', 220, 220, true); //(cropped)
}


/**
 * Enqueue some java scripts
 */
function load_scripts() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
  wp_enqueue_script('jquery');
  wp_register_script('lightbox', get_bloginfo('template_url') . '/jquery.lightbox-0.5.js');
  wp_enqueue_script('lightbox');
 
  if (is_page('start')) {
    wp_register_script('jcarousel', get_bloginfo('template_url') . '/jquery.jcarousel.min.js');
    wp_enqueue_script('jcarousel');
    wp_register_script('bigcarousel', get_bloginfo('template_url') . '/jquery.jcarousel.putsman.js');
    wp_enqueue_script('bigcarousel');
  }
}

add_action('wp_enqueue_scripts', 'load_scripts');


/*disable the 28px adminbar on top of all pages*/
/*
function remove_admin_bar_style_frontend() {
  echo '<style type="text/css" media="screen">
  html { margin-top: 0;}
  * html body { margin-top: 1px !important; }
  </style>';
}

add_filter('wp_head','remove_admin_bar_style_frontend', 99);


*/

