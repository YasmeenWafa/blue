<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="single-product-page-container">
	<?php while ( have_posts() ) : the_post(); ?>

	<h1 class="title page-title"><span><?php _e('Products', 'products');?><span></h1>
	<?php $cat_name = wp_get_post_terms( get_the_ID(), 'product-categories' )[0]->name;
			$cat_color = "";
		switch ($cat_name):
			case 'Swimming Pools': $cat_color = "lightBlue"; break;
			case 'حمامات السباحة': $cat_color = "lightBlue"; break;

			case 'Jacuzzis': $cat_color = "azure"; break;
			case 'الجاكوزي': $cat_color = "azure"; break;

			case 'Saunas': $cat_color = "olive"; break;
			case 'الساونا': $cat_color = "olive"; break;

			case 'Accessories': $cat_color = "green"; break;
			case 'الاكسسوارات': $cat_color = "green"; break;			
			default: $cat_color=""; break;
		endswitch;

	?>
	<h2 class="title page-subtitle <?php echo $cat_color; ?>"><span><?php echo $cat_name;?></span></h2>
	
	<a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="go-back"> <i class="icon-left-open-big"></i><?php _e('Go Back','products')?></a>

	<div class="product-featured-image section-image" >
		<div class="overlay"></div>
		<img  class="" src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="">
	</div>
	<div class="product-content">
		<div class="product-description">
			<div class="product-description-inner">			
				<h3 class="<?php echo $cat_color;?> animatedText"><?php the_title();?></h3>
				<div class="description animatedText"><?php the_content();?></div>
				<a class="cta-button animatedText <?php echo $cat_color;?>" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><span><?php _e('Contact Us', 'products')?></span></a>
			</div>
		</div>
		<div class="product-variations">
			<?php if(have_rows('product_variations')):?>
			<div class="product-variations-inner">
				<ol class="variations-list">
				<?php while(have_rows('product_variations')): the_row();?>
					<li class="variation <?php echo $cat_color;?> animatedText">
						<div class="variation-inner">
							<h6 class="variation-name animatedText"><?php the_sub_field('variation_name');?></h6>
							<div class="variation-description animatedText"><?php the_sub_field('variation_description');?></div>
						</div>
					</li>
				<?php endwhile;?>
				</ol>
			</div>
			<?php endif;?>
		</div>
	</div>

		<?php //get_template_part( 'template-parts/content', '' ); ?>
		<?php //the_post_navigation(); ?>
		<?php //comments_template(); ?>
	<?php endwhile; ?>
</div>
			
<?php get_footer();
