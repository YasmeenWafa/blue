<?php
/*
Template Name: FAQS
*/
get_header(); ?>

<div class="faqs-page-container">
    <div class="page-header">
        <hr>
        <h1 class="title">Frequenty</h1>
        <h1 class="title">Asked Questions</h1>
    </div>
    <div class="page-content">

    <!-- <form role="search" method="get" id="searchform" action="<?php echo home_url( '/faqs' ); ?>">
        <div class="input-group">
            <input type="text" class="input-group-field" value="" name="s" id="s" aria-label="Search" placeholder="<?php
            esc_attr_e( 'Search', 'foundationpress' ); ?>">
            <div class="input-group-button">
                <input type="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'foundationpress' ); ?>" class="button">
            </div>
        </div>
    </form> -->
        <?php if(have_rows('questions')):?>
        <?php //get_sidebar();?>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
            <?php while(have_rows('questions')): the_row();?>
            <?php if($_GET["s"] !== NULL):?>
                <?php if((strpos(get_sub_field('question'), $_GET["s"]) !== false) || (strpos(get_sub_field('answer'), $_GET["s"]) !== false)):?>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title"><?php the_sub_field('question')?></a>

                        <div class="accordion-content" data-tab-content>
                            <?php the_sub_field('answer');?>
                        </div>
                    </li>
                <?php endif;?>
                <?php  else:?>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title"><?php the_sub_field('question')?></a>

                        <div class="accordion-content" data-tab-content>
                            <?php the_sub_field('answer');?>
                        </div>
                    </li>
                <?php  endif;?>
            <?php endwhile;?>
        </ul>
        <?php endif;?>
    </div>
</div>


<?php get_footer();
