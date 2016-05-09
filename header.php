<!DOCTYPE html>
<html ng-app="APP">
    <head>
        <?php
            /**
             * Inlude head
             */
            require_once __DIR__ . '/elements/head.php';
        ?>
    </head>
    <body>
        <div id="warpper" ng-controller="Warpper">
            <div class="container-fluid">
                <div id="login_row" class="row">
                    <?php
                        /**
                         * Inlude sidebar top
                         */
                        require_once __DIR__ . '/elements/sidebar-top.php';
                    ?>
                </div>
                <div id="image_row" class="row">
                    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
                        <a href="<?php bloginfo('url'); ?>">
                            <h1 class="left h1_titleWeb">
                                <?php bloginfo('name'); ?>
                                <!--<small><?php bloginfo('description'); ?></small>-->
                            </h1>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-2 col-sm-offset-4 col-md-offset-5 col-lg-offset-5">
                          <?php
                          
                          /*
                           * menu
                           */
                          
                          require_once __DIR__ . '/class/wp_bootstrap_navwalker.php';
                            wp_nav_menu( array(
                            'menu'              => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                          ?>
                    </div>
                    <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-10 col-sm-10 col-md-10 col-lg-10">
                      <hr>
                    </div>
                </div>