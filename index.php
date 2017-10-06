<?php get_header();?>

<main id="content" class="site-content hfeed" role="main">

<!-- Alle methodes hieronder werken niet :/ -->

<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_template_part( 'content', 'page' ); ?><!-- #page_content -->

<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

  <?php endif; // end have_posts() check ?>

	<?php
	get_template_part( 'loop-meta' );
	get_template_part( 'loop' );
	get_template_part( 'loop-nav' );
	?><!-- #loop_content -->

</main><!-- #content -->

<?php get_footer();?>
