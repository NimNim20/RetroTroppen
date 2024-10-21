<!DOCTYPE html>
<html lang="en">
<main>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="WooCommerce.css">
    <title><?php pll_e("RetroTroppen")?></title>
    <?php wp_head() ?>
            
                <header>
                    <nav>
                    <div class="lang"> 
                         <?php pll_the_languages() ?>
                    </div>
                        <?php get_template_part("template-parts/navbar"); ?>    
                    </nav>
                </header>


</head>
<body <?php body_class() ?>>

