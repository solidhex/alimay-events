<?php
/**
 * Template Name: Categories
 */
?>

<?php get_header(); ?>
	<div id="primary">	
		<section class="archives">
			<h2>The Categories <span>for</span></h2>
			<?php
				$categories = get_categories( 'include=2,3,4,5&order=desc' );
				foreach ($categories as $category) {
					echo "<h3>" . $category->name . "</h3>";
					$posts = get_posts( 'category=' . $category->cat_ID );
					$count = 1;
					$totes = count($posts);
					foreach ($posts as $post) {
						$link = get_permalink( $post->ID );
						if ($count == 1) {
							echo "<ul class='archive-list'>";
						}
						echo "<li><a href='{$link}'>" . $post->post_title ."</a></li>";
						if ($count == $totes) {
							echo "</ul>";
						}
						$count++;
					}
				}
			?>
		</section>
	</div>	
	<?php get_sidebar(); ?> 
<?php get_footer(); ?>