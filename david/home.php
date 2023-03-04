<?php
/*
* Template Name: Pagina de post
*/
    get_header();
?>
<section class="title-page">
        <h3 class="h3-new">New</h3>
            <p class="p-subtitle">
                Our latest web design tips, insights, and resoruces, hot off, the
            presses.
            </p>
        <div class="bg light  fs-4 mt-5">
            <p>Home-New</p>
        </div>
    </section>

        <div class="row">

        <section class="row">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
                <div class="col-6 mt-5">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail(array(600, 436));
                    } else {
                        _e('sense post');
                    ?><?php
                    }
                        ?>
                    <div class="caption">
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="text-center"><?php the_title(); ?></h3>
                        </a>
                        <p class="text-justify">
                            <?= the_excerpt() ?>
                        </p>
                    </div>
                </div>
        <?php

        }
    } else {
        __('Ho sentim, no hay entrades dins aquest criteri.', 'Es Liceu');
    }
    ?>
</section>
<?php
    get_footer();
?>