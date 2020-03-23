<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header section_title_container">
		<?php 
			$image_value = get_post_meta( get_the_ID(), 'second_featured_img', true ); 
			if($image_attributes = wp_get_attachment_image_src( $image_value, $image_size )){

				echo '<div class="section_image"><img src="' . $image_attributes[0] . '" /></div>';
			}
		?>
		<div class="section_title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
		<?php
 
		// Retrieves the stored value from the database
		$subtitulo_page = get_post_meta( get_the_ID(), 'meta-text', true );

		// Checks and displays the retrieved value
		if( !empty( $subtitulo_page ) ) {
			 echo '<div class="section_subtitle">' . $subtitulo_page . '</div>';
		}

		?>
	</header><!-- .entry-header -->

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content page-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
