<?php

function oprofile_footer($wp_customize)
{

    $wp_customize->add_setting(
        'oprofile_footer_email',
        [
            'default' => 'loris@oclock.local'
        ]
    );

    $wp_customize->add_control(
        'oprofile_footer_email',
        [
            // Le type d'input
            'type' => 'email',
            // La section sur laquelle est rattachée mon control
            'section' => 'oprofile_footer',
            // le label affiché dans l'UI
            'label' => 'Adresse email',
            // Description affichée dans l'UI
            'description' => 'L\'adresse email affichée dans le pied de page'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_num',
        [
            'default' => '+33 6 66 66 66 66'
        ]
    );

    $wp_customize->add_control(
        'oprofile_footer_num',
        [
            // Le type d'input
            'type' => 'text',
            // La section sur laquelle est rattachée mon control
            'section' => 'oprofile_footer',
            // le label affiché dans l'UI
            'label' => 'Numéro de téléphone',
            // Description affichée dans l'UI
            'description' => 'Le numéro de téléphone affichée dans le pied de page'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_address',
        [
            'default' => '5 rue des licornes\n123456 Friteville'
        ]
    );

    $wp_customize->add_control(
        'oprofile_footer_address',
        [
            // Le type d'input
            'type' => 'textarea',
            // La section sur laquelle est rattachée mon control
            'section' => 'oprofile_footer',
            // le label affiché dans l'UI
            'label' => 'Adresse',
            // Description affichée dans l'UI
            'description' => 'L\'adresse postale affichée dans le pied de page'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_active',
        []
    );

    $wp_customize->add_control(
        'oprofile_footer_active',
        [
            'type' => 'checkbox',
            'section' => 'oprofile_footer',
            'label' => 'Activer l\'affichage du footer',
            'description' => 'Permet de masquer ou afficher le footer du site'
        ]
    );

    $wp_customize->add_setting(
        'oprofile_footer_bgcolor',
        [
            'default' => '#242943'
        ]
    );

    // Méthode via l'exploitation de la classe WP_Customize_Color_Control

    // on créé une instance de WP_Customize_Color_Control
    $instance_color_control = new WP_Customize_Color_Control(
        $wp_customize,
        'footer_bgcolor',
        [
            'label' => 'Couleur de fond du footer',
            'section' => 'oprofile_footer',
            'settings' => 'oprofile_footer_bgcolor',
            'description' => 'Permet de changer la couleur de fond du footer'
        ]
    );

    // on utilise notre instance sur le customizer
    $wp_customize->add_control($instance_color_control);

    // Méthode + rapide
    
    // $wp_customize->add_control(
    //     'oprofile_footer_bgcolor',
    //     [
    //         'type' => 'color',
    //         'section' => 'oprofile_footer',
    //         'label' => 'Couleur de fond du footer',
    //         'description' => 'Permet de changer la couleur de fond du footer'
    //     ]
    // );

}
