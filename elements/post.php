<?php
    ob_start();
    if ( isset($data_post) ) {
        the_date();
        $data_tmp = ob_get_contents();
        if ( empty($data_tmp)==FALSE && $data_tmp !=='' && is_null($data_tmp)==FALSE){
            $data_post = getDateWithRoma($data_tmp);
        }
        
    } else {
         the_date();
        $data_post = getDateWithRoma(ob_get_contents());
    }
    ob_end_clean();
?>

<div id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row">
        <div class="col-xs-offset-1 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-1 col-sm-1 col-md-1 col-lg-1">
            <h3 class="article_date"> <?php  echo $data_post; ?> </h3>
        </div>
        <div class="col-xs-offset-3 col-sm-offset-2 col-md-offset-1 col-xs-6 col-sm-6 col-md-8 col-lg-8">
            <?php

                the_title( sprintf( '<h2 class="article_title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
        
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-11 col-sm-11 col-md-11 col-lg-11">
            <h6>
                Autor: <?php the_author(); ?>
                <span class="seperator"></span>
                Kategoria: <?php the_category(', '); ?>
                <span class="seperator"></span>
                <?php the_tags(); ?>
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-10 col-sm-11 col-md-10 col-lg-10" >
            <article class="article_text">
                <?php
                    the_content( sprintf(
                            __( 'Czytaj dalej %s', 'gadget' ),
                            the_title( '<span class="screen-reader-text">', '</span>', false )
                    ) );
                
                ?>
            </article>
            
        </div>
    </div>
</div>
