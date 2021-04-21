<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="products-page-container">

	<h1 class="title page-title"><span><?php _e('Products', "products")?></span></h1>

	<div class="product-categories">

	<div class="tabs-wrapper1">
	<ul class="tabs product-categories-tabs" data-tabs id="product-categories-tabs"   data-deep-link="true" data-update-history="true"  data-deep-link-smudge="true" data-deep-link-smudge-delay="600" data-auto-focus="true">
		<?php $terms = get_terms([
			'taxonomy' => 'product-categories',
			'hide_empty' => false,
			'orderby' => 'id',
            'order'   => 'ASC',
		]);
		$catIndex = 0;
		foreach($terms as $term):?>
			<?php $cat_image = get_field('featured_image', $term->taxonomy . '_' . $term->term_id);?>
			<li style = "background-image: url(<?php echo $cat_image; ?>)"  class="tabs-title">
				<a href="#cat<?php echo $catIndex; ?>">
					<span class="cat-name"><?php echo $term->name;?> <i class="icon-down-open-big"></i></span>
					<div class="overlay"></div>
				</a>

			</li>
		<?php $catIndex+=1; endforeach; ?>
	</ul>
		
	</div>
	<!-- <div class="scroll-down">
		<span><?php //_e("Drag for more", "products")?> </span>
		<div class="c-scrolldown">
			<div class="c-line"></div>
		</div>
	</div> -->
	<div class="tabs-content product-categories-tabs-content" data-tabs-content="product-categories-tabs">
		<?php $catIndex = 0;
		foreach($terms as $term):?>
			<div class="tabs-panel" id="cat<?php echo $catIndex; ?>">
			<?php
				$products = get_posts(array(
					'post_type' => 'products',
					'orderby' => 'date',
					'order' => 'ASC',
					'numberposts'      => -1,
					'tax_query' => array(
						array(
						'taxonomy' => 'product-categories',
						'field' => 'term_id',
						'terms' => $term->term_id)
					))
				);
			?>
			<h2 class="title page-subtitle animatedText"><span><?php echo $term->name;?></span></h2>

				<?php if (count($products) > 1):?>
				<div class="tabs-wrapper">
				<ul class="tabs product-categories-products-tabs animatedText" data-tabs id="product-categories-products-tabs">
					<li class="select"><?php _e('Select Range', 'products');?></li>
					<?php $productIndex = 0; ?>
					<?php foreach( $products as $product):?>
						<li class="tabs-title <?php if ($productIndex == 0) { echo 'is-active'; }?>">
							<a href="#cat<?php echo $catIndex;?>product<?php echo $productIndex;?>" aria-selected="<?php if ($productIndex == 0) { echo 'true'; }?>"> <?php echo $product->post_title;?></a>
						</li>
					<?php $productIndex+=1; endforeach;?>
				</ul>
				</div>
				<?php endif;?>

				<div class="tabs-content product-categories-products-tabs-content" data-tabs-content="product-categories-products-tabs">
				<?php $productIndex = 0; ?>
					<?php foreach( $products as $product):?>

					<div class="tabs-panel <?php if ($productIndex == 0) { echo 'is-active'; }?>" id="cat<?php echo $catIndex;?>product<?php echo $productIndex;?>">
						<?php $product_variations = get_field('product_variations', $product->ID);?>

						<div class="product-content">
							<h2 class="product-title animatedText"><?php echo $product->post_title;?></h2>
							<div class="product-description animatedText"><?php echo $product->post_content;?></div>
							
							<?php if ($product_variations) :?>
								<a class="cta-button animatedText" href="<?php echo get_permalink( $product->ID); ?>"><span><?php _e('Know More', 'products');?></span></a>
							<?php else:?>
								<a class="cta-button animatedText" href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"><span><?php _e('Contact Us', 'products');?></span></a>
							<?php endif;?>

						</div>
						<div class="product-image section-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($product->ID), 'thumbnail' ); ?>);">
							<div class="overlay"></div>
						</div>

					</div>

					<?php $productIndex+=1; endforeach;?>
				</div>

			</div>
		<?php $catIndex+=1; endforeach; ?>
		
	</div>

	
	</div>
		<!-- <?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
			<?php endif; ?> -->
			
</div>

<?php get_footer();
