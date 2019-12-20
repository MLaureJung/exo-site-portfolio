<?php

// on inclus nos fichiers de customizer (un fichier par section)
require 'customizer/oprofile_home.php';
require 'customizer/oprofile_footer.php';

if (!function_exists('oprofile_customize_register')) {

    function oprofile_customize_register($wp_customize)
    {

        // Première étape : l'ajout d'un pannel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_panel/

        $wp_customize->add_panel(
            // Identifiant unique du panel
            'oprofile_theme_panel',
            [
                // Titre affiché dans l'UI
                'title' => 'oProfile',
                // Description affichée dans l'UI
                'description' => 'oProfile Panel - Gestion du thème',
                // Emplacement
                'priority' => 1
            ]
        );

        // Deuxième étape : ajouter une section dans notre panel
        // https://developer.wordpress.org/reference/classes/wp_customize_manager/add_section/
        $wp_customize->add_section(
            // Identifian unique de la section
            'oprofile_home',
            [
                'title' => 'Page d\'accueil',
                'description' => 'oProfile Section - gestion de la page d\'accueil',
                // Identifian du panel dans lequel placer cette section
                'panel' => 'oprofile_theme_panel'
            ]
        );

        $wp_customize->add_section(
            // Identifian unique de la section
            'oprofile_footer',
            [
                'title' => 'Pied de page',
                'description' => 'oProfile Section - gestion du pied de page',
                // Identifian du panel dans lequel placer cette section
                'panel' => 'oprofile_theme_panel'
            ]
        );
        
        // On appel la fonction dédiée au customizer de la section footer
        oprofile_footer($wp_customize);

        // On appel la fonction dédiée au customizer de la section home
        oprofile_home($wp_customize);

    }
}

add_action('customize_register', 'oprofile_customize_register');
