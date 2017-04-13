<?php

  // Add Scripts
  function ns_add_scripts(){
    wp_enqueque_style('ns-main-style',plugins_url().'/newsletter-subscriber/css/style.css');
    wp_enqueque_script('ns-main-script',plugins_url().'/newsletter-subscriber/js/main.js');
  }

add_action('wp_enqueque_scripts', 'ns_add_scripts');

 ?>
