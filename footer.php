<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Masks
 */

?>

	<footer id="colophon" class="site-footer bg-gray-700 text-white mt-12">
		<div class="site-info containerNormal">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'masks' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'masks' ), 'WordPress' );
				?>
			</a> -->
			<!-- <span class="sep"> | </span> -->
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Programmiert von %1$s.', 'masks' ), '<a href="https://maximmaeder.com/" class="hover:underline">Maxim Mäder</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
