<?php
/*
Template Name: News
*/

$NEWS_PAGE_ID = $post->ID;
?>
<?php get_header(); ?>
	<div id="content">
<?php $news_category_id = get_cat_ID("About CLAS"); ?>

<?php $my_query = new WP_Query("cat_id=*"); ?>
<?php if ($my_query->have_posts()): ?>
                        <h2 id="secHeader" title="News"><span></span>News</h2>
  <?php echo $news_category_id; ?>
<?php     while ($my_query->have_posts()): $my_query->the_post(); ?>
			<div class="post">
				<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="storycontent">
                                <p><span class="date"><?php the_time('M'); ?> <span class="day"><?php the_time('d'); ?> </span></span></p>
				<?php the_excerpt(); ?>
				</div>
			</div>
<?php     endwhile; ?>
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
