<?php get_header() ?>

<section id="navbar">
                    <?php get_template_part("template-parts/navbar") ?>
</section>

<div class="fejlbox">
    <h2>hej</h2>
    <h4> Vi arbejder på siden</h4>
    <img class="fejlbox_img" src="<?php echo get_template_directory_uri() ?>/img/armchair_6633574.png" alt="a broken chair icon 404">
</div>


<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>


        
        








    <!-- <div class="container">

       >

                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php pll_e("Sorter")?> 
                                    </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><?php pll_e("populær")?></a></li>
                                            <li><a class="dropdown-item" href="#"><?php pll_e("nyeste")?></a></li>
                                            <li><a class="dropdown-item" href="#"><?php pll_e("ældste")?></a></li>
                                        </ul>

    </div> -->


    <!-- col-6 bottster på blogene -->



    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>