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
			<!-- TODO: Register navigation through WordPress -->
			<div class="headlinks" id="myheadlinks">
				<ul>
					<a href="#">General info 1</a>
					<a href="#">General info 2</a>
					<a href="#">General info 3</a>
				</ul> 
			</div>
			<header id="header">
				<a href="<?php echo home_url(); ?>" class="logo"><?php bloginfo('name'); ?></a>
			</header>