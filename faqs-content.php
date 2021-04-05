<div class="page-header">
    <hr>
    <h1 class="title">Frequenty</h1>
    <h1 class="title">Asked Questions</h1>
</div>

<?php if ( have_posts() ) : ?>

<?php get_sidebar(); ?>
<?php /* Start the Loop */ ?>
<ul class="accordion" data-accordion data-allow-all-closed="true">

<?php while ( have_posts() ) : the_post(); ?>
    <?php //get_template_part( 'template-parts/content', get_post_format() ); ?>
    <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title"><?php the_title();?></a>

            <div class="accordion-content" data-tab-content>
                <?php the_content();?>
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