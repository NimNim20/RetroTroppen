<?php get_header() ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

            <?php
            $categories = get_the_category();
            $title = get_the_title();
            $date = get_the_date();
            $author = get_the_author();
            $content = get_the_content();
            $hero = get_field("hero-image");
            ?>

            <img src="<?php echo $hero["url"]?>" alt="<?php echo $hero["alt"]?>">
            <h1><?php echo $title ?></h1>
            <p><?php echo $date ?> </p></p>
            <?php echo $author ?></p>
            <?php echo $content ?>


            <span>Kategorier:</span>
            <?php if($categories): ?>
                <?php foreach($categories as $category): ?>
                    <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            <?php endif; ?>


            <?php if(comments_open() || get_comments_number()): ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        
        <?php endwhile; ?>

        <?php echo paginate_links(); ?>

    <?php endif; ?>

<?php get_footer() ?>