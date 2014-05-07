<?php

/**
 * Template Name: Portfolio
*/

?>

<?php
	get_header();
?>

<section class="portfolio-grid">
	<?php
		$items = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order' ) );
		if ( $items ) :
	?>
	<ul>
		<?php foreach ( $items as $item ): ?>
			<li>
				<a href="<?php echo get_page_link( $item->ID ); ?>">
					<figure>
					<?php //echo get_attached_images( $item->ID, "thumbnail", TRUE ); ?>
					<?php echo get_the_post_thumbnail( $item->ID, "thumbnail" ); ?> 
						<figcaption>
							<section>
								<div>
									<h1><?php echo $item->post_title; ?></h1>
									<h2><?php echo get_post_meta( $item->ID, 'event-type', TRUE ); ?></h2>
								</div>
							</section>
						</figcaption>
					</figure>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
		<?php endif; ?>
</section>

<?php
	get_footer();
?>