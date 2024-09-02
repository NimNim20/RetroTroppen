<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        
        <div class="container">
            <div class="row">
                <section id="navbar">
                    <?php get_template_part("template-parts/navbar") ?>
                </section>

<<<<<<< HEAD
    <div class="test">
        <h1>Hello World</h1>
        <h2>Test 123 456 789</h2>
        <p>Hej</p>
    </div>
=======
                <div class="col-12">
                    <?php
                    $Heading = get_field("heading");
                    $HeroImage = get_field("hero-image");
                    ?>

                    <h1><?php echo $Heading; ?></h1>
                    <img src="<?php echo $HeroImage; ?>" alt="">
                </div>
>>>>>>> 94babab68af2c70f3e49c68bf3bc9c48aac6f701


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
