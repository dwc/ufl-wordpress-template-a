<?php if (have_posts()): ?>
<?php     get_header(); ?>

	<div id="content">
	        <div id="secHeader" title="Search Results"><span></span><h2>Search Results For '<?php the_search_query(); ?>'</h2></div>

		   <ul class="navigation">
		       <li class="alignleft"><?php next_posts_link('&laquo; Previous '); ?></li><li class="alignright"><?php previous_posts_link('Next  &raquo;'); ?></li>
		   </ul>

<?php     while (have_posts()): the_post(); ?>
		<div class="post">
			<h4><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>
			<div class="storycontent">
				<?php the_excerpt(); ?>
			</div>

		</div>
<?php     endwhile; ?>

		   <ul class="navigation">
		       <li class="alignleft"><?php next_posts_link('&laquo; Previous '); ?></li><li class="alignright"><?php previous_posts_link('Next  &raquo;'); ?></li>
		   </ul>

	</div><!-- #content -->

<?php     get_sidebar(); ?>

<?php     get_footer(); ?>

<?php else: ?>
<?php     $wp_query->is_404 = true; ?>
<?php     include(TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?>
