function theme_enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
