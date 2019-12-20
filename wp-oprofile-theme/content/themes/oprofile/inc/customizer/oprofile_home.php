<?php

function oprofile_home($wp_customize)
{
    // Troisième étape : ajouter un setting et son control

    // 1. Créer le setting
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
    $wp_customize->add_setting(
        'oprofile_posts_count',
        [
            'default' => 6
        ]
    );

    // 2. Ajouter son control
    // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
    $wp_customize->add_control(
        'oprofile_posts_count',
        [
            // Le type d'input
            'type' => 'number',
            // On ajoute des attibuts sur notre input
            'input_attrs' => [
                'min' => 0,
                'max' => 10,
                'step' => 2
            ],
            // La section sur laquelle est rattachée mon control
            'section' => 'oprofile_home',
            // le label affiché dans l'UI
            'label' => 'Nombre d\'articles',
            // Description affichée dans l'UI
            'description' => 'Nombre d\'articles affichée sur la page d\'accueil'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_home_insert',
        []
    );

    $wp_customize->add_control(
        'oprofile_home_insert',
        [
            'type' => 'dropdown-pages',
            'section' => 'oprofile_home',
            'label' => 'Contenu supplémentaire',
            'description' => 'Sélectionner une page à afficher'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_home_category_display',
        [
            'default' => 'news'
        ]
    );

    // on souhaite avoir un sélecteur de catégories (d'articles)
    // https://developer.wordpress.org/reference/functions/get_categories/

    // echo '<pre style="color:black;">';
    // var_dump(get_categories());
    // echo '</pre>';

    // on récupère mes catégories
    $all_post_categories = get_categories();

    // on boucle sur tous nos résultats
    foreach ($all_post_categories as $post_category) {
        $array_choices[$post_category->slug] = $post_category->name;
    }

    // echo '<pre style="color:black;">';
    // var_dump($array_choices);
    // echo '</pre>';

    $wp_customize->add_control(
        'oprofile_home_category_display',
        [
            'type' => 'select',
            'choices' => $array_choices,
            'section' => 'oprofile_home',
            'label' => 'Catégorie d\'articles à utiliser',
            'description' => 'Sélectionner une catégorie à utiliser sur la home'
        ]
    );
}
