
<?php 

/* Inserim fulls d'estils i scripts.
Hem d'afegir obligatòriament el fitxer style.css, i en aquest cas, en estar
usant bootsrap afegim els fitxers css i js de bootstrap.
*/

function lc_add_theme_scripts(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_style('boostrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');

    wp_enqueue_script('boostrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'lc_add_theme_scripts');


/* Donem suport per a menús al nostre tema amb la següent funció.
Farem servir el walker wp_bootstrap_navwalker.
*/

function lc_register_my_menu() {
    register_nav_menu( 'primary', __('Menú de la capçalera') );
}
add_action( 'init', 'lc_register_my_menu' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

