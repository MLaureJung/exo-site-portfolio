<article class="post" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <h2 class="post__title"><?php the_title(); ?></h2>
    <?php
    // https://developer.wordpress.org/reference/functions/do_action/
    // on execute les fonctions liées à mon hook custom
    do_action('mon_hook_custom'); ?>
    <?php

    the_excerpt();
    //the_content();

    ?>
    <p style="margin-top:1em;margin-bottom:2em;">
        <?php
        // https://developer.wordpress.org/reference/functions/the_meta/
        //the_meta();

        // https://developer.wordpress.org/reference/functions/get_post_custom/
        //echo '<pre>';
        //var_dump(get_post_custom());
        //echo '</pre>';

        //var_dump(get_post_meta(get_the_ID(),'Temps de lecture'));
        echo 'Temps de lecture: ' . get_post_meta(get_the_ID(), 'Temps de lecture', true);

        ?>
    </p>

    <a class="action-button" href="<?php the_permalink(); ?>">Lire l'article</a>
</article>