<?php get_header(); ?>

<?php

// on utilise une boucle classique pour aller chercher le contenu de la page statique définie comme page d'accueil

if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php

        // on charge le template part correspondant à la banner
        get_template_part('template-parts/content/banner'); ?>
<?php endwhile;
endif; ?>

<?php do_action('random_post_hook'); ?>

<?php
// On vérifie que le customizer soit défini
if (get_theme_mod('oprofile_posts_count')) {
    $nb_posts = get_theme_mod('oprofile_posts_count');
}
?>

<?php if ($nb_posts != 0) : ?>

    <section class="posts">

        <?php

        // on utilise une boucle custom pour aller chercher le contenu de nos articles (hors catégorie "compétences")

        // var_dump($nb_posts);

        if (get_theme_mod('oprofile_home_category_display')) {
            $category = get_theme_mod('oprofile_home_category_display');
        }

        $args = [
            //'post_type' => 'post',
            'posts_per_page' => $nb_posts,
            'orderby' => 'rand',
            'order' => 'DESC',
            //'category__not_in' => 3
            'category_name' => $category
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()) : while ($wpqueryArticles->have_posts()) : $wpqueryArticles->the_post(); ?>
                <?php
                // pour chaque article, on charge le template post-excerpt
                get_template_part('template-parts/content/post-excerpt'); ?>
        <?php endwhile;
        endif; ?>

    </section>

<?php endif; ?>

<?php if(get_theme_mod('oprofile_home_insert')): ?>

    <?php //var_dump(get_theme_mod('oprofile_home_insert')); ?>

    <section class="banner">

        <?php

        $args = [
            'page_id' => get_theme_mod('oprofile_home_insert')
        ];

        $wp_query = new WP_Query($args);

        ?>

        <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

            get_template_part('template-parts/content/custom-insert');

        endwhile; endif; ?>

    </section>

<?php endif; ?>

<section class="grid" id="grid">

    <?php

    // on utilise le même principe de boucle custom pour afficher nos skills

    $args = [
        'post_type' => 'post',
        'posts_per_page' => 6,
        'category_name' => 'competences'
    ];

    $wpqueryCompetences = new WP_Query($args);

    ?>

    <?php if ($wpqueryCompetences->have_posts()) : while ($wpqueryCompetences->have_posts()) : $wpqueryCompetences->the_post(); ?>
            <?php get_template_part('template-parts/content/skill'); ?>
    <?php endwhile;
    endif; ?>

</section>

<?php get_footer(); ?>