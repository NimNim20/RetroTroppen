<?php
$loop = new WP_Query(array(
    "post_type" => "product",
    "posts_per_page" => -1
));
?>

<h2 class="header_kategorier">
<?php pll_e("Populært Retro")?></h2>

<div class="kategorier_boxes">
    <?php if($loop->have_posts()): ?>
        <?php while($loop->have_posts()): $loop->the_post() ?>
            
            <?php
            global $product;
            $title = get_the_title();
            $excerpt = get_the_excerpt();
            $price = $product->get_price_html();
            $link = get_the_permelink();
            $image = get_field("popular_product_img");
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
    <?php wp_reset_postdata(); ?>
</div>