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
			<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
				<div>
					<h2 class="mb-2 font-bold">Weitere Links</h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-primary-menu',
						)
					);
					?>
				</div>
				<div>
					<h2 class="mb-2 font-bold">Soziale Medien</h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'footer-social-menu',
						)
					);
					?>
				</div>
				<div>
					<h2 class="mb-2 font-bold">Rechtliches</h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-4',
							'menu_id'        => 'footer-legal-menu',
						)
					);
					?>
				</div>
			</div>

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
