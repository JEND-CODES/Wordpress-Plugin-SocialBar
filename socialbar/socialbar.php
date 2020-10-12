<?php
/*
Plugin Name: Social Bar
Plugin URI: http://portfolio.planetcode.fr/
Description: Ajoutez une barre fixe d'icônes avec des liens vers vos réseaux sociaux et réglez sa position
Version: 1.0.0
Author: Jean-Eudes Nouaille-Degorce
Author URI: http://portfolio.planetcode.fr/
*/

if(!defined('ABSPATH')){
  exit;
}

require_once(plugin_dir_path(__FILE__).'/includes/socialbar-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/socialbar-class.php');

// Enregistrement du Widget
function register_socialbar(){
  register_widget('Social_Bar_Widget');
}

add_action('widgets_init', 'register_socialbar');
