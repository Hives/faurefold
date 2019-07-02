<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Faurefold
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="full-width">
            <div class="copyright">&copy; Girlguiding Surrey East</div>
            <div class="privacy-policy">Download our privacy policy: <a href="<?php echo get_stylesheet_directory_uri(); ?>/docs/faurefold-privacy-notice.pdf">faurefold-privacy-notice.pdf</a></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
