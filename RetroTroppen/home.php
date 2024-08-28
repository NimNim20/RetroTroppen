<?php get_header() ?>

    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10">
                <h1>Nyeste opslag</h1>
                <?php get_template_part("template-parts/instagram") ?>

                <?php get_template_part("template-parts/articles") ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>