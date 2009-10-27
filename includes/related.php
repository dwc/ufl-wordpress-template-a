<?php if (function_exists('uf_news_related_posts_get_related_posts')): ?>
<?php     if ($related_posts = uf_news_related_posts_get_related_posts($post->ID)): ?>
				<h4>Related Posts</h4>
				<ul id="relatedposts">
<?php         foreach ($related_posts as $related_post): ?>
<?php             $classes = news_get_category_classes($related_post->ID); ?>
					<li class="<?php echo htmlspecialchars(join(' ', $classes)); ?>"><a href="<?php echo htmlspecialchars(post_permalink($related_post->ID)); ?>"><?php echo get_the_title($related_post->ID); ?></a></li>
<?php         endforeach; ?>
				</ul><!-- #relatedposts -->
<?php     endif; ?>
<?php endif; ?>
