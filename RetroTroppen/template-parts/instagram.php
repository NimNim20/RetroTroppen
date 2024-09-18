<?php
$loop = new WP_Query(array(
    "post_type" => "instagram-post",
    "posts_per_page" => 4
));?>


<h2 class="header_instagram">
<?php pll_e("Følg os på Sociale media")?></h2>

<div class="instagram_boxes">
    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $titel = get_the_title();
            $image = get_field("image");
            $text = get_field("text");
            $date = get_field("date")
            ?>


            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="card ">
                            
                            <img src="url(<?php echo $image["url"] ?>)" class="card-img" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $titel; ?></h5>
                                <p class="card-text"><?php echo $text; ?></p>
                                <p class="card-text"><small class="text-body-secondary"><small><?php echo $date; ?></small></p>
                            </div>
                        </div>

                    </div>
                
                </div>
            </div>
            
        

        <?php endwhile; ?>
    <?php endif; ?>
</div>