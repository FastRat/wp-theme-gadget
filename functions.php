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

/**
 * 
 * @param integer $month_number
 * @return string|null
 */
function getMonthRoma( $month_number ) {
    $rzymskie = [
        0 => '',
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X',
        11 => 'XI',
        12 => 'XII',
    ];

    if ( isset($rzymskie[intval($month_number)]) ){
        return $rzymskie[intval($month_number)];
    }
    return null;
}

/**
 * 
 * @param string $date
 * @return string
 */
function getDateWithRoma( $date ) {
    $d = explode(' ', $date);
    
    return $d[0] . ' ' . getMonthRoma($d[1]) . ' ' . $d[2];
}