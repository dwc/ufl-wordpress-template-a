<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
	<div id="content">
<?php if (have_posts()): ?>
                        <div id="secHeader" title="<?php echo bloginfo('title'); ?>"><span></span><h2><?php echo bloginfo('title'); ?></h2></div>
<?php     while(have_posts()): the_post(); ?>
			<div class="post">
				<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="storycontent">
				<?php the_excerpt(); ?>
				<div class="date">Filed under <?php the_category(', '); ?> on <?php /* http://bugs.webadmin.ufl.edu/357 */ the_time(get_option('date_format')); ?>. <?php edit_post_link('Edit this entry', '', '.'); ?></div>
				</div>
			</div>
<?php     endwhile; ?>
<?php endif; ?>
	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
