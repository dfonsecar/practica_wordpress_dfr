<?php get_header(); ?>
<section class="row">
    <div class="jumbotron">
        <h1><?php bloginfo('name'); ?></h1>
        <p>
            <?php bloginfo('description'); ?>
        </p>
    </div>
</section>
<section class="row">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <article class="articulo col-md-3 col-sm-6">
                <picture class="thumbnail">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail(array(242, 200));
                    } else {
                    ?>
                    <?php
                                                                            }
                                                                                ?>
                    <div class="caption">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="text-center"><?php the_title(); ?></h3>
                        </a>
                        <p class="text-justify">
                            <?= the_content() ?>
                        </p>
                    </div>
                </picture>
            </article>
    <?php
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
        }
    } else {
        __('Ho sentim, no hay entrades dins aquest criteri.', 'Es Liceu');
    }
    ?>
</section>

<?php get_footer(); ?>