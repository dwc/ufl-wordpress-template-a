<?php
$is_subscribe_home = (is_home());
$is_subscribe = (($is_subscribe_home or is_page('subscribe')) and class_exists('UfNewsEmailListPlugin'));
$is_email_friend = (is_single() and class_exists('UfNewsEmailFriendPlugin'));
?>
<?php if ($is_subscribe or $is_email_friend): ?>

	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/common.js"></script>
<?php     if ($is_subscribe_home): ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/cookies.js"></script>
<?php     endif; ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/tabs.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/xmlhttp.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/message-container.js"></script>
<?php     if ($is_subscribe): ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/subscribe.js"></script>
	<script type="text/javascript">
<?php         if ($is_subscribe_home): ?>
		addLoadEvent(initTabBehavior);
<?php         endif; ?>
		addLoadEvent(initFormBehavior);
	</script>
<?php     elseif ($is_email_friend): ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/email-friend.js"></script>
<?php         if (uf_news_email_friend_is_email_request()): ?>
	<script type="text/javascript">
		addLoadEvent(initFormBehavior);
	</script>
<?php         endif; ?>
<?php     endif; ?>
<?php endif; ?>
