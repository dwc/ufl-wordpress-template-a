<?php
/*
Template Name: News
*/

$NEWS_PAGE_ID = $post->ID;
?>
<?php get_header(); ?>
	<div id="content">

<?php $my_query = new WP_Query("cat_id=*"); ?>

<?php if ($my_query->have_posts()): ?>
                        <div id="secHeader" title="News"><span></span><h2>News</h2></div>

		   <ul class="navigation">
		       <li class="alignleft"><?php next_posts_link('&laquo; Previous '); ?></li><li class="alignright"><?php previous_posts_link('Next  &raquo;'); ?></li>
		   </ul>

<?php     while ($my_query->have_posts()): $my_query->the_post(); ?>
			<div class="post">
				<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="storycontent">
				<?php the_excerpt(); ?>
				<div class="date">Filed under <?php the_category(', '); ?> on <?php /* http://bugs.webadmin.ufl.edu/357 */ the_time(get_option('date_format')); ?>. <?php edit_post_link('Edit this entry', '', '.'); ?></div>
				</div>
			</div>
<?php     endwhile; ?>

		   <ul class="navigation">
		       <li class="alignleft"><?php next_posts_link('&laquo; Previous '); ?></li><li class="alignright"><?php previous_posts_link('Next  &raquo;'); ?></li>
		   </ul>

<?php else: ?>
				<h2 id="secHeader" title="News"><span></span>News</h2>
                                <h3>No News</h3>
                                <p>We're sorry. We don't have any news yet.</p>
<?php endif; ?>
	</div><!-- #content -->

<?php $my_query = new WP_Query("page_id=" . $NEWS_PAGE_ID); ?>
<?php if ($my_query->have_posts()): ?>
<?php     while($my_query->have_posts()): $my_query->the_post(); ?>
<?php     endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
