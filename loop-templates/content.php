<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('blog_post'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">
		<?php 
		if ( has_post_thumbnail() ) : 	?>
			<div class="blog_image">
				<?php echo get_the_post_thumbnail( $post->ID ,'post-thumbnail'  ); ?>
				<div class="news_date d-flex flex-column align-items-center justify-content-center">
					<div class="news_day"><?php echo get_the_date(d) ?></div>
					<div class="news_month"><?php echo get_the_date("M, Y");?></div>
				</div>
			</div>
		<?php	
		endif;
				
			?>
		<?php
		the_title(
			sprintf( '<h2 class="entry-title blog_title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="blog_meta entry-meta">
				<ul>
					<li>					
						<span class="byline"> Por <span class="author vcard"> 
							<a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ; ?>">
								<?php echo get_the_author() ; ?>
							</a>
						</span>	</span>
					</li>
					<li>
						En 
						<?php
						echo get_the_category_list( esc_html__( ', '));
						?>
					</li>
					<?php if ( !has_post_thumbnail() ) : 	?>
					<li>El <span class="posted-on"> <?php echo get_the_date();?></span></li>
					<?php endif; ?>
					<?php
						if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) :?>
						<li>
						<span class="comments-link">
							<?php
							comments_popup_link( esc_html__( 'Deja un comentario', 'understrap' ), esc_html__( '1 Comentario', 'understrap' ), esc_html__( '% Commentarios', 'understrap' ) );
							?>
						</span>
						</li>
					<?php 
					endif;
					?>
					
				</ul>
			</div>
			<!-- <div class="entry-meta"> -->
				<?php //understrap_posted_on(); ?>
			<!-- </div> -->
			<!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<div class="blog_text">				
		<?php the_excerpt(); ?>
		</div>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer"> -->

		<?php //understrap_entry_footer(); ?>

	<!-- </footer> -->
	<!-- .entry-footer -->

</article><!-- #post-## -->
