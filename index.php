<?php get_header();?>

<div id="main">
	<article class="post featured">

      <?php while ( have_posts() ) : the_post();
        the_content();
        endwhile;
      ?>
  </article>
</div>

<?php get_footer();?>
