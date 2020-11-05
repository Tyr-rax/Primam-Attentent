<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <?php wp_head();?>
    </head>
        <wrapper class="d-flex flex-column">
                <body <?php body_class(); ?>>
                    <div class="container">
                                <nav class="navbar navbar-expand-md navbar-light bg-faded">
                                    <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" height="100px" ></a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    <div class="collapse navbar-collapse  navbar-center" id="navbarNavDropdown">
                                        <?php
                                        wp_nav_menu([
                                            'menu'            => 'top',
                                            'theme_location'  => 'top',
                                            'container'       => 'div',
                                            'container_id'    => 'bs4navbar',
                                            'container_class' => 'collapse navbar-collapse',
                                            'menu_id'         => false,
                                            'menu_class'      => 'navbar-nav mr-auto',
                                            'depth'           => 2,
                                            'fallback_cb'     => 'bs4navwalker::fallback',
                                            'walker'          => new bs4navwalker()
                                        ]);
                                        ?>
                                    </div>
                                </nav>
                            </div>

                <main class="flex-fill">

