<?php

add_action('wp_enqueue_scripts', 'co2ok_enqueue_scripts');

function co2ok_enqueue_scripts() {
  // TODO: Noscript style should be wrapped in <noscript> element, probably some hook that works for that.
  // wp_register_style('co2ok-noscript', get_template_directory_uri() . '/assets/css/noscript.css');
  wp_register_style('co2ok-main', get_template_directory_uri() . '/assets/css/main.css'/*, array('co2ok-noscript')*/);
  wp_enqueue_style('co2ok-main');
  wp_register_script('jquery-scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'), false, true);
  wp_register_script('jquery-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jquery'), false, true);
  wp_register_script('co2ok-skel', get_template_directory_uri() . '/assets/js/skel.min.js', array(), false, true);
  wp_register_script('co2ok-util', get_template_directory_uri() . '/assets/js/util.js', array(), false, true);
  wp_register_script('co2ok-main', get_template_directory_uri() . '/assets/js/main.js', array('co2ok-util', 'co2ok-skel', 'jquery-scrolly', 'jquery-scrollex'), false, true);
  wp_enqueue_script('co2ok-main');
}