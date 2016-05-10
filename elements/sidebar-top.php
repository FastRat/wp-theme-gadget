<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
    <div class="left">
        <div class="middle">

        </div>
    </div>
    <div class="right">
        <div class="middle">
            <?php
                if (is_user_logged_in() ) {
                    ?>
            <a style="float: left;" href="<?php bloginfo('url'); ?>/wp-admin/profile.php">
                <button type="button" class="btn btn-default btn_m">Your profile</button>
            </a>
            <a style="float: left;" href="<?php echo wp_logout_url( home_url() ); ?>">
                <button type="button" class="btn btn-default btn_m">log out</button>
            </a>
            
            
                    <?php
                } else {
            
            ?>
            <a style="float: left;" href="<?php bloginfo('url'); ?>/wp-admin">
                <button type="button" class="btn btn-default btn_m">log in</button>
            </a>
            
            <?php
            
                    if (true) {
                        ?>
                        
            <a style="float: left;" href="<?php echo wp_registration_url(); ?>">
                <button type="button" class="btn btn-default btn_m">Create account</button>
            </a>
            
                        <?php
                    }
                }
            ?>
        </div>
    </div>
</div>