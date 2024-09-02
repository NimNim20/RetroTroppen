<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        
        <section id="navbar">
            <?php get_template_part("template-parts/navbar") ?>
        </section>

        <section id="carousel">
            <?php get_template_part("template-parts/carousel") ?>
        </section>

        <?php echo do_shortcode('[cf7form cf7key="contact-form-1"]') ?>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>
