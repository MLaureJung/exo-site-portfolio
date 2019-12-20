<?php get_header(); ?>

<?php

// on utilise une boucle classique pour aller chercher le contenu de la page statique définie comme page d'accueil

if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php

        // on charge le template part correspondant à la banner
        get_template_part('template-parts/content/project-detail'); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>