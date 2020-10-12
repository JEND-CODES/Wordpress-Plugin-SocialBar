<?php
  // Add Scripts
  function sb_add_scripts(){
    // Add Main CSS
    wp_enqueue_style('sb-main-style', plugins_url(). '/socialbar/css/style.css');
    // Add Main JS
    wp_enqueue_script('sb-main-script', plugins_url(). '/socialbar/js/main.js');

  }

  add_action('wp_enqueue_scripts', 'sb_add_scripts');
