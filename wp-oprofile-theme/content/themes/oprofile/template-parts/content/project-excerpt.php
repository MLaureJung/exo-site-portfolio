<article class="post" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <h2 class="post__title"><?php the_title(); ?></h2>
    <?php
    // https://developer.wordpress.org/reference/functions/do_action/
    // on execute les fonctions liées à mon hook custom
    do_action('mon_hook_custom'); ?>
    <?php

    echo '<div style="padding:2em;">';
    the_excerpt();
    //the_content();
    echo '</div>';

    ?>

    <a class="action-button" href="<?php the_permalink(); ?>">Voir le projet</a>
</article>