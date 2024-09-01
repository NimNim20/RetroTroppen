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
        
        <img src="<?php echo $image; ?>" alt="">

        <div class="titel_text_instagram">
            <div> <?php echo $titel; ?> </div>
            <div><?php echo $text; ?></div>
        </div>

        
        
       

    <?php endwhile; ?>
<?php 