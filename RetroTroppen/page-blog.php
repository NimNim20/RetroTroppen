<?php get_header() ?>
    <div class="container">
        <!-- <div class="row">
            <div class="col-12">
                <div class="topfild_page_blog">
            
                    <h3><?php pll_e("Tilbage")?></h3>

                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-3">
                <div class="single_side_bar">
                    <a href=""><ul>ALLE</ul></a>
                    <a href=""><ul>RETRO EVENTS</ul></a>
                        <a href=""><li>Retro foredrag</li></a>
                        <a href=""><li>Retro åbent hus</li></a>
                        <a href=""><li>Retro butik</li></a>
                        <a href=""><li>Møbeldesign foredrag</li></a>
                    <a href=""><ul>RETRO ARTIKLER</ul></a>
                        <a href=""><li>Møbel vedligehold</li></a>
                        <a href=""><li>Retro møbler</li></a>
                        <a href=""><li>Møbelhistorie</li></a>
                        <a href=""><li>Retro indretning</li></a>

                    <!-- nær den er dynamisk så kun en ul og il -->
                </div>
            </div>
            <div class="col-9 okkurt">

                <div class="container-fluid">
                    <div class="row">
            
                        <?php $loop = new WP_Query(array("post_type" => "post", "posts_per_page" => -1)) ?>
                        <?php if($loop->have_posts()): ?>
                            <?php while($loop->have_posts()): $loop->the_post(); ?>

                                <?php 
                                $title = get_the_title();
                                $hero = get_field("hero-image");
                                $link = get_permalink();
                                ?>
                                <div class="col-6">
                                    <div class="image-card">
                                        <img src="<?php echo $hero['url']; ?>" alt="Blog Image" class="img-fluid">
                                        <div class="overlay">
                                            <h3><?php echo $title ?></h3>
                                            <a href="<?php echo $link ?>" class="read-more"><?php pll_e("Læs mere")?></a>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata() ?>
                            <?php echo paginate_links(); ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php get_footer() ?>