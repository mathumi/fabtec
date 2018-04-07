<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner-page">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>
		<?php if(get_theme_mod( 'address' ) || get_theme_mod( 'phone' ) || get_theme_mod( 'email' ) || get_theme_mod( 'youtube' ) || get_theme_mod( 'googleplus' ) || get_theme_mod( 'facebook' )){ ?>
		<!-- short header -->
		<section>
		<div class="container-fluid">
		<div class="contact_header row text-left padding_h15">
			<div class="col-sm-6">
			<ul class="list-inline">
				<?php echo (get_theme_mod( 'address' )!='')?"<li><a href='javascript:void(0);' class='cursor_default'><i class='fa fa-map-marker'></i>&nbsp;".get_theme_mod( 'address' )."</a></li>":''; ?>
				<?php echo (get_theme_mod( 'phone' )!='')?"<li><a href='tel:+6567342823'><i class='fa fa-phone'></i>".get_theme_mod( 'phone' )."</a></li>":''; ?>
				<?php echo (get_theme_mod( 'email' )!='')?"<li><a href='mailto:info@fabtec.com.sg'><i class='fa fa-envelope'></i>".get_theme_mod( 'email' )."</a></li>":''; ?>
				</ul>
			</div>

			<div class="col-sm-6 text-right">
			<ul class="list-inline social_media_head">
			<?php echo (get_theme_mod( 'youtube' )!='')?"<li><a href='".get_theme_mod( 'youtube' )."'><i class='fa fa-youtube'></i></a></li>":''; ?>
			<?php echo (get_theme_mod( 'googleplus' )!='')?"<li><a href='".get_theme_mod( 'googleplus' )."'><i class='fa fa-google-plus'></i></a></li>":''; ?>
			<?php echo (get_theme_mod( 'facebook' )!='')?"<li><a href='".get_theme_mod( 'facebook' )."'><i class='fa fa-facebook'></i></a></li>":''; ?>
			</ul>
			</div>
			</div>
		</div>
</section>
			<?php } ?>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
