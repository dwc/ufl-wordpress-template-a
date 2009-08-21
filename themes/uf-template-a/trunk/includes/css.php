	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/print.css" media="print" />
	<style type="text/css" media="screen">
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/basic.css);
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/style.css);
<?php if (class_exists('UfCaategoryImagePlugin')): ?>
                #secHeader span{background: url(<?php echo uf_category_image_url(); ?>)}
<?php elseif (is_404()): ?>
                #secHeader span{background: url(<?php bloginfo('template_directory') ?>/images/404.jpg)}
<?php else: ?>
                #secHeader span{background: url(<?php bloginfo('template_directory') ?>/images/header1.jpg)}
/*
                #secHeader span{z-index: -1;}
                #secHeader {
                    color:#fff;
                }
*/
<?php endif; ?>
<?php if (is_home()): ?>
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/home.css);
<?php else: ?>
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/subpage.css);
<?php     if (! is_404()): ?>
<?php         if (is_attachment() or (function_exists('uf_news_snapshots_is_snapshot') and uf_news_snapshots_is_snapshot())): ?>
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/gallery.css);
<?php         elseif (is_single() or is_page()): ?>
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/single.css);
<?php         elseif (is_archive()): ?>
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/archive.css);
<?php         elseif (is_search()): ?>
		@import url(<?php bloginfo('stylesheet_directory'); ?>/css/search.css);
<?php         endif; ?>
<?php     endif; ?>
<?php endif; ?>
<?php echo htmlspecialchars(apply_filters('header_style', '')); ?>
	</style>
