<?php
/*
Template Name: About
*/
get_header(); ?>


<div class="about-page-container">
    <div class="about-blue-upper">
        <h1 class="title page-title">
            <span><?php _e('Get to','about'); ?><br><?php _e('know us','about'); ?></span>
            <!-- <br>
            <span><?php _e('know us','about'); ?></span> -->
        </h1>
        <div class="about-blue-upper-content">
            <p class="about-blue-description"><?php the_field('about_blue_upper_paragraph')?></p>
            <div class="vision-and-mission">
                <div class="vision vision-and-mission-block animatedText">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/icon-vision.svg" alt="">
                    <p class="vision-and-mission-title"><?php _e('Vision','about')?></p>
                    <p class="vision-and-mission-text"><?php the_field('vision_text')?></p>
                </div>
                <div class="mission vision-and-mission-block animatedText">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/icon-mission.svg" alt="">
                    <p class="vision-and-mission-title"><?php _e('Mission','about')?></p>
                    <p class="vision-and-mission-text"><?php the_field('mission_text')?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-image about-blue-image">
        <div class="overlay"></div>
        <img src="<?php the_field('banner_image');?>" alt="">
    </div>

    <h3 class="about-blue-lower-title animatedText"><?php the_field('about_blue_lower_section_title')?></h3>

    <div class="about-blue-lower">
        <div class="about-blue-lower-text">
            <div class="about-blue-lower-paragraph paragraph1 animatedText">
                <h4><?php the_field('about_blue_lower_paragraph_1_title')?></h4>
                <p><?php the_field('about_blue_lower_paragraph_1')?></p>
            </div>
            <div class="about-blue-lower-paragraph paragraph2 animatedText ">
                <h4><?php the_field('about_blue_lower_paragraph_2_title')?></h4>
                <p><?php the_field('about_blue_lower_paragraph_2')?></p>
            </div>
        </div>
        <div class="about-blue-lower-images">
            <?php if(have_rows('slider_images')): ?>
                <div class="slider-for">
                    <?php while(have_rows('slider_images')): the_row();?>
                        <a class="pslide" href="<?php the_sub_field('image');?>" 
                        style="background-image: url(<?php  the_sub_field('image')?>);"
                        >
                            <!-- <img src="<?php the_sub_field('image')?>" alt=""> -->
                            <div class="zoom-icon">
                                <img src="<?php echo get_stylesheet_directory_uri()?>/src/assets/images/zoom-in.svg" alt="">
                            </div>
                        </a>
                    <?php endwhile;?>
                </div>
                <div class="slider-nav">
                    <?php while(have_rows('slider_images')): the_row();?>
                        <div class="slide" style="background-image: url(<?php the_sub_field('image')?>);">
                            <!-- <img src="<?php the_sub_field('image')?>" alt=""> -->
                        </div>
                    <?php endwhile;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>

<?php get_footer();
