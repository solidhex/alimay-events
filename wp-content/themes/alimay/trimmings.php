<?php
/**
 * Template Name: Trimmings
 */
?>

<?php
	get_header();
?>

<section class="trimmings">
	<img src="<?php bloginfo( 'template_directory'); ?>/assets/img/trimmings.png" width="462" height="462" alt="Trimmings" class="banner">
	<h1>trimmings</h1>
	<article class="preamble">
		<p>
			Welcome to our one-stop shop for all your event embellishments or what we like to call Trimmings. We design and produce custom papery, signage, gifts, favors and accessories that add the finishing touches to your event.
		</p>
	</article>
	<div class="trimming-types">
		invitations | save the dates | menus | escort cards  
		programs | gifts and favors | signage | calligraphy 
		and more
	</div>
	
	<div class="trimmings-slider">
		<div>
			<?php echo get_attached_images( $post->ID, "large" ); ?>
		</div>
	</div>

</section>

<?php
	get_footer();
?>