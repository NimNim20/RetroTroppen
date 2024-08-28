<?php
$loop = new WP_Query(array(
    "post_type" => "instagram-post",
    "posts_per_page" => 4
));
?>

<?php if($loop->have_posts()): ?>
    <?php while($loop->have_posts()): $loop->the_post() ?>

        <?php
        $headline = get_field("headline");
        $titel = get_field("titel");
        $image = get_field("image");
        $text = get_field("text");
        ?>
        

        <?php echo $titel; ?>
        <img src="<?php echo $image; ?>" alt="">
        <?php echo $text; ?>

    <?php endwhile; ?>
<?php 