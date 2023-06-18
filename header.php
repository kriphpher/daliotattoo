<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="wp-content/themes/daliotattoo/assets/imgs/ic-logo-main.png">
    <?php wp_head(); ?>
</head>
<body class="pg-home">
    <header id="home">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-dark fixed-top">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end bg-transparent" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <?php wp_nav_menu(array('menu'=>'primary', 'container'=>'', 'theme_location'=>'primary', 'items_wrap'=>'<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">%3$s</ul>')); ?>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="col-md-8">
                    <?php if(function_exists('the_custom_logo')){$custom_logo_id=get_theme_mod('custom_logo'); $logo_main=wp_get_attachment_image_src($custom_logo_id);}?>
                    <?php /* add "<?php echo $logo_main[0] ?>" on "src=""" to add your own logo on wordpress admin's panel */ ?>
                    <img src="wp-content/themes/daliotattoo/assets/imgs/ic-logo-main.png" class="logo" alt="img-logo">
                </div>
            </div>
        </div>
    </header>