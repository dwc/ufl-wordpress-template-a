<?php if (have_posts()): ?>

<?php get_header(); ?>
	<div id="content">
</style>
            <div id="secHeader" title="News"><span></span><h2>News</h2></div>
<?php    while (have_posts()): the_post(); ?>
			<div class="post">
			<h3><?php the_title(); ?></h3>
			<div class="date">Filed under <?php the_category(', '); ?> on <?php /* http://bugs.webadmin.ufl.edu/357 */ the_time(get_option('date_format')); ?>. <?php edit_post_link('Edit this entry', '', '.'); ?></div>
			<?php the_content(); ?>
                        </div><!-- .post -->
<?php    endwhile; ?>

	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php else: ?>
<?php     $wp_query->is_404 = true; ?>
<?php     include(TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?>