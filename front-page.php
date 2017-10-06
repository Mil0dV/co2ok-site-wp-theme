<?php get_header(); ?>
<div id="intro">
	<p></p>
</div>
<!-- <nav id="nav">
       <ul class="links">
               <li class="active"><a href="index.html">This is Massively</a></li>
               <li><a href="generic.html">Generic Page</a></li>
               <li><a href="elements.html">Elements Reference</a></li>
       </ul>
       <ul class="icons">
               <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
               <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
               <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
               <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
       </ul>
</nav> -->

<div id="primary" class="site-content">
	<div id="content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-page-image">
					<?php the_post_thumbnail(); ?>
				</div><!-- .entry-page-image -->
			<?php endif; ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<div id="main">
	<article class="post featured">
		<header class="major">
			<p>Deze tekst gaat nog niet cursief worden<br />
			(oh en wat uitgebreider)<br />
			</p>
		</header>
		<a href="#" class="image main"><img src="images/CO2ok_cover.png" alt="" /></a>
		<ul class="actions">
			<li><a href="#" class="button big">Full Story</a></li>
		</ul>
	</article>
</div>
<?php get_footer(); ?>
