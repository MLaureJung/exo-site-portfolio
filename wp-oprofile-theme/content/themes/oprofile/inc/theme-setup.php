<?php

if (!function_exists('oprofile_setup')) {

    function oprofile_setup() {

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'nav' => 'Menu hamburger de la navigation'
        ]);

    }

}

add_action('after_setup_theme', 'oprofile_setup');