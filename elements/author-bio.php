<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <?php
            ob_start();
            the_author_ID();
            $id = ob_get_contents();
            ob_end_clean();
            global $wpdb;
            $prefix = $wpdb->prefix;

            $url = $wpdb->get_var('SELECT picture FROM ' . $prefix.'user_extends' . ' WHERE userid = ' . $id );
            
            
            
            if ( empty( $url ) ) {
                
                $data = @unserialize(@file_get_contents(__DIR__ . '/../../../plugins/wp-profile/data.txt'));
                
                if ( isset($data[$id])) {
                     echo '<img src="' . ($data[$id]) . '" />'; 
                } else {                
                    echo get_avatar(get_the_author_meta('user_mail') );
                }
             } else {      
            ?>
        <img src="<?php echo $url; ?>" />
             <?php } ?>
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="author-title"><?php echo get_the_author(); ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="author-bio">
        			<?php the_author_meta( 'description' ); ?>
        			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"></a>
                </div>
            </div>
        </div>
    </div>
</div>