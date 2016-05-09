<div class="row">
    <div class="col-md-4">
        <?php
            echo get_avatar(get_the_author_meta('user_mail') );
        ?>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <h3 class="author-title"><?php echo get_the_author(); ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				
			</a>
		</p>
            </div>
        </div>
    </div>
</div>