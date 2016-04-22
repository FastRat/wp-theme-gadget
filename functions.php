<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

if (function_exists("register_sidebar")) {
    register_sidebar(array(
        'before_widget' => '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

