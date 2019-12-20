<section class="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
    <div class="intro">
        <h1 class="intro__title"><?php the_title(); ?></h1>
        <div class="intro__content">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="action-bar">
        <a href="#grid" class="action-button">En savoir plus</a>
        <a href="#contact-form" class="action-button">Contact</a>
    </div>
</section>