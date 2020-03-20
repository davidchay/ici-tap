<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

$post_slug = ucwords(str_replace('-',' ',get_post_field( 'post_name' )));

$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'page-thumbnail'); 
if(!$featured_img_url){
 $featured_img_url = get_template_directory_uri() . "/img/blog.jpg";	
}
?>

<div class="home" >
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo $featured_img_url; ?>" data-speed="0.5"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="home_container">
					<div class="home_content d-flex flex-row align-items-center justify-content-start">
						<div class="home_title">
							<?php echo $post_slug; ?>
						</div>
						<div class="home_breadcrumbs ml-auto">
							<?php 
								if ( function_exists('yoast_breadcrumb') ) {
									yoast_breadcrumb('<p class="breadcrumbs">','</p>');
								} 
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
