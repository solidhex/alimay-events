<?php
/**
 * Generic Page Template
 */
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<section class="interior">
			<div class="content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</section>
		
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>