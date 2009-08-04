<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); wp_title('-'); ?></title>

	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS 0.92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<meta name="verify-v1" content="deypR2IHzcQOXxyDKP/hMT/jZgFj3gXaTXG8vwJvu+s=" />

<?php include(TEMPLATEPATH . '/includes/css.php'); ?>
<?php include(TEMPLATEPATH . '/includes/javascript.php'); ?>
<?php wp_head(); ?>
</head>

<body>

<div id="header">
	<h1 class="replace" id="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?><span></span></a></h1>
<?php include(TEMPLATEPATH . '/includes/search.php'); ?>
</div><!-- #header -->

<div id="mainContainer">
