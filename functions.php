<?php

// Tema desteği
function estatein_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'style', 'script'));
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');

    register_nav_menus(array(
        'primary' => 'Ana Menü',
    ));
}
add_action('after_setup_theme', 'estatein_setup');

// CSS ve JS yükle (cache-busting için filemtime ile versiyonlama)
function estatein_scripts() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    // Google Fonts (preconnect header.php'de değil; WP gerekli preconnect'i ekler)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap', array(), null);

    // Ana CSS
    wp_enqueue_style('estatein-style', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));

    // Ana JS (footer'da, defer ile)
    wp_enqueue_script('estatein-main', $theme_uri . '/assets/js/main.js', array(), filemtime($theme_dir . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'estatein_scripts');

// main.js'i defer ile yükle (performans)
function estatein_defer_scripts($tag, $handle) {
    if ('estatein-main' === $handle) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'estatein_defer_scripts', 10, 2);

// Performans: gereksiz emoji script/stillerini kaldır
function estatein_cleanup() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('wp_head', 'wp_generator'); // güvenlik: WP versiyonunu gizle
}
add_action('init', 'estatein_cleanup');

// Görsel yardımcı fonksiyonu
function estatein_img($file) {
    return get_template_directory_uri() . '/assets/images/' . $file;
}

// Widget alanları
function estatein_widgets() {
    register_sidebar(array(
        'name'          => 'Footer Widget',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
    ));
}
add_action('widgets_init', 'estatein_widgets');