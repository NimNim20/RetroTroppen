<?php get_header() ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="topfild_page_blog">
            
                    <h3>tilbage</h3>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="single_side_bar">
                    <ul>ALLE</ul>
                    <ul>EVENTS</ul>
                    <li>foredrag</li>
                    <li>åbent hus</li>
                    <li>særudstillinger</li>
                    <ul>ARTILER</ul>
                    <li>DIY</li>
                    <li>Indretning</li>
                    <li>Historik</li>

                    <!-- nær den er dynamisk så kun en ul og il -->
                </div>
            </div>
            <div class="col-9">

                <div class="container-fluid">
                    <div class="row">
            
                        <?php $loop = new WP_Query(array("post_type" => "post", "posts_per_page" => -1)) ?>
                        <?php if($loop->have_posts()): ?>
                            <?php while($loop->have_posts()): $loop->the_post(); ?>

                                <?php 
                                $title = get_the_title();
                                $excerpt = get_the_excerpt();
                                $hero = get_field("hero-image");
                                ?>
                                <div class="col-4">
                                    <div class="image-card">
                                        <img src="<?php echo $hero['url']; ?>" alt="Blog Image" class="img-fluid">
                                        <div class="overlay">
                                            <h3><?php echo $title ?></h3>
                                            <p><?php echo $excerpt ?></p>
                                            <a href="#" class="read-more"><?php pll_e("Læs mere")?></a>
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