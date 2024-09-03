<?php
$loop = new WP_Query(array(
    "post_type" => "instagram-post",
    "posts_per_page" => 4
));
?>

<h2 class="header_instagram">Følg os på Sociale media</h2>

<div class="instagram_boxes">
    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>

            <?php
            $titel = get_field("titel");
            $image = get_field("image");
            $text = get_field("text");
            ?>

            
            <img class="instagram_img" src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>">

            <div class="titel_text_instagram">
                <h3><?php echo $titel; ?></h3>
                <p><?php echo $text; ?> </p>
            </div>

            <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
            
        

        <?php endwhile; ?>
    <?php endif; ?>
</div>