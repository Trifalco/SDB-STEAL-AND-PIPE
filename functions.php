<?php
function sdbsteel_enqueue_assets() {
  // Bootstrap CSS desde CDN (versión 4 para compatibilidad con jQuery)
  wp_enqueue_style(
    'bootstrap-css',
    'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css',
    array(),
    '4.6.2'
  );
wp_enqueue_style(
  'google-fonts',
  'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;700&display=swap',
  false
);
    wp_enqueue_style( 'google-fonts-oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap', false );

wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' );

  //animate
  wp_enqueue_style(
    'animate-css',
    'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
    array(),
    '4.1.1'
  );


add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


  // Estilo personalizado (movido fuera de assets)
  wp_enqueue_style(
    'custom-style',
    get_template_directory_uri() . '/style.css',
    array(),
    '1.0'
  );

  // jQuery incluido en WordPress
  wp_enqueue_script('jquery');

  // Bootstrap JS desde CDN (versión 4 para compatibilidad con jQuery)
  wp_enqueue_script(
    'bootstrap-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js',
    array('jquery'),
    '4.6.2',
    true
  );


  // Tu JS personalizado (opcional)
  wp_enqueue_script(
    'custom-js',
    get_template_directory_uri() . '/assets/js/main.js',
    array('jquery'),
    '1.0',
    true
  );

  // Font Awesome
  wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
    array(),
    '6.4.0'
  );

  
}

function register_my_menus() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'tu-tema'),
    ]);
}
add_action('after_setup_theme', 'register_my_menus');

add_action('wp_enqueue_scripts', 'sdbsteel_enqueue_assets');

//Logo 
if (function_exists('acf_add_local_field_group')) {

    function register_acf_logo_field() {
        $front_page_id = get_option('page_on_front');

        // Definir campo de logo
        $fields = [
            array(
                'key' => 'field_logo_header',
                'label' => 'Logo Header',
                'name' => 'logo_header',
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            )
        ];

        // Crear grupo ACF
        acf_add_local_field_group(array(
            'key' => 'group_logo_header_custom',
            'title' => 'Logo del Header',
            'fields' => $fields,
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => $front_page_id,
                    ),
                ),
            ),
        ));
    }

    add_action('acf/init', 'register_acf_logo_field');
}

// Add theme support
function sdbsteel_theme_setup() {
  // Add default posts and comments RSS feed links to head
  add_theme_support('automatic-feed-links');

  // Let WordPress manage the document title
  add_theme_support('title-tag');

  // Enable support for Post Thumbnails on posts and pages
  add_theme_support('post-thumbnails');

  // Add support for responsive embeds
  add_theme_support('responsive-embeds');

  // Add support for custom logo
  add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
  ));

  // Add support for HTML5 markup
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

  // Add support for custom background
  add_theme_support('custom-background', array(
    'default-color' => 'ffffff',
  ));

  // Add support for custom header
  add_theme_support('custom-header', array(
    'default-image' => '',
    'default-text-color' => '000000',
    'width' => 1000,
    'height' => 250,
    'flex-width' => true,
    'flex-height' => true,
  ));
}
add_action('after_setup_theme', 'sdbsteel_theme_setup');

// Register navigation menus
function sdbsteel_register_menus() {
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'sdbsteel'),
    'footer' => __('Footer Menu', 'sdbsteel'),
  ));
}
add_action('init', 'sdbsteel_register_menus');

// Register widget areas
function sdbsteel_widgets_init() {
  register_sidebar(array(
    'name'          => __('Sidebar', 'sdbsteel'),
    'id'            => 'sidebar-1',
    'description'   => __('Add widgets here.', 'sdbsteel'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'sdbsteel_widgets_init');

// Custom excerpt length
function sdbsteel_excerpt_length($length) {
  return 20;
}
add_filter('excerpt_length', 'sdbsteel_excerpt_length');

// Custom excerpt more
function sdbsteel_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'sdbsteel_excerpt_more');



 //hero - section 
  if (function_exists('acf_add_local_field_group')) {

    function register_acf_hero_slider_fields() {
       $front_page_id = get_option('page_on_front');
        $fields = [];
        for ($i = 1; $i <= 3; $i++) {
            $fields[] = array(
                'key' => "field_slide_{$i}_image",
                'label' => "Slide {$i} - Imagen",
                'name' => "slide_{$i}_image",
                'type' => 'image',
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
            );
            $fields[] = array(
                'key' => "field_slide_{$i}_title",
                'label' => "Slide {$i} - Título",
                'name' => "slide_{$i}_title",
                'type' => 'text',
            );
            $fields[] = array(
                'key' => "field_slide_{$i}_text",
                'label' => "Slide {$i} - Texto",
                'name' => "slide_{$i}_text",
                'type' => 'textarea',
            );
            $fields[] = array(
                'key' => "field_slide_{$i}_button_text",
                'label' => "Slide {$i} - Texto del Botón",
                'name' => "slide_{$i}_button_text",
                'type' => 'text',
            );
            $fields[] = array(
                'key' => "field_slide_{$i}_button_url",
                'label' => "Slide {$i} - URL del Botón",
                'name' => "slide_{$i}_button_url",
                'type' => 'url',
            );
        }

        acf_add_local_field_group(array(
            'key' => 'group_hero_slider_custom',
            'title' => 'Hero Slider (3 Slides)',
            'fields' => $fields,
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => $front_page_id, 
                    ),
                ),
            ),
        ));
    }

    add_action('acf/init', 'register_acf_hero_slider_fields');
}



class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="sub-menu">';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $has_children = in_array('menu-item-has-children', $item->classes);

        $classes = 'menu-item';
        if ($has_children) $classes .= ' sub-menu-down';

        $output .= '<li class="' . esc_attr($classes) . '">';

        $output .= '<a class="nav-link" href="' . esc_url($item->url) . '">' . esc_html($item->title);

        if ($has_children) {
            $output .= ' <span class="arrow">▼</span>';
        }

        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }
}



?>