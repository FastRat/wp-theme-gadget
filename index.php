<?php
    /**
     *  Inlude header
     */
    get_header();
?>
<div class="row">
    <div id="article_content" class="col-xs-12 col-sm-8 col-md-9 col-lg-9" >
        <?php
        
        require_once __DIR__ . '/elements/articles.php';
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