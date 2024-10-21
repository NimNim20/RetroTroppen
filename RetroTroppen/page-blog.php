<?php get_header() ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

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
        <div class="col-9">
          

        </div>
    </div>
            

        
        <?php endwhile; ?>

        <?php echo paginate_links(); ?>

    <?php endif; ?>

<?php get_footer() ?>