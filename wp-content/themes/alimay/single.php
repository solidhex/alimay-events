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
					<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_date(); ?></time>
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
			<div id="comments">
				<?php
					$comments = get_comments( $post->ID );
					if ($comments) :
				?>
				<h2 class="alternate">Comments</h2>
				<ul class="comments-list">
					<?php foreach ( $comments as $comment ): ?>
					<li>
						<div class="author">
							<span><?php echo $comment->comment_author; ?></span> said
						</div>
						<div><?php echo $comment->comment_content; ?></div>
						<time><?php echo date( 'j F Y', strtotime($comment->comment_date) ); ?></time>
					</li>	
					<?php endforeach; ?>
				</ul>	
				<?php endif; ?>
			</div>
			<?php
			$comments_args = array(
			        // change the title of send button 
			        'label_submit'=>'Send',
			        // change the title of the reply section
			        'title_reply'=>'LEAVE A COMMENT',
			        // remove "Text or HTML to be displayed after the set of comment fields"
			        'comment_notes_after' => '',
			        // redefine your own textarea (the comment body)
			        'comment_field' => '<p class="comment-form-comment">' . 
					'<textarea id="comment" name="comment" placeholder="Comment*" aria-required="true"></textarea></p>',
					'comment_notes_before' => '',
					'comment_notes_after' => '<span id="after-note">Required fields marked *</span>',
					'fields' => apply_filters( 'comment_form_default_fields', array(

					    'author' =>
					      '<p class="comment-form-author">' .
					      '<input id="author" name="author" placeholder="Name*" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					      '" size="30"' . $aria_req . ' /></p>',

					    'email' =>
					      '<p class="comment-form-email">' .
					      '<input id="email" name="email" type="text" placeholder="Email address*" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					      '" size="30"' . $aria_req . ' /></p>',

					    'url' =>
					      '<p class="comment-form-url">' .
					      '<input id="url" name="url" placeholder="Website (optional)" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					      '" size="30" /></p>'
					    )
					  ),
			);

			comment_form( $comments_args );
				
			?>
		<?php endwhile; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>