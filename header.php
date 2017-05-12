<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<link rel="shortcut icon" href="/favicon.ico">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <script type="text/javascript" src="<?php echo bloginfo('template_directory'); ?>/js/slider.js"></script>

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<section class="page-wrap">
	<header>
        <a href="<?php get_option('home'); ?>" id="logo"></a>
        <nav>
            <a href="#" id="nav_menu"></a>
            <?php wp_nav_menu(array('menu'=> 'Menu Chinh')); ?>
        </nav>

        <div class="slider">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/slider1.jpg" class="slider-image" />
            <img src="<?php echo bloginfo('template_directory'); ?>/images/slider2.jpg" class="slider-image" />
            <img src="<?php echo bloginfo('template_directory'); ?>/images/slider3.jpg" class="slider-image">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/slider4.jpg" class="slider-image">
            <img src="<?php echo bloginfo('template_directory'); ?>/images/slider5.jpg" class="slider-image">
        </div>
        <div class="slider-nav">
            <div class="slider-nav-item"></div>
            <div class="slider-nav-item"></div>
            <div class="slider-nav-item"></div>
            <div class="slider-nav-item"></div>
            <div class="slider-nav-item"></div>
        </div>
    </header>
<!-- end header-->
