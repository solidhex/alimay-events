<?php
/**
 * This is really the blog page. It must be named index.php and the corresponding page 
 * in the CMS with id 51 cannot be deleted.
 */
?>

<?php get_header(); ?>
	<div id="primary">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'alimay' ), '<em>' . get_search_query() . '</em>' ); ?></h1>
				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<header>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time('j F Y'); ?></time>
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<div class="categories"><?php the_category( ', ' ); ?></div>
					</header>
					<div class="the-content">
						<?php the_content(); ?>
					</div>
					<footer>
						<a href="<?php comments_link(); ?>" class="comments"><?php comments_number( 'no comments', '1 comment', '% comments' ); ?></a>
						<div class="sharing">
							<div class="addthis_toolbox addthis_default_style">
								<a class="addthis_button_pinterest"></a>
								<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
								<a class="addthis_button_tweet"></a>
								<a class="addthis_button_facebook_send"></a>
							</div>
						</div>
					</footer>
				</article>
		<?php else : ?>
			<article class="not-found">
				<h1 class="page-title">
					Sorry, nothing matched your search criteria. Please try again with different keywords.
				</h1>
			</article>
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>