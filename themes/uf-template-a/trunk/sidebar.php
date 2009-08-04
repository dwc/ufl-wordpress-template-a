    <div id="sidebar">
<?php if (is_home()): ?>
<?php     /* Homepage sidebar */ ?>

<!-- include related and priNav sections... -->
    <div id="related">
        <h3>Related Sites:</h3>
	    <h4>Page Related Header</h4>
	        <ul>
		    <li><a href="#">Link</a>,</li>
		    <li><a href="#">Link</a>,</li>
		    <li><a href="#">Link</a>,</li>
		    <li><a href="#">Link</a>,</li>
		</ul>
           <h4>Page Related Header</h4>
	        <ul>
		    <li><a href="#">Link</a>,</li>
		    <li><a href="#">Link</a>,</li>
		    <li><a href="#">Link</a>,</li>
		    <li><a href="#">Link</a>,</li>
		</ul>
    </div>
    <div id="priNav">
        <h2>Primary Navigation</h2>
            <ul>
<?php     wp_list_categories('title_li=&exclude=1&number=5'); ?>
		<li><a href="">View remaining navigation...?</a></li>
<!--
		<li><a href="">Primary Nav 1</a></li>
		<li id="active">Primary Nav 2</li>
		<li><a href="">Primary Nav 3</a></li>
		<li><a href="">Primary Nav 4</a></li>
		<li><a href="">Primary Nav 5</a></li>
		<li><a href="">Primary Nav 6</a></li>
-->
            </ul>
    </div>

<?php     /* End navigation */ ?>

<?php     /* Op-Eds */ ?>
	 <?php     /* news_sidebar_category_list(35, 1, 'op-ed-service', "Learn about UF's op-ed service"); */ ?>
<?php     /* End op-eds */ ?>

<?php     /* Events */ ?>
<?php     if (is_callable(array('UfUrlCachePlugin', 'cache_url'))): ?>
<?php         if ($output = UfUrlCachePlugin::cache_url('http://www.ufl.edu/calendar/news/ufCalendar.html')): ?>
		<div id="upcomingEvents">
			<h2><a href="http://calendar.ufl.edu/"><?php _e('Upcoming Events'); ?></a></h2>
			<ul>
<?php             echo $output; ?>
			</ul>
		</div>
<?php         endif; ?>
<?php     endif; ?>
<?php     /* End events */ ?>

<?php     /* Weather */ ?>
<?php     if (is_callable(array('UfUrlCachePlugin', 'cache_url'))): ?>
<?php         $output = UfUrlCachePlugin::cache_url('http://www.ufl.edu/weather/news/current.html'); ?>
<?php         if ($output and strpos($output, 'Missing') === false): ?>
		<div id="weather">
			<h2><a href="http://www.ufl.edu/weather/"><?php _e('Gainesville Weather'); ?></a></h2>
			<ul>
<?php             echo $output; ?>
			</ul>
		</div>
<?php         endif; ?>
<?php     endif; ?>
<?php     /* End weather */ ?>

<?php     /* Subscribe */ ?>
<?php     if (class_exists('UfNewsEmailListPlugin')): ?>
<?php         include(TEMPLATEPATH . '/includes/subscribe-sidebar.php'); ?>
<?php     endif; ?>
<?php     /* End subscribe */ ?>

<?php     /* End homepage sidebar */ ?>
<?php else: ?>
<?php     /* Subpage sidebar */ ?>

<?php     if (is_single() and ! is_404()): ?>
<?php         /* AddThis bookmark link */ ?>
		<script type="text/javascript">var addthis_pub = 'ufnews'; addthis_options = 'favorites, digg, delicious, myspace, facebook, google, live, more';</script>
		<p><a href="http://www.addthis.com/bookmark.php" onmouseover="return addthis_open(this, '', '<?php the_permalink(); ?>', '<?php the_title(); ?>')" onmouseout="addthis_close()" onclick="return addthis_sendto()" id="addthis-link">Bookmark this story</a></p>
		<script type="text/javascript" src="http://s7.addthis.com/js/152/addthis_widget.js"></script>
<?php         /* End AddThis bookmark link */ ?>
<?php     endif; ?>

<?php     if (is_single() and ! is_404() and function_exists('uf_news_email_friend_get_url')): ?>
<?php         /* Email to a friend */ ?>
		<p><a href="<?php echo htmlspecialchars(uf_news_email_friend_get_url($post->ID)); ?>" id="email-friend-link" rel="nofollow"><?php _e('Email to a friend'); ?></a></p>
<?php         if (uf_news_email_friend_is_email_request()): ?>
<?php             include(TEMPLATEPATH . '/includes/email-friend.php'); ?>
<?php         endif; ?>
<?php         /* End email to a friend */ ?>
<?php     endif; ?>

<?php     if (is_single()): ?>
<?php         /* Post images */ ?>
<?php         if ($attachments = news_get_attachments($post->ID)): ?>
		<div id="postimages">
			<h3>Related Images</h3>
			<ul>
<?php             foreach ($attachments as $attachment): ?>
				<li><?php news_link_attachment($attachment, 'uf_news_post_images_sidebar_thumbnail'); ?></li>
<?php             endforeach; ?>
			</ul>
		</div>
<?php         endif; ?>
<?php         /* End post images */ ?>
<?php     endif; ?>

<?php     /* Category archives */ ?>
		<div class="archives">
			<h2><?php _e('Archives by Category'); ?></h2>
			<ul>
<?php     wp_list_categories('title_li='); ?>
			</ul>
		</div>
<?php     /* End category archives */ ?>


<?php     /* Date archives */ ?>
<?php     if (function_exists('uf_archives_display_date_archives')): ?>
		<div class="archives">
			<h2><?php _e('Archives by Date'); ?></h2>
			<ul>
<?php         uf_archives_display_date_archives(); ?>
			</ul>
		</div>
<?php     endif; ?>
<?php     /* End date archives */ ?>

<?php     /* End subpage sidebar */ ?>
<?php endif; ?>

	</div><!-- #sidebar -->
