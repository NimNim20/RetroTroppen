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
        
               <a href="tilbage"><p>Tilbage</p></a> 

               

            </div>
        </div>
    </div>

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

                    <!-- nær den er dynamisk så kun en ul og il -->
                </div>
            </div>

            
        <div class="col-9">

            <article class="single_all_of_the_content">

                <img class="heroimg_blogpost" src="<?php echo $hero["url"]?>" alt="<?php echo $hero["alt"]?>">

                <span>Kategorier:</span>
                <?php if($categories): ?>
                    <?php foreach($categories as $category): ?>
                        <a class="Katandtags" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>

                <span>Tags:</span>
                <?php if($tags): ?>
                    <?php foreach($tags as $tag): ?>
                        <a class="Katandtags" href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
               

                <h1 class="singletitle"><?php echo $title ?></h1>
                <p><?php echo $date ?> </p></p>
                <?php echo $author ?></p>
                <div class="postcontent"><?php echo $content ?></div>


                <?php if(comments_open() || get_comments_number()): ?>
                <?php comments_template(); ?>
                <?php endif; ?>

            </article>



        </div>
    </div>
            

        
        <?php endwhile; ?>

        <?php echo paginate_links(); ?>

    <?php endif; ?>

<?php get_footer() ?>