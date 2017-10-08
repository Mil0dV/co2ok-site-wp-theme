<?php get_header(); ?>



<div id="intro">

	<div id="container">

		<div class="itemContainer" style="margin-right: 30%;">
			<img class="alignleft image fit wp-image-51" src="http://www.co2ok.eco/wp-content/uploads/2017/10/CO2ok-knop.png" alt="" width="200" height="120" />
			<span style="font-weight: 400;color:black;">Verminder je klimaatimpact door de checkbox aan te vinken terwijl je shopt bij onze partners.</span>
		</div>

		<div class="itemContainer">
			<img class="alignright image fit wp-image-50" style="margin-left: 15%;" src="http://www.co2ok.eco/wp-content/uploads/2017/10/zon-en-wind-300x180.png" alt="" width="200" height="120" />
			<span style="font-weight: 400;color:black;">Met uw compensatie worden duurzame energie en CO₂-uitstoot verminderende projecten gefinancierd.</span>
		</div>

	</div>
</div>

<div id="main">

	<article class="post featured">
		<?php while ( have_posts() ) : the_post();
			the_content();
		endwhile;
		?>
		<!-- <ul class="actions">
			<li><a href="#" class="button big">Full Story</a></li>
		</ul> -->
	</article>
</div>
<?php get_footer(); ?>
