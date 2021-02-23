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

    <section class="banner" id="banner">
        <?php if(have_rows('banner_slider')):?>
            <div class="banner-slider">
                <?php while(have_rows('banner_slider')): the_row();?>
                    <div class="banner-slide slide" style="background-image: url(<?php the_sub_field('image')?>)">
                        <div class='banner-slide-overlay'></div>
                        <div class="banner-slide-text">
                            <h2 class="banner-title">
                                <?php the_sub_field('title')?>
                            </h2>

                            <?php if(get_sub_field('subtitle')):?>
                            <p class="banner-subtitle txt">
                                <?php the_sub_field('subtitle')?>
                            </p>
                            <?php endif;?>

                            <?php if(get_sub_field('redirect_to')):?>
                            <a class="cta-button" href="<?php the_sub_field("redirect_to")?>"><?php _e("Know More", 'homepage')?></a>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        <div class="scroll-down">
            <a  href="#about"><?php _e("Scroll Down", "homepage")?> </a>
            <div class="c-scrolldown">
                <div class="c-line"></div>
            </div>
        </div>
    </section>

    <section class="about section" id="about">
            <div class="about-image section-image">
                <div class="overlay"></div>
                <img src="<?php the_field('about_image')?>" alt="">
            </div>
            <div class="about-content section-content">
                <h1 class="about-title title animatedText"><span><?php _e('About us', "homepage")?></span></h1>
                <p class="subtitle about-subtitle animatedText"><?php the_field('about_subtitle')?></p>
                <div class="txt about-text animatedText"><?php the_field('about_text')?></div>
                <a class="cta-button animatedText" href="/about"><?php _e("Read More", 'homepage')?></a>
            </div>
    </section>

    <section class="swimming-pools section" id="swimming-pools">
            
            <div class="swimming-pools-content section-content">

                <h1 class="title products-title animatedText"><span><?php _e('Products', "homepage")?></span></h1>
                <h1 class="title title2 animatedText"><span><?php _e('Swimming Pools', "homepage")?></span></h1>

                <div class="txt swimming-pools-description animatedText"><?php the_field('swimming_pools_description')?></div>

                <p class="ranges-title animatedText"><?php _e('Our Ranges', 'homepage')?>:</p>
                <p class="ranges animatedText" ><?php the_field('swimming_pool_ranges')?></p>

                <a class="cta-button animatedText" href="#"><?php _e("Explore Ranges", 'homepage')?></a>

            </div>
            <div class="swimming-pools-image section-image">
                <div class="overlay"></div>
                <img src="<?php the_field('swimming_pools_image')?>" alt="">
            </div>
    </section>

    <section class="jacuzzis section" id="jacuzzis">

            <div class="jacuzzis-image section-image">
                <div class="overlay"></div>
                <img src="<?php the_field('jacuzzis_image')?>" alt="">
            </div>

            <div class="jacuzzis-content section-content">

                <h1 class="title title2 animatedText"><span><?php _e('Jacuzzis', "homepage")?></span></h1>

                <div class="txt jacuzzis-description animatedText"><?php the_field('jacuzzis_description')?></div>

                <a class="cta-button animatedText" href="#"><?php _e("Explore Ranges", 'homepage')?></a>

            </div>
            
    </section>

    <section class="saunas section" id="saunas">
            
            <div class="saunas-content section-content">

                <h1 class="title title2 animatedText"><span><?php _e('Saunas', "homepage")?></span></h1>

                <div class="txt saunas-description animatedText"><?php the_field('saunas_description')?></div>

                <a class="cta-button animatedText" href="#"><?php _e("Explore Ranges", 'homepage')?></a>

            </div>
            <div class="saunas-image section-image">
                <div class="overlay"></div>
                <img src="<?php the_field('saunas_image')?>" alt="">
            </div>
    </section>

</div>

<?php get_footer();
