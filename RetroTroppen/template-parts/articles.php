<div class="container">
    <div class="row">

        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>

                <?php
                $url = get_permalink();
                $title = get_the_title();
                $date = get_the_date();
                $author = get_the_author();
                $excerpt = get_the_excerpt();
                $hero = get_field("hero-image");
                ?>
        
                <article class="col-6">
                    <figure>
                        <img src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>">
                    </figure>

                    <header>
                        <h2><?php echo esc_html($title); ?></h2>
                        <p class="post-date"><?php echo esc_html($date); ?></p>
                        <p class="post-author"><?php echo esc_html($author); ?></p>
                    </header>

                    <p class="post-excerpt"><?php echo esc_html($excerpt); ?></p>

                    <a href="<?php echo esc_url($url); ?>"><?php pll_e("Læs mere"); ?></a>
                </article>
            
            <?php endwhile; ?>

            <nav class="pagination">
                <?php echo paginate_links(); ?>
            </nav>

        <?php endif; ?>

    </div>
</div>
