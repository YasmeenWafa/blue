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

<div class="faqs-page-container">
		
		<h1 class="title page-title">
			<span><?php _e('Frequently asked questions','faqs')?></span>
		</h1>
		<?php if ( have_posts() ) : ?>

			<?php get_sidebar(); ?>
			<?php /* Start the Loop */ ?>
			<ul class="accordion faqs-accordion" data-accordion data-allow-all-closed="true">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'template-parts/content', get_post_format() ); ?>
				<li class="accordion-item faq animatedText" data-accordion-item>
                        <a href="#" class="accordion-title question">
							<p class="question-inner"><?php the_title();?></p>
							<div class="partial-answer"><?php the_excerpt();?></div>
						</a>

                        <div class="accordion-content answer" data-tab-content>
                            <div class="answer-inner">
								<hr>
								<?php the_content();?>
							</div>
                        </div>
                    </li>
			<?php endwhile; ?>
			</ul>

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
			<?php endif; ?>

</div>

<?php get_footer();
