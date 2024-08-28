<?php get_header() ?>

    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            
            <div class="col-10">
                <?php $current_category = get_queried_object(); ?>
                <h2><?php echo $current_category->name ?></h2>
                    
                <?php get_template_part("template-parts/articles") ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>