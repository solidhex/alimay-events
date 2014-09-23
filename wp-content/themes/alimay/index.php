<?php
/**
 * This is really the blog page. It must be named index.php and the corresponding page 
 * in the CMS with id 51 cannot be deleted.
 */
?>

<?php get_header(); ?>
	<div id="primary">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<header>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time('F d, Y'); ?></time>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="categories"><?php the_category( ', ' ); ?></div>
				</header>
				<div class="the-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<div class="comments"><a href="<?php comments_link(); ?>"><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></a> | <a href="<?php echo get_permalink(); ?>#respond">Add A Comment</a></div>
					<div class="sharing">
						<div class="addthis_toolbox addthis_default_style">
							<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
							<a class="addthis_button_tweet"></a>
							<a class="addthis_button_facebook_share" fb:share:layout="button" addthis:url="<?php the_permalink(); ?>"></a>
						</div>
					</div>
				</footer>
				<section class="also">
					<h1>You Might Also Enjoy</h1>
					<?php
						$category = get_the_category();
						$category = $category[0]->cat_ID;

						$args = array(
							'numberposts' => 4,
							'category' => $category,
							'exclude' => $post->ID
						);
						
						$related = get_posts( $args );
						
					?>
					<?php foreach ($related as $post): ?>
						<div class="related">
							<a href="<?php echo get_permalink( $post->ID );?>">
							<figure><?php echo get_attached_images( $post->ID, 'preview', TRUE ); ?></figure>
							<h3><?php echo $post->post_title; ?></h3>
							</a>
						</div>
					<?php endforeach ?>
				</section>
			</article>
		<?php endwhile; ?>
		<?php if ( $wp_query->max_num_pages > 1 ): ?>
			<div class="keep-reading">
				<h1>keep reading</h1>
				<div id="next-posts"><?php echo get_next_posts_link(); ?></div>
				<div id="previous-posts"><?php echo get_previous_posts_link(); ?></div>
			</div>
		<?php endif ?>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>