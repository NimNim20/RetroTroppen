<div class="container">
    <div class="row">

        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>

                <?php
                $url = get_permalink();
                $title = get_the_title();
                $date = get_the_date();
                $author = get_the_author();
                $excerpt = get_the_excerpt();
                $hero = get_field("hero-image");
                ?>
        
                
                <div class="col-6">
                
                    <img src="<?php echo $hero["url"]?>" alt="<?php echo $hero["alt"]?>">
                    <h2 class=""><?php echo $title ?></h2>
                    <p class=""><?php echo $date ?> </p>
                    <p class=""><?php echo $author ?></p>
                    <p class=""><?php echo $excerpt ?></p>
                    <a href="<?php echo $url ?>">Læs mere</a>

                </div>
            
            

            <?php endwhile; ?>

            <?php echo paginate_links(); ?>

        <?php endif; ?>

    </div>
</div>