<?php
/**
 * Template Name: Archives
 */
?>

<?php get_header(); ?>
	<div id="primary">	
		<section class="archives">
			<h2>The Archives <span>for</span></h2>
		<?php
			$year_prev = null;
			$months = $wpdb->get_results(	"SELECT DISTINCT MONTH( post_date ) AS month ,
											YEAR( post_date ) AS year,
											COUNT( id ) as post_count FROM $wpdb->posts
											WHERE post_status = 'publish' and post_date <= now( )
											and post_type = 'post'
											GROUP BY month , year
											ORDER BY post_date DESC");
		foreach($months as $month) :
			$year_current = $month->year;
			if ($year_current != $year_prev){
				if ($year_prev != null){?>
				</ul>
				<?php } ?>
			<h3><?php echo $month->year; ?></h3>
			<ul class="archive-list">
			<?php } ?>
			<li>
				<a href="<?php bloginfo('url') ?>/blog/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><?php echo date("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?> <?php echo $month->year; ?></a>
			</li>
		<?php $year_prev = $year_current;
		endforeach; ?>
		</ul>
		</section>
	</div>
	<?php get_sidebar(); ?> 
<?php get_footer(); ?>