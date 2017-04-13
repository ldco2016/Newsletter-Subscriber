<?php

  /**
  * Plugin Name: Newsletter Subscriber
  * Description: A form to subscribe to a newsletter
  * Version 1.0
  * Author: Daniel Cortes
  *
  **/

  // Exit if Accessed Directly
  if(!defined('ABSPATH')){
    exit;
  }

  // Loading Scripts
  require_once(plugin_dir_path(__FILE__) . '/includes/newsletter-subscriber-scripts.php');

  // Loading Class
  require_once(plugin_dir_path(__FILE__) . '/includes/newsletter-subscriber-class.php');

  function register_newsletter_subscriber(){
    register_widget('Newsletter_Subscriber_Widget');
  }

  add_action('widgets_init','register_newsletter_subscriber');

 ?>
