<?php
$loop = new WP_Query(array(
    "post_type" => "kategorier-post",
    "posts_per_page" => 4
));?>


<h2 class="header_kategorier">
<?php pll_e("Populært Retro")?></h2>

<div class="kategorier_boxes">
    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>
            <?php
            $title = get_the_title();
            $image = get_field("image");
            ?>

            <div class="kategorier">
                <div class="img_kategorier">
                    <img class="img_radius" style="" src="<?php  echo $image["url"]?>" />
                </div>
                <div class="titel_kategorier">
                    <h4><?php echo $title; ?></h4>
                </div> 
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>