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
			background-position: top!important;
			background-size: contain;
			top: 115px;
		}

		#wrapper{
			background-color: white!important;
		}

		#main
		{
			background-color: transparent!important;
			width:80%!important;
		}
		#main>.post {
			background-color: #fffffff5!important;
			/*padding:15px 2rem 0px 2rem!important;*/
			margin-bottom: 120px;

		}

		@media screen and (max-width: 620px) {
			#main
			{

				width:100%!important;
			}
			#main>.post
			{

				/*padding:15px 2rem 0px 2rem!important;*/


			}
		}

		.itemContainer
		{
			width: 33%;
			display: inline-block;
			align-items: center;
			background-color: white;
			border-radius: 15px;
			border: 1px solid green;
		}

		.itemContainer:first-child
		{
			margin-right: 33%;
		}

		@media screen and (max-width: 620px) {
			.itemContainer
			{
				width: 100%;
			}

			.itemContainer:first-child
			{
				margin-right: 0%;
			}

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

		#nav li.current_page_item a {
			color:#5eac24 !important;
		}

		a {
			/*color:#5eac24 !important;*/
		}

		.menu .current_page_item a{
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

		.background_fixed
		{
			/* background-color: #fff; */
			background-image: url(http://www.co2ok.eco/wp-content/themes/co2ok-site-wp-theme/images/CO2ok_cover.svg);
			background-size: contain, contain, contain;
			background-position: center, center, center;
			background-repeat: no-repeat, no-repeat, no-repeat;
			/* background-attachment: scroll, scroll, scroll; */
			z-index: -1;
			top: 0px;
			position: fixed;
			min-height: 1080px;
			width: 100%
		}

	</style>


	<div class="headlinks" id="nav">
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="120" />
		<?php wp_nav_menu();?>
	</div>

	<div class="background_fixed">
	</div>
