<?php

if (!function_exists('samTheme_setup'))
{
  function samTheme_setup()
  {
    register_nav_menus(array(
      'header' => esc_html__('header', 'fullbase'),
    ));

  }
    add_action('after_setup_theme', 'samTheme_setup');
}


 if (!function_exists('import_style_scripts'))
 {
   function import_style_scripts()
   {

     // importo i miei file locali
     wp_enqueue_script( 'jsSamTheme', get_template_directory_uri() . '/main.js', array ( 'jquery' ), 1.1, true);
     wp_enqueue_script( 'jsBootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js');
     wp_enqueue_script( 'jsQuery', "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js");

     wp_enqueue_style('styleSamTheme', get_template_directory_uri() . '/style.css');
     // importo cdn di librerie esterne
     wp_enqueue_style('fontAwesomeSamTheme', "https://use.fontawesome.com/releases/v5.0.13/css/all.css");
     wp_enqueue_style('bootstrapSamTheme', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
   }
     add_action('wp_enqueue_scripts', 'import_style_scripts');
 }
?>
