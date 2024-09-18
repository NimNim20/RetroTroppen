<?php
$loop = new WP_Query(array(
    "post_type" => "kategorier-post",
    "posts_per_page" => 4
));?>


<h2 class="header_kategorier">
<?php pll_e("Mest populære kategorier")?></h2>

<div class="kategorier_boxes">
    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>
            <?php
            $title = get_the_title();
            $image = get_field("image");
            ?>

            <div class="kategorier">
                <div class="img_kategorier">
                    <img style="  height: 50px; width: 50px;" src="<?php  echo $image["url"]?>" />
                </div>
                <div class="titel_kategorier">
                    <h4 class="insta_titel"><?php echo $title; ?></h4>
                 </div> 
             </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>