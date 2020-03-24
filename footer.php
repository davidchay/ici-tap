<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer footer-copy" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php //understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

		<!-- Copyright -->
		<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		Copyright &copy; <?php date(Y); ?> Todos los derechos reservados. <?php echo get_bloginfo( 'name' ) ?> | Este sitio fue creado con <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://codipix.com" targer="_blank">codipix</a>
		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div><!-- /copyright -->
</footer><!-- #page we need this extra closing tag here -->
	
</div><!-- wrapper end -->


<?php wp_footer(); ?>

</body>

</html>

