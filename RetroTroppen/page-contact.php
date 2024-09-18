<?php get_header()?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>


            <?php echo do_shortcode('[cf7form cf7key="contact-form-1"]') ?>


        <?php endwhile; ?>
    <?php endif; ?>