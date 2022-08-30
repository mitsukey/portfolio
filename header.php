<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head> 
        <meta charset="<?php bloginfo( 'charset' );?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> ontouchstart="">
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57BRLZ3"height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <?php wp_body_open(); ?> 
        <header> 
            <h1>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pf_logo2.svg" alt="logo">
                </a>
            </h1> 
            <div class="g-nav_button_wrapper"> 
                <span></span> 
                <span></span> 
                <span></span> 
            </div>
            <div class="g-nav_wrapper"> 
                <nav id="g-nav" ontouchstart=""> 
                    <?php wp_nav_menu( array( 'theme_location'=> 'main-menu', ) ); ?> 
                </nav> 
            </div>
        </header>