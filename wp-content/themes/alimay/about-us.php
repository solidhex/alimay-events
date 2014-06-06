<?php
/**
 * Template Name: About Us
 */
?>

<?php
	get_header();
?>


<section class="about we-are">
	<h1><span>we are</span> alimay events</h1>
	<div class="intro">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/we-are.png" width="429" height="510" alt="We Are">
</section>

<section class="about alison">
	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/ali-headshot.png" width="309" height="398" alt="Ali Headshot">
	<article>
		<?php the_block('ali'); ?>
	</article>
</section>

<section class="about maya">
	<article>
		<?php the_block( 'maya' ); ?>
	</article>
	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/maya-headshot.png" width="300" height="394" alt="Maya Headshot">
</section>

<?php
	$args = array(
		'sort_column' => 'menu_order',
		'child_of' => 567
	);
	
	$bios = get_pages( $args );
	
	if ( $bios ) :
?>

<section class="about team">
	<h1>meet our team</h1>
	<ul>
	<?php
		foreach( $bios as $bio ) :
	?>
		<li>
			<figure>
				<?php echo get_the_post_thumbnail( $bio->ID, "full" ); ?> 
			</figure>
			<article>
				<h2 class="name"><?php echo $bio->post_title; ?></h2>
				<h3 class="title"><?php echo get_post_meta( $bio->ID, 'title', TRUE ); ?></h3>
				<p><?php echo $bio->post_content; ?></p>
			</article>
		</li>
	<?php endforeach; ?>
	</ul>
</section>

<?php endif; ?>

<section class="about mayaandali">
	<h1><span>stylish. expert. fun.</span> your event concierge</h1>
	<figure><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/mayandali.png" width="600" height="399" alt="Maya and Ali"></figure>
</section>

<?php
	get_footer();
?>