<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- <h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="">Not Animated</h1>
<h1 class="animatedText">Animated</h1>
<p  class="animatedText" style="width:200px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, facilis numquam. Laborum officia quae, quidem, error, impedit architecto asperiores maxime odit eveniet accusantium est dolor? Incidunt tempore id reiciendis voluptatum</p>
<h1 class="animatedText">Animated</h1>
<p  class="animatedText" style="width:200px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, facilis numquam. Laborum officia quae, quidem, error, impedit architecto asperiores maxime odit eveniet accusantium est dolor? Incidunt tempore id reiciendis voluptatum</p>
<p class="animatedText" style="width:200px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, facilis numquam. Laborum officia quae, quidem, error, impedit architecto asperiores maxime odit eveniet accusantium est dolor? Incidunt tempore id reiciendis voluptatum</p>
<h1 class="animatedText">Animated</h1>
<p class="animatedText" style="width:200px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, facilis numquam. Laborum officia quae, quidem, error, impedit architecto asperiores maxime odit eveniet accusantium est dolor? Incidunt tempore id reiciendis voluptatum</p> -->
<!-- <h1 class="title"><?php _e("Home", "homepage")?></h1>
<h1 class="title2"><?php _e("Home", "homepage")?></h1>
<h1 class="subtitle"><?php _e("Home", "homepage")?></h1>
<h1 class="cta"><?php _e("Home", "homepage")?></h1>
<p class="txt"><?php _e("Home", "homepage")?></p> -->

<div class="home-page-container">

    <section class="banner">
        <?php if(have_rows('banner_slider')):?>
            <div class="banner-slider">
                <?php while(have_rows('banner_slider')): the_row();?>
                    <div class="banner-slide slide" style="background-image: url(<?php the_sub_field('image')?>)">
                        <div class="banner-slide-text">
                            <h2 class="banner-title">
                                <?php the_sub_field('title')?>
                            </h2>
                            <p class="banner-subtitle txt">
                                <?php the_sub_field('subtitle')?>
                            </p>
                            <a class="cta-button" href="<?php the_sub_field("redirect_to")?>"><?php _e("Know More", 'homepage')?></a>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        <div class="scroll-down">
            <a  href="#"><?php _e("Scroll Down", "homepage")?> </a>
            <div class="c-scrolldown">
                <div class="c-line"></div>
            </div>
        </div>
    </section>
</div>

<?php get_footer();
