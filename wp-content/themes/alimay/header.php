<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Alimay Events</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/master.css">
	<?php wp_head(); ?>
	<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-533eddc076d72780"></script>
</head>
<body <?php body_class(); ?>>
<div id="page">

	<div id="container" class="wide">
		<header class="<?php if ( '565' == $post->post_parent ) { echo "open"; } else { echo "closed";} ?>">
			<?php if ( is_home() || is_single() || is_search() || is_archive() ): ?>
				<h1 id="blog-logo">
					Run of Show by Alimay
				</h1>
			<?php else: ?>
				<h1 id="site-logo">
					<a href="<?php bloginfo('url'); ?>">Alimay Events</a>
				</h1>	
			<?php endif ?>
			<nav role="navigation">
				<a href="<?php bloginfo('url'); ?>"<?php if ( is_front_page() ) { echo " class='active'"; } ?>>Home</a>
				<a href="#"<?php if ( '565' == $post->post_parent ) { echo " class='active skip'"; } ?> id="nav-about">About</a>
				<a href="<?php echo get_permalink( 2 ); ?>"<?php if ( is_page('portfolio') || '2' == $post->post_parent ) { echo " class='active'"; } ?>>Portfolio</a>
				<a href="<?php echo get_permalink( 17 ); ?>"<?php if ( is_page( 'praise' )) { echo " class='active'"; } ?>>Praise</a>
				<a href="<?php echo get_permalink( 688 ); ?>" <?php if ( is_page( 'contact' )) { echo "class='active'"; } ?>>Contact</a>
				<a href="<?php echo get_permalink( 97 ); ?>"<?php if ( is_home() || is_single() ) {
					echo " class='active'";
				} ?>>The Blog</a>
			</nav>
			<div id="sub-nav" class="<?php if ( '565' == $post->post_parent ) { echo "open"; } else { echo "closed";} ?>">
				<div>
					<a href="<?php echo get_permalink( 567 ); ?>"<?php if (is_page( 'about-us' )) { echo " class='active'"; } ?>>About Us</a>
					<a href="<?php echo get_permalink( 569 ); ?>"<?php if (is_page( 'philosophy' )) { echo " class='active'"; } ?>>Philosophy</a>
					<a href="<?php echo get_permalink( 573 ); ?>"<?php if (is_page( 'services' )) { echo " class='active'"; } ?>>Services</a>
					<a href="<?php echo get_permalink( 601 ); ?>"<?php if (is_page( 'trimmings' )) { echo " class='active'"; } ?>>Trimmings</a>
					
					<span class="slug">elegance redefined.</span>
					
				</div>
			</div>
		</header>
		<div id="main" role="main">