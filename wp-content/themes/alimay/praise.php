<?php
/**
 * Template Name: Praise
 */
?>

<?php
	get_header();
?>

<section class="praise-you">
	
	<?php
		$items = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date' ) );
		if ( $items ) :
			$index = 0;
			foreach ( $items as $item ):
				if ( $item->post_title == 'Online' || $item->post_title == 'Magazine' || $item->post_title == 'Contributor' ) :
	?>
	<div class="carousel-parent magazines">
		<h1 class="type"><?php echo $item->post_title; ?></h1>
		<div class="previous" id="previous<?php echo $index; ?>"></div>
		<div class="next" id="next<?php echo $index; ?>"></div>
		<div class="carousel">
			<div>
				<?php 
					$size = ($item->post_name == "magazine") ? "magazine-thumb" : "online" ; 
				?>
				<?php echo get_attached_images( $item->ID, $size, FALSE, "<figure class='{$size}'>", "</figure>" ); ?>
			</div>
		</div>
	</div>	
				<?php $index++; ?>
				<?php endif; ?>
			<?php endforeach; ?>
	<?php endif; ?>

</section>

<?php
	get_footer();
?>