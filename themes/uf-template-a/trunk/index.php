<?php
/*
Template Name: Home Page
*/

$NUMBER_OF_POSTS = 5;
?>
<?php get_header(); ?>
	<div id="content">
<?php $my_query = new WP_Query("cat=20&showposts=$NUMBER_OF_POSTS"); ?>
<?php if ($my_query->have_posts()): ?>
<?php     $category_name = get_the_category_by_ID($my_query->get_queried_object_id()); ?>
				<h2 id="secHeader" title="<?php echo $category_name; ?>"><span></span><?php echo $category_name; ?></h2>
<?php     while ($my_query->have_posts()): $my_query->the_post(); ?>
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
