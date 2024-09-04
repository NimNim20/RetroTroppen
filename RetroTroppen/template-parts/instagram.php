<?php
$loop = new WP_Query(array(
    "post_type" => "instagram-post",
    "posts_per_page" => 4
));

<h2 class="header_instagram">?>
<?php pll_e("Følg os på Sociale media")?></h2>

<div class="instagram_boxes">
    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $titel = get_field("titel");
            $image = get_field("image");
            $text = get_field("text");
            ?>


            <div class="instagram_img" style="background-image: url(<?php echo $image["url"] ?>);">

                <div class="titel_text_instagram">
                    <h4 class="insta_titel"><?php echo $titel; ?></h4>
                    <p class="insta_text"><?php echo $text; ?> </p>
                </div> 

            </div>

       
            
        

        <?php endwhile; ?>
    <?php endif; ?>
</div>