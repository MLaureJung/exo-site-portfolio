<section class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <article class="intro">
        <h1 class="intro__title"><?php the_title(); ?></h1>
        <div class="intro__content">
            <?php the_content(); ?>
        </div>
    </article>
</section>