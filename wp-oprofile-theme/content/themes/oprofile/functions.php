<?php

if (!function_exists('oprofile_enqueue')) {

    function oprofile_enqueue()
    {

        // On souhaite déclarer 2 choses à WordPress
        // 1 feuille de style
        // 1 fichier js (script)

        wp_enqueue_style(
            'main-style', // Le nom de la feuille de style (doit être unique)
            get_theme_file_uri('public/css/style.css'), // L'URL de notre fichier
            [], // Au besoin, on peut charger des dépendances
            '1.2', // Version de notre feuille de style
            'all' // Contexte (media) de chargement de la stylesheet
        );

        wp_enqueue_script(
            'app', // Le nom de notre fichier de script (doit être unique)
            get_theme_file_uri('public/js/app.js'), // L'URL de notre fichier
            [], // Au besoin, on peut charger des dépendances
            '1.2', // Version de notre script
            true // Si on souhaite que notre script soit inclus avant la fermeture de <body> (par défaut -> <head>)
        );
    }
}

// On accroche la fonction au hook "wp_enqueue_scripts"
add_action('wp_enqueue_scripts', 'oprofile_enqueue');

if (!function_exists('oprofile_setup')) {

    function oprofile_setup() {

        // On va ajouter des fonctionnalités à notre thème

        // Gestion du title tag by WordPress
        add_theme_support('title-tag');

        // Gestion des images mises en avant
        add_theme_support('post-thumbnails');
        // on peut aussi redimensionner et cropper nos thumbnails
        //set_post_thumbnail_size(250,250,true);

        // Gestion des menus
        register_nav_menus([
            'home' => 'Menu latéral de la page d\'accueil',
            'page' => 'Menu latéral des autres pages'
        ]);

    }

}

add_action('after_setup_theme', 'oprofile_setup');