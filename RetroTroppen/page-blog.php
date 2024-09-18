<?php get_header() ?>

<section id="navbar">
                    <?php get_template_part("template-parts/navbar") ?>
</section>

<!-- <div class="fejlbox">
    <h2>hej</h2>
    <h4> Vi arbejder på siden</h4>
    <img class="fejlbox_img" src="<?php echo get_template_directory_uri() ?>/img/armchair_6633574.png" alt="a broken chair icon 404">
</div> -->

<?php if($loop->have_posts()): ?>
    <?php while($loop->have_posts()): $loop->the_post() ?>



        









    <!-- <div class="container">

        <div class="topbox">
            
        </div>

        <div class="blog_kategorier">

        </div>

        <div class="fornt_blog">

             <div class="page_blog_top_tests">
                                
                                <div class="undertitle_blog_page">
                                    <h2><?php echo $undertitle; ?></h2> 
                                </div>

                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php pll_e("Sorter")?> 
                                    </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><?php pll_e("populær")?></a></li>
                                            <li><a class="dropdown-item" href="#"><?php pll_e("nyeste")?></a></li>
                                            <li><a class="dropdown-item" href="#"><?php pll_e("ældste")?></a></li>
                                        </ul>
                                </div>
            </div>

            <div class="card col-6" >
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>




    </div> -->


    <!-- col-6 bottster på blogene -->



    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>