<?php if (have_posts()): ?>
<?php     get_header(); ?>
	<div id="content">
<?php     $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php     /* If this is a category archive */ if (is_category()) { ?>				
		<div id="secHeader" title="<?php ?>"><span></span><h2><?php echo single_cat_title(); ?> Archive</h2></div>
<?php     /* If this is a daily archive */ } elseif (is_day()) { ?>
		<div id="secHeader" title="<?php ?>"><span></span><h2><?php /* http://bugs.webadmin.ufl.edu/357 */ the_time(get_option('date_format')); ?> Archive</h2></div>
<?php     /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<div id="secHeader" title="<?php ?>"><span></span><h2><?php the_time('F Y'); ?> Archive</h2></div>
<?php     /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<div id="secHeader" title="<?php ?>"><span></span><h2> <?php the_time('Y'); ?> Archive</h2></div>
<?php     /* If this is a search */ } elseif (is_search()) { ?>
		<div id="secHeader" title="<?php ?>"><span></span><h2>Search Results</h2></div>
<?php     /* If this is an author archive */ } elseif (is_author()) { ?>
		<div id="secHeader" title="<?php ?>"><span></span><h2>Author Archive</h2></div>
<?php     /* If this is a paged archive */ } elseif (isset($_GET['paged']) && ! empty($_GET['paged'])) { ?>
		<div id="secHeader" title="<?php ?>"><span></span><h2>Archives</h2></div>
<?php     } ?>

<!--
<?php     $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php     /* If this is a category archive */ if (is_category()) { ?>				
		<h3  title="<?php ?>"><?php echo single_cat_title(); ?> Archive</h3>
<?php     /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h3  title="<?php ?>"><?php /* http://bugs.webadmin.ufl.edu/357 */ the_time(get_option('date_format')); ?> Archive</h3>
<?php     /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h3  title="<?php ?>"><?php the_time('F Y'); ?> Archive</h3>
<?php     /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h3  title="<?php ?>"> <?php the_time('Y'); ?> Archive</h3>
<?php     /* If this is a search */ } elseif (is_search()) { ?>
		<h3  title="<?php ?>">Search Results</h3>
<?php     /* If this is an author archive */ } elseif (is_author()) { ?>
		<h3  title="<?php ?>">Author Archive</h3>
<?php     /* If this is a paged archive */ } elseif (isset($_GET['paged']) && ! empty($_GET['paged'])) { ?>
		<h3  title="<?php ?>">Archives</h3>
<?php     } ?>
-->

		   <ul class="navigation">
		       <li class="alignleft"><?php next_posts_link('&laquo; Previous '); ?></li><li class="alignright"><?php previous_posts_link('Next  &raquo;'); ?></li>
		   </ul>


<?php     while (have_posts()): the_post(); ?>
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

	</div><!-- #content -->

<?php     get_sidebar(); ?>

<?php     get_footer(); ?>

<?php else: ?>
<?php     $wp_query->is_404 = true; ?>
<?php     include(TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?>
