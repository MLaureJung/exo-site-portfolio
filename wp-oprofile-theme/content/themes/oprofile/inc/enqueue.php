<?php


// vérifie que la fonction oprofile_enqueue n'a pas déjà été déclarée (dans le cas d'un child thème par exemple)
if (!function_exists('oprofile_enqueue')) {

    function oprofile_enqueue() {

        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '1.0'
        );

        wp_enqueue_script(
            'app',
            get_theme_file_uri('public/js/app.js'),
            [],
            '1.0',
            true
        );

    }

}

add_action('wp_enqueue_scripts', 'oprofile_enqueue');