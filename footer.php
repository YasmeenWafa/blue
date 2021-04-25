<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

$lang = ICL_LANGUAGE_CODE;


?>

<footer class="footer-container">
	<div class="footer-grid">
		<div class="footer-upper">		
			<div class="footer-start-upper">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/header-logo.png" alt="">
				</a>
			</div>
			<div class="footer-center-upper">
					
				<?php 
						wp_nav_menu( array( 
						'theme_location' => 'footer-menu' ,
						'menu_class'     => 'vertical menu accordion-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-multi-open="true" data-submenu-toggle>%3$s</ul>'
					));
					
						dynamic_sidebar( 'footer-widgets' );
				?>
			</div>
			<div class="footer-end-upper">
				<div class="slogan">
					<h2><?php _e("Start Your Dream", "homepage")?></h2>
					<a class="cta-button" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><span><?php _e('Contact Us', 'homepage')?></span></a>
				</div>
			</div>
		</div>
		<div class="footer-lower">
				<div class="footer-start-lower">
					<div class="social-media">
						<a href="<?php the_field('facebook_link', 10)?>" target="_blank"><i class="icon-facebook"></i></a>
						<a href="<?php the_field('instagram_link', 10)?>" target="_blank"><i class="icon-instagram"></i></a>
						<a href="<?php the_field('youtube_link', 10)?>" target="_blank"><i class="icon-youtube-play"></i></a>
					</div>
				</div>
				<div class="footer-center-lower">
					<?php if($lang == "ar"):?>
						<p class="copyright">بلو <?php echo date("Y"); ?>. جميع الحقوق محفوظة</p>
					<?php else:?>
						<p class="copyright">Blue <?php echo date("Y"); ?>. All rights reserved</p>
					<?php endif;?>
				</div>
				<div class="footer-end-lower">
					<div class="partners">
						<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/partner1.png" alt=""></a>
						<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/partner2.png" alt=""></a>
					</div>		
				</div>
		</div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri();?>/src/assets/js/fancybox/jquery.fancybox.min.js"></script>

</body>
</html>
