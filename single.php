<?php
/**
 * The template for displaying all single posts
 *
 *
 * @Date:   2019-10-15 12:30:02
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-10-15 14:35:33
 * @package air-light
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */

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
