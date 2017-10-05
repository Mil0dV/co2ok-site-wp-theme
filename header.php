<!doctype html>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<?php wp_head(); ?>
	</head>
	<body class="<?php body_class(); ?> is-loading">
		<div id="wrapper" class="fade-in">
			<div class="headlinks" id="myheadlinks">
				<?php wp_nav_menu();?>
			</div>
			<div class="headlinks" id="nav">
				<?php wp_nav_menu();?>
			</div>
