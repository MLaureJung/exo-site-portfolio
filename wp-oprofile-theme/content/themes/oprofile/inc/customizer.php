<?php

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

       

            // Add color scheme setting and control.
            $wp_customize->add_setting( 'showcase-page' , array(
                'default'           => '',
                'sanitize_callback' => 'absint'
            ) );
    
            $wp_customize->add_control( 'showcase-page' , array(
                'label'    => __( 'Select Page', 'textdomain' ),
                'section'  => 'oprofile_home',
                'type'     => 'dropdown-pages'
            ) );
    
     


        


        $wp_customize->add_section(
            // Identifiant unique de la section
            'oprofile_footer',
            [
                'title' => 'Pied de page',
                'description' => 'oProfile Section - gestion du pied de page',
                // Identifian du panel dans lequel placer cette section
                'panel' => 'oprofile_theme_panel'
            ]
        );


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
            'oprofile_footer_display',
            [
                'default' => ''
            ]
        );
        
         $wp_customize->add_control( 'oprofile_footer_display', array(
            'label'      => 'Cacher le pied de page',
            'section'    => 'oprofile_footer',
            'settings'   => 'oprofile_footer_display',
            'type'       => 'checkbox',
            'priority'   => 40,
        ));
         

            



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
                'description' => 'L\'adresse postale affichée dans le pied de page',
                
            ]
        );

        $wp_customize->add_setting(
            'oprofile_footer_background',
            [
                'default' => '#FF0000'
            ]
        );
        
        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            'link-color',
            array(
                'label' => __('Couleur de fond', 'oprofile_theme_panel'),
                'section' => 'oprofile_footer',
                'settings' => 'oprofile_footer_background',
            ))
        );

       
    }
}

add_action('customize_register', 'oprofile_customize_register');
