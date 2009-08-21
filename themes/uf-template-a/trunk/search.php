<?php if (have_posts()): ?>
<?php     get_header(); ?>

	<div id="content">
	        <h2 id="secHeader" title="Search Results"><span></span>Search Results</h2>
		<h3>Search Results For '<?php the_search_query(); ?>'</h3>

		<div class="navigation">
			<p><?php next_posts_link('&laquo; Previous Entries'); ?><br />
			   <?php previous_posts_link('Next Entries &raquo;'); ?></p>
		</div>

<?php     while (have_posts()): the_post(); ?>
		<div class="post">
			<h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
			<div class="storycontent">
				<?php the_excerpt(); ?>

<?php         include('includes/related.php'); ?>
				<p class="date">Filed under <?php the_category(', '); ?> on <?php /* http://bugs.webadmin.ufl.edu/357 */ the_time(get_option('date_format')); ?>. <?php edit_post_link('Edit this entry', '', '.'); ?></p>
			</div>
		</div>
<?php     endwhile; ?>

		<div class="navigation">
			<p><?php next_posts_link('&laquo; Previous Entries'); ?><br />
			   <?php previous_posts_link('Next Entries &raquo;'); ?></p>
		</div>

	</div><!-- #content -->

<?php     get_sidebar(); ?>

<?php     get_footer(); ?>

<?php else: ?>
<?php     $wp_query->is_404 = true; ?>
<?php     include(TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?>
