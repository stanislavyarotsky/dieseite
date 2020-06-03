<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="/assets/img/favicon.png">
    <title>Eis und Feuer Webdesign Nürnberg</title>
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- NAVIGATION-->
    <nav class="navbar px-lg-5 position-fixed navbar-trans navbar-expand-lg navbar-dark justify-content-between w-100">
        <div class="navbar-header">
            <a class="navbar-brand nav-link" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="toggle-icon">
                    <span class="block block_1"></span>
                    <span class="block block_2"></span>
                    <span class="block block_3"></span>
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            $args = array(
                'theme_location'  => 'two',
                'container'       => false,
                'menu_class'      => 'nav navbar-nav ml-auto',
                'fallback_cb'     => 'wp_page_menu',
                'depth'           => 0,
                'walker'          => '',
                'add_li_class'  => 'nav-item backToTheHome mr-lg-3'
            );
            wp_nav_menu($args);
            ?>
        </div>
    </nav>