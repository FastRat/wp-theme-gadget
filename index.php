<?php
    /**
     *  Inlude header
     */
    get_header();
?>
<div class="row">
    <div id="article_content" class="col-xs-12 col-sm-8 col-md-9 col-lg-9" >
        <?php
            if (is_page() ) {
                //echo 'STRONA';
                require_once __DIR__ . '/elements/single-page.php';
            } else {
                //echo 'POST';
                require_once __DIR__ . '/elements/articles.php';
            }
        ?>
    </div>
    <?php
        /**
         * inlude sidebar
         */
        get_sidebar();
    ?>
 </div>
<?php
    /**
     * Inlude footer
     */
    get_footer();
?>