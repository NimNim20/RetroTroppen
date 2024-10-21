<?php get_header() ?>
    <?php $loop = new WP_Query(array("post_type" => "post", "posts_per_page" => -1)) ?>

    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post(); ?>

            <?php
            $categories = get_the_category();
            $tags = get_the_tags(); 
            $title = get_the_title();
            $date = get_the_date();
            $author = get_the_author();
            $content = get_the_content();
            $hero = get_field("hero-image");
            ?>


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
        <!-- <div class="col-9">
          
            <div class="image-card">
                <img src="<?php echo $blogimg['url']; ?>" alt="Blog Image" class="img-fluid">
                <div class="overlay">
                    <h3><?php echo $title ?></h3>
                    <p><?php echo $text1 ?></p>
                    <a href="#" class="read-more"><?php pll_e("Læs mere")?></a>
                </div>
            </div>

        </div> -->
    </div>
            

        
        <?php endwhile; ?>
        <?php wp_reset_postdata() ?>

        <?php echo paginate_links(); ?>

    <?php endif; ?>

<?php get_footer() ?>