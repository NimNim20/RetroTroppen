<?php
$loop = new WP_Query(array(
    "post_type" => "instagram-post",
    "posts_per_page" => 4
));?>


<h2 class="header_instagram">
<?php pll_e("Følg os på Sociale media")?></h2>

<div class="container">
<div class="row">


    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $titel = get_the_title();
            $image = get_field("image");
            $text = get_field("text");
            $date = get_field("date")
            ?>


           
                <div class="col-3">
                    <div class="card h-100 d-flex flex-column"> <!-- Ensure card takes full height -->
                        <img src="<?php echo $image["url"] ?>" class="card-img-top" alt="...">
        
                        <div class="card-body d-flex flex-column"> <!-- Make the body stretch with flex -->
                            <h5 class="card-title"><?php echo $titel; ?></h5>
                                <p class="card-text"><?php echo $text; ?></p>
                                    <p class="card-text mt-auto"><small class="text-body-secondary"><?php echo $date; ?></small></p>
                        </div>
                    </div>
                </div>

                
           
            
        

        <?php endwhile; ?>
    <?php endif; ?>


    
    </div>
</div>