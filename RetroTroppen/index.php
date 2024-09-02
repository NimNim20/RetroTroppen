<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        
        <section id="navbar">
            <?php get_template_part("template-parts/navbar") ?>
        </section>

        <section id="carousel">
            <?php get_template_part("template-parts/carousel") ?>
        </section>

        <section id="instagram">
            <?php get_template_part("template-parts/instagram") ?>
        </section>

        <?php endwhile; ?>
    <?php endif; ?>

    <div class="test">
        <h1>Hello World</h1>
        <h2>Test 123 456 789</h2>
        <p>Hej</p>
    </div>



<?php get_footer() ?>
