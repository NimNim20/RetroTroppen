<?php get_header() ?>



<div class="fejlbox">
    <h2>hej</h2>
    <h4> Vi arbejder på siden</h4>
    <img class="fejlbox_img" src="<?php echo get_template_directory_uri() ?>/img/armchair_6633574.png" alt="a broken chair icon 404">
</div>


<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>



<div class="container">
    <div class="topfild_page_blog">

    </div>
    <div class="page_blog22">
        <div class="box31">

        </div>
        <div class="box32">
            <div class="box41"></div>
            <div class="box42"></div>
        </div>
    </div>

</div>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>