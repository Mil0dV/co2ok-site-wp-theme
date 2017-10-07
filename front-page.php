<?php get_header(); ?>
<div id="intro">
</div>

<div id="main">
	<article class="post featured">
		<?php while ( have_posts() ) : the_post();
			the_content();
			endwhile;
		?>
		<ul class="actions">
			<li><a href="#" class="button big">Full Story</a></li>
		</ul>
	</article>
</div>
<?php get_footer(); ?>
