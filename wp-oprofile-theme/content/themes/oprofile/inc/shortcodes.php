<?php

// Un shortcode très simple sans paramètres
// https://codex.wordpress.org/Shortcode_API
// on déclare une fonction
function shortcode_test( $atts ) {
    return "<div style='padding:2em;margin:1em;border:1px solid #FFF;'>Coucou les Wave ! Je suis un beau shortcode ! :)</div>";
}
// puis on utilise cette fonction via un shortcode 'test-shortcode'
// pour utiliser le shortcode dans un contenu (back-office): [test-shortcode]
// pour utiliser le shortcode dans un template: echo do_shortcode('[test-shortcode]');
add_shortcode('test-shortcode', 'shortcode_test');

// Un shortcode avec des paramètres
// https://codex.wordpress.org/Function_Reference/shortcode_atts
function michu_activity_function($attributs) {

    //var_dump($attributs);
    
    $atts = shortcode_atts([
        'activity' => 'casse son site internet',
        'color' => 'red'
    ], $attributs);

    return "<div style='padding:2em;margin:1em;border:1px solid " . $atts['color'] . ";'><p style='color:" . $atts['color'] . "'>Mme Michu " . $atts['activity'] . "</p></div>";
}

add_shortcode('michu_activity', 'michu_activity_function');

// Un shortcode avec des balises ouvrantes et fermantes
function michu_valeur_function($attributs, $content=null) {
    return "<h6 style='font-size:5em;color:#F0F;'>" . $content . "</h6>";
}
add_shortcode('michu_valeur', 'michu_valeur_function');