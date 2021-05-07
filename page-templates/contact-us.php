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
                <div class="info-block address animatedText">
                    <h6 class="info-title"><?php _e("Address", "contact")?>:</h6>
                    <?php while(have_rows('offices')): the_row();?>
                        <div class="office">
                            <p class="office-name"><?php the_sub_field('office_name');?></p>
                            <a target="_blank" href="<?php the_sub_field('office_maps_link');?>" class="office-link"><?php the_sub_field('office_address')?></a>
                        </div>
                    <?php endwhile;?>
                    <iframe class="map" width="100%" height="350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=22%20Street%201,%20First%20New%20Cairo,%20Cairo%20Governorate,%20Egypt%20Cairo+(Blue)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            <?php endif;?>

            <?php if(get_field('opening_hours')):?>
                <div class="info-block opening-hours animatedText">
                    <h6 class="info-title"><?php _e("Opening Hours", "contact")?>:</h6>
                    <p class="opening-hours number"><?php the_field('opening_hours');?></p>
                </div>
            <?php endif;?>
            
            <?php if(have_rows('phone_numbers')):?>
                <div class="info-block phone animatedText">
                    <h6 class="info-title"><?php _e("Telephone", "contact")?>:</h6>
                    <?php while(have_rows('phone_numbers')): the_row();?>
                    <a href="tel:<?php the_sub_field('phone_number');?>" class="number"><?php the_sub_field('phone_number')?></a>
                    <?php endwhile;?>
                </div>
            <?php endif;?>

            <?php if(have_rows('emails')):?>
                <div class="info-block email animatedText">
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
