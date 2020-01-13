<?php
the_post();

get_header();
 ?>

<div id="content" class="content-area">
	<main role="main" id="main" class="site-main">
    <div class="container container-article">

      <?php get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>

    </div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
