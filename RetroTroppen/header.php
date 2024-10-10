<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <div class="lang"> 
        <?php pll_the_languages() ?>
    </div>
    <title><?php pll_e("RetroTroppen")?></title>
    <?php wp_head() ?>
            
        <div class="container">
            <div class="row">
                <header>
                    <nav>
                        <?php get_template_part("template-parts/navbar"); ?>    
                    </nav>
                </header>
            </div>
        </div>


</head>
<body <?php body_class() ?>>

<main>
