<?php


if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}
/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'diesiete_scripts');
add_action('after_setup_theme', 'diesiete_menu');
function diesiete_scripts()
{
	wp_enqueue_style('diesiete-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('diesiete-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('diesiete-google_font_roboto', 'https://fonts.googleapis.com/css2?family=Lobster&family=Manrope:wght@300;400;800&display=swap');
	wp_enqueue_style('diesiete-custom_style', get_template_directory_uri() . '/assets/css/main_css/style.css');
	wp_style_add_data('diesiete-style', 'rtl', 'replace');
	wp_register_script('diesiete-jquery_cdn', 'https://code.jquery.com/jquery-3.4.1.min.js');
	
	wp_enqueue_script('diesiete-jquery_cdn');
	wp_enqueue_script('diesiete-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('diesiete-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true);
	wp_enqueue_script('diesiete-fontawesome_js', 'https://kit.fontawesome.com/7bad17f09b.js');
	wp_enqueue_script('diesiete-typeit_js', 'https://cdnjs.cloudflare.com/ajax/libs/typeit/5.0.2/typeit.min.js');
	wp_enqueue_script('diesiete-popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('diesiete-bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_script('diesiete-parallax_js', get_template_directory_uri() . '/assets/js/parallax.js');
	wp_enqueue_script('diesiete-script_main_js', get_template_directory_uri() . '/assets/js/script_main.js');
	
}
function diesiete_menu()
{
	register_nav_menu('top', 'Меню в шапке');
	register_nav_menu('two', 'Второстепенное меню');
}



function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
