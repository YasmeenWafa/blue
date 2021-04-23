<?php
/*
Template Name: Services
*/
get_header(); ?>

<div class="services-page-container">
    <h1 class="title page-title"><span><?php _e('After Sale Services','services');?></span></h1>
    <div class="services-image section-image">
        <div class="overlay"></div>
        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="">
    </div>
    <div class="services-text animatedText">
        <?php the_content();?>
    </div>
    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="cta-button animatedText">
    <span><?php _e('Request Proposal','services');?></span></a>
</div>

<?php get_footer();
