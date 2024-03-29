<?php
/**
 * @package WordPress
 * @subpackage UF Template A
 */
?>

<?php if(have_posts()): ?>

<?php get_header(); ?>

	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<div id="secHeader" title="<?php echo the_title(); ?>"><span></span><h2><?php echo the_title(); ?></h2></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

	                        <p>Last updated <?php the_modified_date(); ?>.</p>
			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php else: ?>

<?php     $wp_query->is_404 = true; ?>
<?php     include(TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?>