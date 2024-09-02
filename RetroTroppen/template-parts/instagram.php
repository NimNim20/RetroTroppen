<?php
$loop = new WP_Query(array(
    "post_type" => "instagram-post",
    "posts_per_page" => 4
));
?>

<h2 class="header_instagram">Følg os på Sociale media</h2>


<?php if($loop->have_posts()): ?>
    <?php while($loop->have_posts()): $loop->the_post() ?>

        <?php
        $titel = get_field("titel");
        $image = get_field("image");
        $text = get_field("text");
        ?>

        <h2 class="header_instagram">Følg os på Sociale media</h2>
        
        <img src="<?php echo $image["url"]; ?>" alt="<?php echo $image["alt"]; ?>">

        <div class="titel_text_instagram">
            <h3><?php echo $titel; ?></h3>
            <p><?php echo $text; ?> </p>
        </div>

        
        
       

    <?php endwhile; ?>
<?php endif; ?>