	<aside id="sidebar">
		<section class="connected">
			<a href="https://www.facebook.com/pages/Alimay-Events-Productions/69069944926" class="share fb">Facebook</a>
			<a href="https://twitter.com/AlimayEvents" class="share twitter">Twitter</a>
			<a href="http://www.pinterest.com/alimayevents/" class="share pinterest">Pinterest</a>
			<a href="http://instagram.com/alimayevents" class="share instagram">Instagram</a>
		</section>
		<section class="module archives">
			<h2>The Archives <span>for</span></h2>
			<ul>
				<?php
					$categories = get_categories( 'exclude=1&parent=0' );
					foreach ( $categories as $cat ) : 
				?>
				<li><a href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->cat_name; ?></a></li>
			<?php endforeach; ?>		
			<li><a href="<?php echo get_permalink( 1260 ); ?>">Categories</a></li>
			<li><a href="<?php echo get_permalink( 1262 ); ?>">Archives</a></li>
			</ul>
		</section>
		<section class="module">
			<h1 class="currently twitter">Currently</h1>
			<div class="tweet">
				<?php
			      $tweet = getTweets( 1 );
			    ?>`
				<p><?php echo $tweet[0]['text']; ?></p>
			</div>
		</section>
		
		<section class="module snapwidget">
			<h1 class="currently instagram">Currently</h1>
			<!-- SnapWidget -->
			<iframe src="http://snapwidget.com/in/?u=YWxpbWF5ZXZlbnRzfGlufDgwfDN8M3xmZmZmZmZ8eWVzfDV8bm9uZXxvblN0YXJ0fG5v&v=3414" title="Instagram Widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:285px; height:285px"></iframe>
			<iframe src="http://widget.stagram.com/follow/alimayevents" style="height:27px;" frameborder="0"></iframe>
		</section>
		
		<section class="module">
			<h1 class="currently rss"><a href="<?php bloginfo('rss2_url'); ?>">Follow U</a>s</h1>
		</section>
		
		<section class="module favorites">
			<h1 class="alternate">Recent Favorites</h1>
			<ul>
		    <?php
				$featured_posts = get_posts( 'numberposts=6&category=8&orderby=rand' );
				foreach ($featured_posts as $post) :
					setup_postdata( $post );
			?>
		    <li>
		       <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		    </li>
		    <?php
				endforeach;
				wp_reset_postdata();
			?>
			</ul>
		</section>
		
		<section class="module elsewhere">
			<h1 class="alternate">Alimay Elsewhere</h1>
			<figure>
				<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/fpo/refinery29.png" width="288" height="149" alt="Alimay Elsewhere - Refinery 29">
			</figure>
			<p>Contributors on <a href="http://www.refinery29.com/author/alimay-events" title="">Refinery 29</a></p>
		</section>
		
		<section class="module blogroll">
			<h1 class="alternate">Sites We Love</h1>
			<ul>
				<?php
					$bookmarks = get_bookmarks( 'category=7' );
					foreach ( $bookmarks as $bookmark ) :
				?>
				<li><a href="<?php echo $bookmark->link_url; ?>"><?php echo $bookmark->link_name; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</section>
		
		<section class="module submissions">
			<h1 class="alternate">Submissions</h1>
			<p>
				Have an entertaining, venue, vendor or decor idea that seems like it would be up our alley? We&#x27;d love to hear more and possibly feature your idea on our blog! Please <a href="<?php echo get_permalink( 688 ); ?>">send us</a> information about your submission, a few images to give us the general idea, and let us know if it has been featured elsewhere. If we agree that it&#x27;s a good fit for our site, we will be in touch shortly. Thank you!
			</p>
		</section>
		
	</aside>