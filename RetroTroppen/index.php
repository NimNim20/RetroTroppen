<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <!-- Scroll to Top Button -->
        <button id="scrollToTopBtn" class="btn btn-primary" style="display: none;">
        ↑ Top
        </button>

        <div class="container">
            <div class="row">
                <section id="navbar">
                    <?php get_template_part("template-parts/navbar") ?>
                </section>

                <div class="col-12">
                    <?php
                    $Heading = get_field("heading");
                    $HeroImage = get_field("hero-image");
                    ?>

                    <h1><?php echo $Heading; ?></h1>
                    <img src="<?php echo $HeroImage; ?>" alt="">
                </div>


                <section id="carousel">
                    <?php get_template_part("template-parts/carousel") ?>
                </section>


                <section id="instagram">
                    <?php get_template_part("template-parts/instagram") ?>
                </section>
                
                <?php echo do_shortcode('[cf7form cf7key="contact-form-1"]') ?>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>
