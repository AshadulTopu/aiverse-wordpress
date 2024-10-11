<?php

/**
 * aiverse_scripts description
 * @return [type] [description]
 */

 // Enqueue styles
function aiverse_scripts() {
      /* all css files */
    wp_enqueue_style('bootstrap', AIVERSE_THEME_CSS_DIR . 'bootstrap.min.css', []);
    wp_enqueue_style('animate', AIVERSE_THEME_CSS_DIR . 'animate.css', []);
    wp_enqueue_style('font-awesome', AIVERSE_THEME_CSS_DIR . 'font-awesome.min.css', []);
    wp_enqueue_style('magnific-popup', AIVERSE_THEME_CSS_DIR . 'magnific-popup.min.css', []);
    wp_enqueue_style('odometer', AIVERSE_THEME_CSS_DIR . 'odometer.css', []);
    wp_enqueue_style('swiper-bundle', AIVERSE_THEME_CSS_DIR . 'swiper-bundle.min.css', []);
    wp_enqueue_style('spacing', AIVERSE_THEME_CSS_DIR . 'spacing.css', [], time());
    wp_enqueue_style('style-css', AIVERSE_THEME_CSS_DIR . 'style.css', [], time());
    wp_enqueue_style('theme-unit', AIVERSE_THEME_CSS_DIR . 'theme-unit.css', [], time());
    wp_enqueue_style('theme-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', [], time());
    wp_enqueue_style('aiverse-style', get_stylesheet_uri(), [], time());

    /* all js files */
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', AIVERSE_THEME_JS_DIR . 'bootstrap.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('magnific-popup', AIVERSE_THEME_JS_DIR . 'magnific-popup.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('odometer', AIVERSE_THEME_JS_DIR . 'odometer.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('swiper-bundle', AIVERSE_THEME_JS_DIR . 'swiper-bundle.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('wow', AIVERSE_THEME_JS_DIR . 'wow.min.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('viewport', AIVERSE_THEME_JS_DIR . 'viewport.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('pluginCustomize', AIVERSE_THEME_JS_DIR . 'pluginCustomize.js', ['jquery'], '1.0.0', true);
    wp_enqueue_script('main-js', AIVERSE_THEME_JS_DIR . 'main.js', ['jquery'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'aiverse_scripts');



/*
Register Fonts
*Enqueue fonts
*/
function aiverse_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'aiverse' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap';
    }
    return $font_url;
}