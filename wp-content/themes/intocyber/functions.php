<?php

/**
 * Theme Functions.
 *
 */

function intocyber_enqueue_scripts()
{
   wp_enqueue_style('stylesheet', get_stylesheet_uri());
   wp_register_style('mainstyle', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));
   wp_register_style('headerstyle', get_template_directory_uri() . '/assets/css/header.css', [], filemtime(get_template_directory() . '/assets/css/header.css'));
   wp_register_style('footerstyle', get_template_directory_uri() . '/assets/css/footer.css', [], filemtime(get_template_directory() . '/assets/css/footer.css'));
   wp_register_style('responsivestyle', get_template_directory_uri() . '/assets/css/responsive.css', [], filemtime(get_template_directory() . '/assets/css/responsive.css'));

   wp_enqueue_style('mainstyle');
   wp_enqueue_style('headerstyle');
   wp_enqueue_style('footerstyle');
     wp_enqueue_style('responsivestyle');

   // Enqueue JavaScript
   wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/script.js'), true);
}
add_action('wp_enqueue_scripts', 'intocyber_enqueue_scripts');


// Adding Custom Logo support to your Theme
add_theme_support('custom-logo');
add_theme_support( 'post-thumbnails' );

// Header Nav menu call in Dashboard
function register_custom_menus()
{
   $menus = array(
      'primary' => __('Primary Menu', 'intocyber'),
      'footer' => __('Footer Menu', 'intocyber'),
      'links' => __('Links Menu', 'intocyber')
   );

   foreach ($menus as $location => $description) {
      register_nav_menu($location, $description);
   }
}
add_action('after_setup_theme', 'register_custom_menus');


// SVG Support in wordpresss
function allow_svg_upload($mimes)
{
   $mimes['svg'] = 'image/svg+xml';
   return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');


//Upload SVG Files
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}



//Add Options Page
if( function_exists('acf_add_options_page') ) {
   acf_add_options_page();   
   acf_add_options_page(array(
         'page_title'    => 'IC Widgets Settings',
         'menu_title'    => 'IC Widgets',
         'menu_slug'     => 'ic-widget-settings',
         'capability'    => 'edit_posts',
         'redirect'      => false
     ));
 }


// image compressor
function reduce_image_size($attachment_id) {
    $attachment_path = get_attached_file($attachment_id);
    if (false !== strpos($attachment_path, '.jpg') || false !== strpos($attachment_path, '.jpeg')) {
        $original_image = imagecreatefromjpeg($attachment_path);
        $original_width = imagesx($original_image);
        $original_height = imagesy($original_image);
        $new_width = $original_width * 0.5; 
        $new_height = $original_height * 0.5;
        $resized_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($resized_image, $original_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);
        imagejpeg($resized_image, $attachment_path, 5);
        imagedestroy($original_image);
        imagedestroy($resized_image);
    }
}
add_action('add_attachment', 'reduce_image_size');
add_action('edit_attachment', 'reduce_image_size');
