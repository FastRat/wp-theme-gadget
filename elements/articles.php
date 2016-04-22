<div class="row">
    <?php if ( have_posts() ) : ?>
    
    <?php if ( is_home() && ! is_front_page() ) : ?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-xs-offset-2 col-md-offset-1 col-xs-7 col-sm-4 col-md-8 col-lg-8">
                <h2 class="article_title"> <?php single_post_title(); ?> </h2>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );

    // End the loop.
    endwhile;

    // Previous/next page navigation.
    the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'gadget' ),
            'next_text'          => __( 'Next page', 'gadget' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'gadget' ) . ' </span>',
    ) );

// If no content, include the "No posts found" template.
else :
    get_template_part( 'content', 'none' );

endif;
?>

</div>