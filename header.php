<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aiverse
 */
?>


<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

        <?php
    $aiverse_preloader = get_theme_mod('aiverse_preloader', false);
    $aiverse_backtotop = get_theme_mod('aiverse_backtotop', false);
    // $aiverse_cursor = get_theme_mod('aiverse_cursor', false);
    ?>

<!-- pre loader area start -->
    <?php if ($aiverse_preloader) : ?>
        <div id="preloader">
            <div>
                <div id="loader-img"></div>
                <div id="loader"></div>
            </div>
        </div>
    <?php endif; ?>
<!-- pre loader area end -->

<!-- back to top start -->
    <?php if ($aiverse_backtotop) : ?>
  <button class="back-to-top" id="back-to-top"></button>
    <?php endif; ?>
<!-- back to top end -->


<!-- header start -->
    <?php do_action('aiverse_header_style'); ?>
<!-- header end -->

<!-- wrapper-box start -->
 <?php do_action('aiverse_before_main_content'); ?>