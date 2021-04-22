<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<div class="contact-us-page-container">
    <h1 class="title page-title"><span><?php _e('Contact Us','contact')?></span></h1>

    <div class="contact-us-content">
        <div class="contact-us-info">

            <?php if(have_rows('offices')):?>
                <div class="info-block address">
                    <h6 class="info-title"><?php _e("Address", "contact")?>:</h6>
                    <?php while(have_rows('offices')): the_row();?>
                        <div class="office">
                            <p class="office-name"><?php the_sub_field('office_name');?></p>
                            <a target="_blank" href="<?php the_sub_field('office_maps_link');?>" class="office-link"><?php the_sub_field('office_address')?></a>
                        </div>
                    <?php endwhile;?>
                </div>
            <?php endif;?>
            
            <?php if(get_field('phone_number')):?>
                <div class="info-block phone">
                    <h6 class="info-title"><?php _e("Telephone", "contact")?>:</h6>
                    <a href="tel:<?php the_field('phone_number');?>" class="number"><?php the_field('phone_number')?></a>
                </div>
            <?php endif;?>

            <?php if(have_rows('emails')):?>
                <div class="info-block email">
                    <h6 class="info-title"><?php _e("Email", "contact")?>:</h6>
                    <?php while(have_rows('emails')): the_row();?>
                        <div class="email">
                            <a href="mailto:<?php the_sub_field('email_address');?>" class="email-address"><?php the_sub_field('email_address')?></a>
                        </div>
                    <?php endwhile;?>
                </div>
            <?php endif;?>

        </div>
        <div class="contact-us-form">
            <div class="form-container">
                <h3 class="form-title"><?php _e('Send us a message', 'contact')?> <hr></h3>
                <?php echo do_shortcode( "[gravityform id='1' title='false' description='true' ajax='true']" )?>
                <div class='submit-form cta-button'><span><?php _e('Send Request','contact')?></span></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
