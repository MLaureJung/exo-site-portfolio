<?php
/*
Template Name: Template projets
*/

get_header();

$args = [
    'post_type' => 'project',
    'posts_per_pages' => 5
    //...
];

$query = new WP_Query($args);

// voilà pourquoi on utilise l'autre syntaxe (celle avec les ':' dans notre php sur les templates)

echo '<section class="posts">';
        
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        get_template_part('template-parts/content/project-excerpt');

    }
}

echo '</section>';

get_footer();
