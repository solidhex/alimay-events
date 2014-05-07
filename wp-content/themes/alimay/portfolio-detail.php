<?php
/**
 * Template Name: Portfolio Detail
 */
?>

<?php
	get_header();
?>

<section class="portfolio-detail">
	
	<?php 
		if ( have_posts() ): 
			while ( have_posts() ) : the_post(); 
			$content = get_the_content();
	?>
	
	<div class="previous"></div>
	<div class="next"></div>
	<div class="caption">
		<header>
			<span class="inspired">Inspired By</span>
			<h1><?php echo get_post_meta( $post->ID, 'inspired-by', TRUE ); ?></h1>
		</header>
		<?php if ( !empty( $content ) ): ?>
			<article>		
				<?php echo $content; ?>
			</article>
		<?php endif ?>
	</div>
	<section class="portfolio slider">
		<div>
			<?php echo get_attached_images( $post->ID, "large", FALSE, "<figure>", "</figure>" ); ?>
		</div>
	</section>
	<a href="<?php echo get_permalink( 2 ); ?>" class="back">&laquo; Back to Portfolio</a>
	<a href="<?php echo get_post_meta( $post->ID, 'photo-credits-url', TRUE ); ?>" class="credits"><?php echo get_post_meta( $post->ID, 'photo-credits-name', TRUE ); ?></a>
	<h2 class="title"><?php the_title(); ?> <span><?php echo get_post_meta( $post->ID, 'event-type', TRUE ); ?></span></h2>
	
	<?php 
			endwhile; 
		endif; 
	?>
	
</section>
<?php
	get_footer();
?>