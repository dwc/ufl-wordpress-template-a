<?php if (have_posts()): ?>

<?php get_header(); ?>
	<div id="content">
	   <h2 id="secHeader" title="What should go here?"><span></span>What should go here? Category title?</h2>
<?php    while (have_posts()): the_post(); ?>
			<div class="post">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
                        </div><!-- .post -->
<?php    endwhile; ?>

	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php else: ?>
<?php     $wp_query->is_404 = true; ?>
<?php     include(TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?><!-- #single -->