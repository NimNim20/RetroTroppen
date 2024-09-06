<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <div class="container">
            <div class="row">
                <section id="navbar">
                    <?php get_template_part("template-parts/navbar") ?>
                </section>

                <div class="col-12">
                    <?php
                    $Heading = get_field("heading");
                    $HeroImage = get_field("hero-image");
                    $CoreNarrative = get_field("core-narrative");
                    ?>

                    <div class="hero-img" style="background-image: url(<?php echo $HeroImage["url"]?>);"> 
                        <div class="hero-text">
                            <h1 class="frontpage-heading"><?php echo $Heading; ?></h1>
                            <p class="core-narrative"><?php echo $CoreNarrative; ?></p>
                        </div>
                    </div>
                </div>

                <section id="instagram">
                    <?php get_template_part("template-parts/kategorier") ?>
                </section>

                <section id="carousel">
                    <?php get_template_part("template-parts/carousel") ?>
                </section>


                <section id="instagram">
                    <?php get_template_part("template-parts/instagram") ?>
                </section>
                
               
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer() ?>
