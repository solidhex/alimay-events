<?php
	
// remove admin bar when logged in
add_filter('show_admin_bar', '__return_false');

// custom image sizes
add_image_size( 'magazine-thumb', 162, 214, true );
add_image_size( 'magazine-modal', 664, 418, true );
add_image_size( 'featured', 127, 82, true );
add_image_size( 'online', 162, 106, true );
add_image_size( 'headshot', 198, 272, true );

// add support for featured images
add_theme_support( 'post-thumbnails' );

?>