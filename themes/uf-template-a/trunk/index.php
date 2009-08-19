<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
	<div id="content">
<?php if (have_posts()): ?>
                        <h2 id="secHeader" title="<?php echo bloginfo('title'); ?>"><span></span><?php echo bloginfo('title'); ?></h2>
<?php     while(have_posts()): the_post(); ?>
			<div class="post">
				<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="storycontent">
                                <p><span class="date"><?php the_time('M'); ?> <span class="day"><?php the_time('d'); ?> </span></span></p>
				<?php the_excerpt(); ?>
				</div>
			</div>
<?php     endwhile; ?>
<?php endif; ?>
	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
