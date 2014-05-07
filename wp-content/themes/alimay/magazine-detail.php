<?php
/**
 * Template Name: Magazine Detail
 */
?>

<?php while ( have_posts() ) : the_post(); ?>
	<h1>
		<?php the_title(); ?> <small><?php echo get_the_content(); ?></small>
	</h1>
	<div id="magazines">
		<div>
			<?php echo get_attached_images( $post->ID, 'magazine-modal', FALSE ); ?>
		</div>
	</div>
<?php endwhile; ?>