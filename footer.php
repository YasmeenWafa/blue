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
		<div class="footer-start">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/footer-logo.png" alt=""></a>
		</div>
		<div class="footer-end">
			<div class="footer-end-upper">
				<div class="slogan">
					<h2><?php _e("Start Your Dream", "homepage")?></h2>
					<a class="cta-button" href="#"><?php _e('Contact Us', 'homepage')?></a>
				</div>
				<?php //if(wp_is_mobile(  )){
						wp_nav_menu( array( 
						'theme_location' => 'footer-menu' ,
						'menu_class'     => 'vertical menu accordion-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-multi-open="false" data-submenu-toggle>%3$s</ul>'
					));
					// }else{
						dynamic_sidebar( 'footer-widgets' );
					// }?>

				<!-- <div class="contact-info">
					<p class="contact-title"><?php _e('Contacts',"homepage")?></p>
					<p>
						<?php if($lang == 'ar'):?>
							<a href="<?php the_field("address_maps_link", 110)?>"><?php the_field('address', 110)?></a>
							<?php else: ?>
						<a href="<?php the_field("address_maps_link", 10)?>"><?php the_field('address', 10)?></a>
						<?php endif;?>
					</p>
					<p>
					<?php if($lang == 'ar'):?>
						<a href="mailto:<?php the_field('email_address', 110)?>"><?php the_field('email_address', 110)?></a>
							<?php else: ?>
						<a href="mailto:<?php the_field('email_address', 10)?>"><?php the_field('email_address', 10)?></a>
						<?php endif;?>
					</p>
					<p>
					<?php if($lang == 'ar'):?>
						<a href="tel:<?php the_field('phone_number', 110)?>"><?php the_field('phone_number', 110)?></a>

							<?php else: ?>
						<a href="tel:<?php the_field('phone_number', 10)?>"><?php the_field('phone_number', 10)?></a>
						<?php endif;?>
					</p>
				</div> -->
				<div class="social-media">
					<a href="<?php the_field('facebook_link', 10)?>" target="_blank"><i class="icon-facebook"></i></a>
					<a href="<?php the_field('instagram_link', 10)?>" target="_blank"><i class="icon-instagram"></i></a>
					<a href="<?php the_field('youtube_link', 10)?>" target="_blank"><i class="icon-youtube-play"></i></a>
				</div>
			</div>
			<div class="footer-end-lower">
				<div class="partners">
					<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/partner1.png" alt=""></a>
					<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/assets/images/partner2.png" alt=""></a>
				</div>
				<div class="social-media">
					<a href="<?php the_field('facebook_link', 10)?>" target="_blank"><i class="icon-facebook"></i></a>
					<a href="<?php the_field('instagram_link', 10)?>" target="_blank"><i class="icon-instagram"></i></a>
					<a href="<?php the_field('youtube_link', 10)?>" target="_blank"><i class="icon-youtube-play"></i></a>
				</div>
				<?php if($lang == "ar"):?>
						<p class="copyright">بلو <?php echo date("Y"); ?>. جميع الحقوق محفوظة</p>
					<?php else:?>
						<p class="copyright">Blue <?php echo date("Y"); ?>. All rights reserved</p>
					<?php endif;?>
			</div>
		</div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
