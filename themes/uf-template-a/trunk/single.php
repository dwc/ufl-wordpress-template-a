<?php get_header(); ?>
	<div id="content">
	   <?php //$news_category_id = get_cat_ID("News"); ?>
	   <?php // $my_query = new WP_Query("cat=20&showposts=$NUMBER_OF_POSTS"); ?>
<?php if (have_posts()): ?>
	   <?php //    $category_name = get_the_category_by_ID($my_query->get_queried_object_id()); ?>
	            <h2 id="secHeader" title="<?php echo $category_name; ?>"><span></span><?php echo $category_name; ?></h2>
<?php    while (have_posts()): the_post(); ?>
			<div class="post">
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
                        </div><!-- .post -->
<?php    endwhile; ?>

<?php else: ?>
<?php     $wp_query->is_404 = true; ?>
<?php     include(TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?>

	</div><!-- #content -->

<?php
						   /*
global $post;
$news_page = get_page_by_title("News");
$post = get_post($news_page->ID);
						   */
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
