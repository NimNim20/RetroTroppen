<?php get_header() ?>

<section id="navbar">
                    <?php get_template_part("template-parts/navbar") ?>
</section>

<div class="fejlbox">
    <h2>404</h2>
    <h4>Der er sket en fejl. Vi arbejder på en løsning...</h4>
    <img class="fejlbox_img" src="<?php echo get_template_directory_uri() ?>/img/armchair_6633574.png" alt="a broken chair icon 404">
</div>

<?php get_footer() ?>