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

	<style>
		#wrapper > .bg
		{
			background-position:top!important;
			background-size: contain;
			top: 115px;
		}

		#wrapper{
			background-color: white!important;
		}

		#main
		{
			background-color: transparent!important;
		}
		#main>.post {
			background-color: white!important;
			padding: 0px 4rem 0px 4rem!important;
			margin-bottom: 120px;
		}

		.itemContainer
		{
			width: 34%;
			display: inline-block;
			align-items: center;
			background-color: white;
			border-radius: 15px;
			border: 1px solid green;
		}

		.itemContainer p
		{
			padding:5px;
		}

		.itemContainer img
		{
			max-width: 220px;
			margin-left: auto!important;
			margin-right: auto!important;
		}

		#nav li.current-menu-item a {
			color:#5eac24 !important;
		}

		a {
			color:#5eac24 !important;
		}

		a:hover {
			text-decoration: underline;
		}

		#nav li a {
			color:black!important;
		}

		ul li
		{
			list-style: none!important;
		}

	</style>


	<div class="headlinks" id="nav">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" />" width="32" />
		<?php wp_nav_menu();?>
	</div>
