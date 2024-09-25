<?php get_header(); ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
    
    <div class="container">
        <div class="row">
            <!-- Main Content Section -->
            <main>
                <article class="col-12">
                    <?php
                    $Heading = get_field("heading");
                    $HeroImage = get_field("hero-image");
                    $CoreNarrative = get_field("core-narrative");
                    ?>

                    <section class="hero-img" style="background-image: url(<?php echo $HeroImage['url']; ?>);">
                        <div class="hero-text">
                            <h1 class="frontpage-heading"><?php echo esc_html($Heading); ?></h1>
                            <p class="core-narrative"><?php echo esc_html($CoreNarrative); ?></p>
                        </div>
                    </section>
                </article>

                <!-- Categories Section -->
                <section id="kategorier">
                    <?php get_template_part("template-parts/kategorier"); ?>
                </section>

                <!-- Carousel Section -->
                <section id="carousel">
                    <?php get_template_part("template-parts/carousel"); ?>
                </section>

                <!-- Instagram Feed Section -->
                <section id="instagram">
                    <?php get_template_part("template-parts/instagram"); ?>
                </section>
            </main>
        </div>
    </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
