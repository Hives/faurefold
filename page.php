<?php
/**
 * The template for displaying pages without the sidebar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * I made this by copying the default page template and
 * removing the get_sidebar() function call. I renamed the
 * default page to page-with-sidebar.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Faurefold
 */

get_header(); ?>

	<div id="primary" class="content-area no-sidebar">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
