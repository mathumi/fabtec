<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
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
			<div class="footer-section">
			<div class="container-fluid padding_h15">
				<div class="row">
				<div class="col-md-3">
				<p><?php twentysixteen_the_custom_logo(); ?></p>
					<?php dynamic_sidebar("sidebar-2") ?>
					<p class="foo_address"><?php echo (get_theme_mod( 'address' )!='')?get_theme_mod( 'address' ):''; ?></p>
					<p>Tel/Fax : <?php echo (get_theme_mod( 'phone' )!='')?"<a href='tel:+6567342823'>".get_theme_mod( 'phone' )."</a>":''; ?></p>
				</div>
				<div class="col-sm-6 col-md-3 quick_link">
					<?php dynamic_sidebar("sidebar-3") ?>
				</div>					
				<div class="col-sm-6 col-md-3 quick_link">
					<?php dynamic_sidebar("sidebar-4") ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar("sidebar-5") ?>
				</div>
				</div>
			</div>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js" /></script>
<?php wp_footer(); ?>
</body>
</html>
