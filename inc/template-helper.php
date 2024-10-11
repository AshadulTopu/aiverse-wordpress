<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *  
 * @package aiverse
 */





/** 
 *
 * aiverse header
 */
 function aiverse_check_header()
{
    $aiverse_header_style = function_exists('get_field') ? get_field('header_style') : NULL;
    $aiverse_default_header_style = get_theme_mod('choose_default_header', 'header-style-1');

    if ($aiverse_header_style == 'header-style-1' && empty($_GET['s'])) {
        get_template_part('template-parts/header/header-1');
    } elseif ($aiverse_header_style == 'header-style-2' && empty($_GET['s'])) {
        get_template_part('template-parts/header/header-2');
    } else {

        /** default header style **/
        if ($aiverse_default_header_style == 'header-style-2') {
            get_template_part('template-parts/header/header-2');
        } elseif ($aiverse_default_header_style == 'header-style-3') {
            get_template_part('template-parts/header/header-3');
        } else {
            get_template_part('template-parts/header/header-1');
        }
    }
}
add_action('aiverse_header_style', 'aiverse_check_header', 10);


/**
 * [aiverse_header_lang description]
 * @return [type] [description]
 */
function aiverse_header_lang_defualt()
{
    $aiverse_header_lang = get_theme_mod('aiverse_header_lang', false);
    if ($aiverse_header_lang) : ?>

        <ul>
            <li><a href="javascript:void(0)" class="lang__btn"><?php print esc_html__('English', 'aiverse'); ?> <i class="fa-light fa-angle-down"></i></a>
                <?php do_action('aiverse_language'); ?>
            </li>
        </ul>

    <?php endif; ?>
<?php
}

/**
 * [aiverse_language_list description]
 * @return [type] [description]
 */
function _aiverse_language($mar)
{
    return $mar;
}
function aiverse_language_list()
{

    $mar = '';
    $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc');
    if (!empty($languages)) {
        $mar = '<ul>';
        foreach ($languages as $lan) {
            $active = $lan['active'] == 1 ? 'active' : '';
            $mar .= '<li class="' . $active . '"><a href="' . $lan['url'] . '">' . $lan['translated_name'] . '</a></li>';
        }
        $mar .= '</ul>';
    } else {
        //remove this code when send themeforest reviewer team
        $mar .= '<ul>';
        $mar .= '<li><a href="#">' . esc_html__('English', 'aiverse') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('Bangla', 'aiverse') . '</a></li>';
        $mar .= '<li><a href="#">' . esc_html__('French', 'aiverse') . '</a></li>';
        $mar .= ' </ul>';
    }
    print _aiverse_language($mar);
}
add_action('aiverse_language', 'aiverse_language_list');




// header logo
function aiverse_header_logo()
{ ?>
    <?php
        $aiverse_logo_on = function_exists('get_field') ? get_field('is_enable_sec_logo') : NULL;
        $aiverse_logo = get_template_directory_uri() . '/assets/images/logo/logo.png';
        // $aiverse_logo_black = get_template_directory_uri() . '/assets/images/logo/logo.png';

        $aiverse_site_logo = get_theme_mod('logo', $aiverse_logo);
        // $aiverse_secondary_logo = get_theme_mod('secondary_logo', $aiverse_logo_black);
        ?>

    <?php if (!empty($aiverse_logo_on)) : ?>
        <a class="secondary-logo" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($aiverse_site_logo); ?>" alt="<?php print esc_attr__('logo', 'aiverse'); ?>" />
        </a>
    <?php else : ?>
        <a class="navbar-brand m-0 p-0" href="<?php print esc_url(home_url('/')); ?>">
            <img src="<?php print esc_url($aiverse_site_logo); ?>" alt="<?php print esc_attr__('logo', 'aiverse'); ?>" />
        </a>
    <?php endif; ?>
<?php
}

// sticky header logo
function aiverse_header_sticky_logo(){ 
    ?>
    <?php
        $aiverse_logo_black = get_template_directory_uri() . '/assets/images/logo/logo.png';
        $aiverse_secondary_logo = get_theme_mod('secondary_logo', $aiverse_logo_black);
        ?>
    <a class="sticky-logo" href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($aiverse_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'aiverse'); ?>" />
    </a>
<?php
}

// mobile logo
function aiverse_mobile_logo() {
    $aiverse_mobile_logo_hide = get_theme_mod('aiverse_mobile_logo_hide', false);
    $aiverse_site_logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/logo/logo.png');
    ?>

    <?php if (!empty($aiverse_mobile_logo_hide)) : ?>
    <div class="sidebar-logo">
        <a href="<?php print esc_url(home_url('/')); ?>"><img src="<?php print esc_url($aiverse_site_logo); ?>" alt="<?php print esc_attr__('logo', 'aiverse'); ?>"></a>
        <i class="fa-solid fa-xmark" id="closenav"></i>
    </div>
   <?php endif; ?>
<?php 
}


// header top social
// function aiverse_header_social(){
//     $aiverse_topbar_social_on = get_theme_mod('aiverse_topbar_social_on', false);
//     $aiverse_topbar_fb_url = get_theme_mod('aiverse_topbar_fb_url', __('#', 'aiverse'));
//     $aiverse_topbar_twitter_url = get_theme_mod('aiverse_topbar_twitter_url', __('#', 'aiverse'));
//     $aiverse_topbar_instagram_url = get_theme_mod('aiverse_topbar_instagram_url', __('#', 'aiverse'));
//     $aiverse_topbar_linkedin_url = get_theme_mod('aiverse_topbar_linkedin_url', __('#', 'aiverse'));
//     $aiverse_topbar_youtube_url = get_theme_mod('aiverse_topbar_youtube_url', __('#', 'aiverse'));

//     if($aiverse_topbar_social_on){
        ?>
        <!-- <ul class="header__social__list">
            <?php if(!empty($aiverse_topbar_fb_url)): ?>
            <li><a href="<?php print esc_url($aiverse_topbar_fb_url); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_topbar_twitter_url)): ?>
            <li><a href="<?php print esc_url($aiverse_topbar_twitter_url); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_topbar_instagram_url)): ?>
            <li><a href="<?php print esc_url($aiverse_topbar_instagram_url); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_topbar_linkedin_url)): ?>
            <li><a href="<?php print esc_url($aiverse_topbar_linkedin_url); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_topbar_youtube_url)): ?>
            <li><a href="<?php print esc_url($aiverse_topbar_youtube_url); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <?php endif; ?>
        </ul> -->
    <?php
//     }
// }



// footer top social
function aiverse_footer_social(){
    $aiverse_footer_social_on = get_theme_mod('aiverse_footer_social_on', false);
    $aiverse_footer_fb_url = get_theme_mod('aiverse_footer_fb_url', __('#', 'aiverse'));
    $aiverse_footer_twitter_url = get_theme_mod('aiverse_footer_twitter_url', __('#', 'aiverse'));
    $aiverse_footer_instagram_url = get_theme_mod('aiverse_footer_instagram_url', __('#', 'aiverse'));
    $aiverse_footer_linkedin_url = get_theme_mod('aiverse_footer_linkedin_url', __('#', 'aiverse'));
    $aiverse_footer_youtube_url = get_theme_mod('aiverse_footer_youtube_url', __('#', 'aiverse'));

    if($aiverse_footer_social_on){
        ?>
        <ul class="footer__social__list">
            <?php if(!empty($aiverse_footer_fb_url)): ?>
            <li><a href="<?php print esc_url($aiverse_footer_fb_url); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_footer_twitter_url)): ?>
            <li><a href="<?php print esc_url($aiverse_footer_twitter_url); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_footer_instagram_url)): ?>
            <li><a href="<?php print esc_url($aiverse_footer_instagram_url); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_footer_linkedin_url)): ?>
            <li><a href="<?php print esc_url($aiverse_footer_linkedin_url); ?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <?php endif; ?>
            <?php if(!empty($aiverse_footer_youtube_url)): ?>
            <li><a href="<?php print esc_url($aiverse_footer_youtube_url); ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <?php endif; ?>
        </ul>
    <?php
    }
}


/**
 * [aiverse_header_menu description]
 * @return [type] [description]
 */

function aiverse_header_menu(){
    ?>
    <?php
        wp_nav_menu([
            'theme_location' => 'main-menu',
            'menu_class'     => 'links',
            'container'      => '',
            'fallback_cb'    => 'Aiverse_Navwalker_Class::fallback',
            'walker'         => new Aiverse_Navwalker_Class,
        ]);
        ?>
<?php
}



/**
 * [aiverse_mobile_menu description]
 * @return [type] [description]
 */
 function aiverse_mobile_menu(){
    ?>
    <?php
        $aiverse_menu = wp_nav_menu([
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'container'      => '',
            'menu_id'        => 'mobile-menu-active',
            'echo'           => false,
        ]);

        $aiverse_menu = str_replace("menu-item-has-children", "menu-item-has-children has-children", $aiverse_menu);
        echo wp_kses_post($aiverse_menu);
        ?>
<?php
}



/**
 * [aiverse_search_menu description]
 * @return [type] [description]
 */
function aiverse_header_search_menu()
{
    ?>
    <?php
        wp_nav_menu([
            'theme_location' => 'header-search-menu',
            'menu_class'     => '',
            'container'      => '',
            'fallback_cb'    => 'Aiverse_Navwalker_Class::fallback',
            'walker'         => new Aiverse_Navwalker_Class,
        ]);
        ?>
<?php
}


/**
 * [aiverse_footer_menu description]
 * @return [type] [description]
 */
function aiverse_footer_menu()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => 'm-0',
        'container'      => '',
        'fallback_cb'    => 'Aiverse_Navwalker_Class::fallback',
        'walker'         => new Aiverse_Navwalker_Class,
    ]);
}

/**
 * [aiverse_category_menu description]
 * @return [type] [description]
 */
function aiverse_category_menu()
{
    wp_nav_menu([
        'theme_location' => 'category-menu',
        'menu_class'     => 'cat-submenu m-0',
        'container'      => '',
        'fallback_cb'    => 'Aiverse_Navwalker_Class::fallback',
        'walker'         => new Aiverse_Navwalker_Class,
    ]);
}




/**
 * aiverse footer
 */
add_action('aiverse_footer_style', 'aiverse_check_footer', 10);

/**
 * Check footer style and include corresponding template part.
 *
 * Checks the footer style via ACF field 'footer_style' or theme mod 'choose_default_footer'.
 * If the field is set, the corresponding template part is included.
 * If the field is not set, the default footer style is used (footer-style-1).
 */
function aiverse_check_footer()
{
    $aiverse_footer_style = function_exists('get_field') ? get_field('footer_style') : NULL;
    $aiverse_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-1');

    if ($aiverse_footer_style == 'footer-style-1') {
        get_template_part('template-parts/footer/footer-1');
    } elseif ($aiverse_footer_style == 'footer-style-2') {
        get_template_part('template-parts/footer/footer-2');
    } else {
        /** default footer style **/
        if ($aiverse_default_footer_style == 'footer-style-2') {
            get_template_part('template-parts/footer/footer-2');
        } else {
            get_template_part('template-parts/footer/footer-1');
        }
    }
}

// aiverse_copyright_text
function aiverse_copyright_text(){
    $home_url = esc_url(home_url('/')); // Get the home URL
    $copyright_text = get_theme_mod('aiverse_copyright', 'Copyright © 2024 <a href="' . $home_url . '">ai verse</a> - All Rights Reserved');
    echo wp_kses($copyright_text, array(
        'a' => array(
            'href' => array(),
        ),
    ));
}


/**
 * pagination
 */
if (!function_exists('aiverse_pagination')) {

    function _aiverse_pagi_callback($pagination){
        return $pagination;
    }

    //page navegation
    function aiverse_pagination($prev, $next, $pages, $args){
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }

        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<ul>';
            foreach ($paginations as $key => $pg) {
                $pagi .= '<li>' . $pg . '</li>';
            }
            $pagi .= '</ul>';
        }

        print _aiverse_pagi_callback($pagi);
    }
}





// header top bg color
function aiverse_breadcrumb_bg_color()
{
    $color_code = get_theme_mod('aiverse_breadcrumb_bg_color', '#222');
    wp_enqueue_style('aiverse-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', []);
    if ($color_code != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.gray-bg{ background: " . $color_code . "}";

        wp_add_inline_style('aiverse-breadcrumb-bg', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'aiverse_breadcrumb_bg_color');

// breadcrumb-spacing top
function aiverse_breadcrumb_spacing()
{
    $padding_px = get_theme_mod('aiverse_breadcrumb_spacing', '160px');
    wp_enqueue_style('aiverse-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-top: " . $padding_px . "}";

        wp_add_inline_style('aiverse-breadcrumb-top-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'aiverse_breadcrumb_spacing');

// breadcrumb-spacing bottom
function aiverse_breadcrumb_bottom_spacing()
{
    $padding_px = get_theme_mod('aiverse_breadcrumb_bottom_spacing', '160px');
    wp_enqueue_style('aiverse-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', []);
    if ($padding_px != '') {
        $custom_css = '';
        $custom_css .= ".breadcrumb-spacing{ padding-bottom: " . $padding_px . "}";

        wp_add_inline_style('aiverse-breadcrumb-bottom-spacing', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'aiverse_breadcrumb_bottom_spacing');


// // scrollup
// function aiverse_scrollup_switch()
// {
//     $scrollup_switch = get_theme_mod('aiverse_scrollup_switch', false);
//     wp_enqueue_style('aiverse-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', []);
//     if ($scrollup_switch) {
//         $custom_css = '';
//         $custom_css .= "#scrollUp{ display: none !important;}";

//         wp_add_inline_style('aiverse-scrollup-switch', $custom_css);
//     }
// }
// add_action('wp_enqueue_scripts', 'aiverse_scrollup_switch');


// // theme color
// function aiverse_custom_color()
// {
//     // Primary Color
//     $color_code = get_theme_mod('aiverse_color_option', '');
//     $custom_css = '';

//     if ($color_code != '') {
//         $custom_css .= ":root{
//             --p1: $color_code !important; 
//         }";
//     }

//     // Secondary Color
//     $color_code2 = get_theme_mod('aiverse_color_option_2', '');
//     $custom_css2 = '';

//     if ($color_code2 != '') {
//         $custom_css2 .= ":root{
//             --s1: $color_code2 !important; 
//         }";
//     }

//     // Enqueue and add inline styles for Primary Color
//     wp_register_style('aiverse-custom', false);
//     wp_enqueue_style('aiverse-custom', false);
//     wp_add_inline_style('aiverse-custom', $custom_css, true);

//     // Enqueue and add inline styles for Secondary Color
//     wp_register_style('aiverse-custom-2', false);
//     wp_enqueue_style('aiverse-custom-2', false);
//     wp_add_inline_style('aiverse-custom-2', $custom_css2, true);
// }
// add_action('wp_enqueue_scripts', 'aiverse_custom_color');


// // theme color
// function aiverse_custom_color_scrollup(){
//     $color_code = get_theme_mod('aiverse_color_scrollup', '#2b4eff');
//     wp_enqueue_style('aiverse-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', []);
//     if ($color_code != '') {
//         $custom_css = '';
//         $custom_css .= ".demo-class { color: " . $color_code . "}";
//         $custom_css .= ".demo-class { stroke: " . $color_code . "}";
//         wp_add_inline_style('aiverse-custom', $custom_css);
//     }
// }
// add_action('wp_enqueue_scripts', 'aiverse_custom_color_scrollup');

// // theme color
// function aiverse_custom_color_secondary(){
//     $color_code = get_theme_mod('aiverse_color_option_3', '#30a820');
//     wp_enqueue_style('aiverse-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', []);
//     if ($color_code != '') {
//         $custom_css = '';
//         $custom_css .= ".demo-class { background-color: " . $color_code . "}";

//         $custom_css .= ".demo-class { color: " . $color_code . "}";

//         $custom_css .= ".asdf { border-color: " . $color_code . "}";
//         wp_add_inline_style('aiverse-custom', $custom_css);
//     }
// }
// add_action('wp_enqueue_scripts', 'aiverse_custom_color_secondary');

// // theme color
// function aiverse_custom_color_secondary_2(){
//     $color_code = get_theme_mod('aiverse_color_option_3_2', '#ffb352');
//     wp_enqueue_style('aiverse-custom', AIVERSE_THEME_CSS_DIR . 'theme-custom.css', []);
//     if ($color_code != '') {
//         $custom_css = '';
//         $custom_css .= ".demo-class { background-color: " . $color_code . "}";

//         $custom_css .= ".demo-class { color: " . $color_code . "}";

//         $custom_css .= ".demo-class { border-color: " . $color_code . "}";
//         wp_add_inline_style('aiverse-custom', $custom_css);
//     }
// }
// add_action('wp_enqueue_scripts', 'aiverse_custom_color_secondary_2');


// aiverse_kses_intermediate
function aiverse_kses_intermediate($string = ''){
    return wp_kses($string, aiverse_get_allowed_html_tags('intermediate'));
}

function aiverse_get_allowed_html_tags($level = 'basic')
{
    $allowed_html = [
        'b'      => [],
        'i'      => [],
        'u'      => [],
        'em'     => [],
        'br'     => [],
        'abbr'   => [
            'title' => [],
        ],
        'span'   => [
            'class' => [],
        ],
        'strong' => [],
        'a'      => [
            'href'  => [],
            'title' => [],
            'class' => [],
            'id'    => [],
        ],
    ];

    if ($level === 'intermediate') {
        $allowed_html['a'] = [
            'href' => [],
            'title' => [],
            'class' => [],
            'id' => [],
        ];
        $allowed_html['div'] = [
            'class' => [],
            'id' => [],
        ];
        $allowed_html['img'] = [
            'src' => [],
            'class' => [],
            'alt' => [],
        ];
        $allowed_html['del'] = [
            'class' => [],
        ];
        $allowed_html['ins'] = [
            'class' => [],
        ];
        $allowed_html['bdi'] = [
            'class' => [],
        ];
        $allowed_html['i'] = [
            'class' => [],
            'data-rating-value' => [],
        ];
    }

    return $allowed_html;
}


// WP kses allowed tags
// ----------------------------------------------------------------------------------------
function aiverse_kses($raw){
    $allowed_tags = array(
        'a' => array(
            'class'   => array(),
            'href'    => array(),
            'rel'  => array(),
            'title'   => array(),
            'target' => array(),
        ),
        'abbr' => array(
            'title' => array(),
        ),
        'b'  => array(),
        'blockquote'  => array(
            'cite' => array(),
        ),
        'cite'  => array(
            'title' => array(),
        ),
        'code' => array(),
        'del' => array(
            'datetime' => array(),
            'title' => array(),
        ),
        'dd' => array(),
        'div'=> array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'dl' => array(),
        'dt' => array(),
        'em' => array(),
        'h1' => array(),
        'h2' => array(),
        'h3' => array(),
        'h4' => array(),
        'h5' => array(),
        'h6' => array(),
        'i'  => array(
            'class' => array(),
        ),
        'img' => array(
            'alt' => array(),
            'class' => array(),
            'height' => array(),
            'src'  => array(),
            'width'   => array(),
        ),
        'li' => array(
            'class' => array(),
        ),
        'ol' => array(
            'class' => array(),
        ),
        'p'  => array(
            'class' => array(),
        ),
        'q'  => array(
            'cite' => array(),
            'title' => array(),
        ),
        'span'  => array(
            'class' => array(),
            'title' => array(),
            'style' => array(),
        ),
        'iframe'   => array(
            'width' => array(),
            'height' => array(),
            'scrolling' => array(),
            'frameborder' => array(),
            'allow'=> array(),
            'src' => array(),
        ),
        'strike'   => array(),
        'br' => array(),
        'strong'   => array(),
        'data-wow-duration' => array(),
        'data-wow-delay' => array(),
        'data-wallpaper-options' => array(),
        'data-stellar-background-ratio' => array(),
        'ul' => array(
            'class' => array(),
        ),
        'svg' => array(
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ),
        'g'     => array('fill' => true),
        'title' => array('title' => true),
        'path'  => array('d' => true, 'fill' => true,),
    );

    if (function_exists('wp_kses')) { // WP is here
        $allowed = wp_kses($raw, $allowed_tags);
    } else {
        $allowed = $raw;
    }

    return $allowed;
}



function aiverse_menu_custom_color(){
    // Default Menu Color
    $aiverse_menu_color = get_theme_mod('aiverse_menu_color', '');
    $custom_menu_css = '';
    if ($aiverse_menu_color != '') {
        $custom_menu_css .= ".header-section .navbar .navbar-nav li a{
            color: $aiverse_menu_color !important;
        }";
    }
    // Active Menu Color
    $aiverse_menu_active_color = get_theme_mod('aiverse_menu_active_color', '');
    $custom_menu_css_active = '';
    if ($aiverse_menu_active_color != '') {
        $custom_menu_css_active .= ".current-menu-ancestor > a{
            color: $aiverse_menu_active_color !important;
        }";
    }
    // Menu Hover Color
    $aiverse_menu_hover_color = get_theme_mod('aiverse_menu_hover_color', '');
    $custom_menu_css_hover = '';
    if ($aiverse_menu_hover_color != '') {
        $custom_menu_css_hover .= ".header-section .navbar .navbar-nav li a.active, .header-section .navbar .navbar-nav li a:hover{
            color: $aiverse_menu_hover_color !important;
        }";
    }

    // Button One Color
    $aiverse_button_one_color = get_theme_mod('aiverse_button_one_color', '');
    $custom_menu_css_info = '';
    if ($aiverse_button_one_color != '') {
        $custom_menu_css_info .= ".header-section.header-menu .single-item a.rotate_eff{
              color: $aiverse_button_one_color !important;
          }";
    }
    // Button One Hover Color
    $aiverse_button_one_hover_color = get_theme_mod('aiverse_button_one_hover_color', '');
    $custom_menu_css_search = '';
    if ($aiverse_button_one_hover_color != '') {
        $custom_menu_css_search .= ".header-section.header-menu .single-item a.rotate_eff:hover{
              color: $aiverse_button_one_hover_color !important;
          }";
    }
    
    // // Button Two Background
    // $aiverse_button_two_color = get_theme_mod('aiverse_button_two_color', '');
    // $custom_menu_css_search2 = '';
    // if ($aiverse_button_two_color != '') {
    //     $custom_menu_css_search2 .= ".header-section a.cmn-btn.fw-bold.py-2.px-2.px-sm-3.px-lg-4.align-items-center.gap-1{
    //           background: $aiverse_button_two_color !important;
    //       }";
    // }

    // Button two hover background
    $aiverse_button_two_hover_color = get_theme_mod('aiverse_button_two_hover_color', '');
    $custom_menu_css_buttom = '';
    if ($aiverse_button_two_hover_color != '') {
        $custom_menu_css_buttom .= ".header-section .cmn-btn::before,.header-section .cmn-btn::after{
              background: $aiverse_button_two_hover_color !important;
          }";
    }




    // Enqueue and add inline styles for menu Color
    wp_register_style('aiverse-menu-custom', false);
    wp_enqueue_style('aiverse-menu-custom', false);
    wp_add_inline_style('aiverse-menu-custom', $custom_menu_css, true);

    // Enqueue and add inline styles for Secondary menu Color
    wp_register_style('aiverse-menu-custom-2', false);
    wp_enqueue_style('aiverse-menu-custom-2', false);
    wp_add_inline_style('aiverse-menu-custom-2', $custom_menu_css_active, true);

    // Enqueue and add inline styles for menu hover Color
    wp_register_style('aiverse-menu-hover-custom', false);
    wp_enqueue_style('aiverse-menu-hover-custom', false);
    wp_add_inline_style('aiverse-menu-hover-custom', $custom_menu_css_hover, true);


    // Enqueue and add inline styles for button Color
    wp_register_style('aiverse-menu-custom-contact-color', false);
    wp_enqueue_style('aiverse-menu-custom-contact-color', false);
    wp_add_inline_style('aiverse-menu-custom-contact-color', $custom_menu_css_info, true);

    // Enqueue and add inline styles for search bg
    wp_register_style('aiverse-menu-custom-search', false);
    wp_enqueue_style('aiverse-menu-custom-search', false);
    wp_add_inline_style('aiverse-menu-custom-search', $custom_menu_css_search, true);

    // // Enqueue and add inline styles for search Color
    // wp_register_style('aiverse-menu-custom-search2', false);
    // wp_enqueue_style('aiverse-menu-custom-search2', false);
    // wp_add_inline_style('aiverse-menu-custom-search2', $custom_menu_css_search2, true);

    // Enqueue and add inline styles for button bg
    wp_register_style('aiverse-menu-custom-button', false);
    wp_enqueue_style('aiverse-menu-custom-button', false);
    wp_add_inline_style('aiverse-menu-custom-button', $custom_menu_css_buttom, true);
}
add_action('wp_enqueue_scripts', 'aiverse_menu_custom_color');