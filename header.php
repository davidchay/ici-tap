<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site super_container" id="page">
<!--**** header ***-->
<header class="header"> 
	<!-- Top Bar -->
	<div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col top_bar_content d-flex flex-row align-items-center justify-content-start">
					<div class="info">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span> 18 Poniente No. 9, Col. San sebastián, Tapachula, Chiapas.</span>
					</div>
					<div class="ml-auto mr-3 info">
						<i class="fa fa-phone-square" aria-hidden="true"></i>
						<span>962 625 2528</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Header Content -->

	<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">

							<!-- Logo -->
							<div class="logo_container">
								<div class="logo">
										<!-- Your site title as branding in the menu -->
										<?php if ( ! has_custom_logo() ) { ?>

											<?php if ( is_front_page() && is_home() ) : ?>

												<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

											<?php else : ?>

												<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

											<?php endif; ?>

										<?php } else {
											the_custom_logo();
										} ?><!-- end custom logo -->
								</div>
							</div>

							<!-- Navigation and Search -->
							<div class="header_nav_container ml-auto">
									<!-- The WordPress Menu goes here -->
									<?php wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container'		  => 'nav',
											'container_class' => 'main_nav',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'ml-auto',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'depth'           => 2,
											'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
										)
									); ?>
								
								<div class="search">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="13px" height="14px">
										<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
									</svg>
								</div>
							</div>
							
							<!-- Hamburger -->
							<div class="hamburger ml-auto">
								<!-- <i class="fa fa-bars" aria-hidden="true"></i>  -->
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABmJLR0QA/wD/AP+gvaeTAAAALElEQVRIiWNgGAWDHTAyMDD8p4dFTPSwZBSMgoEBo/loFIwCysFoPhoF9AcAWbMDB4C5ovcAAAAASUVORK5CYII="/>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="header_search_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
								<form role="search" method="get" class="header_search_form" action="<?php echo home_url( '/' ); ?>">
									<input type="search" class="search_input" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Burcar:', 'label' ) ?>"  required="required"/>	
									<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
											<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
										</svg>
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>			
			</div>

	</div>
	<?php 
	/*
	
		<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>

					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' === $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
	
	*/
	 ?>

</header>

<!--**** header ***-->

<!-- Menu -->

<div class="menu d-flex flex-column align-items-center justify-content-center">
		<div class="menu_content">
			<div class="cross_1 d-flex flex-column align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="">
			</div>
			

			<form role="search" method="get" class="menu_search_form" action="<?php echo home_url( '/' ); ?>">
			<input type="search" class="menu_search_input" placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Burcar:', 'label' ) ?>" />	
				<button type="submit" class="menu_search_button d-flex flex-column align-items-center justify-content-center">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="20px" height="20px">
					<path class="search_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" fill="#353535"/>
				</svg>
			</button>
			</form>
			<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
						'container'		  => 'nav',
						'container_class' => 'menu_nav navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu-responsive',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),

					
				)
			); ?>
		</div>
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
	</div>
