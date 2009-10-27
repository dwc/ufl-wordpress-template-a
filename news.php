<?php
/*
Template Name: News
*/
?>
<?php get_header(); ?>
	<div id="content">

<?php $news_category_id = get_cat_id('News'); ?>
<?php $my_query = new WP_Query("cat_id=" . $news_category_id); ?>

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
				<div class="date">Filed under <?php the_category(', '); ?> on <?php /* http://codex.wordpress.org/Template_Tags/the_date */ the_time(get_option('date_format')); ?>. <?php edit_post_link('Edit this entry', '', '.'); ?></div>
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
<?php wp_reset_query(); ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
