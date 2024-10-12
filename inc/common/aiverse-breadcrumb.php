<?php

function aiverse_breadcrumb_func(){
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;


    if (is_front_page() && is_home()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'aiverse'));
        $breadcrumb_class = 'home_front_page';
    } elseif (is_front_page()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog', 'aiverse'));
        $breadcrumb_show = 0;
    } elseif (is_home()) {
        if (get_option('page_for_posts')) {
            $title = get_the_title(get_option('page_for_posts'));
        }
    } elseif (is_single() && 'post' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'product' == get_post_type()) {
        $title = get_theme_mod('breadcrumb_product_details', __('Shop', 'aiverse'));
    } 
    // elseif (is_single() && 'courses' == get_post_type()) {
    //     $title = esc_html__('Course Details', 'aiverse');
    // } elseif ('courses' == get_post_type()) {
    //     $title = esc_html__('Courses', 'aiverse');
    // } 
    elseif (is_search()) {
        $title = esc_html__('Search Results for : ', 'aiverse') . get_search_query();
    } elseif (is_404()) {
        $title = esc_html__('Page not Found', 'aiverse');
    } 
    // elseif (function_exists('is_woocommerce') && is_woocommerce()) {
    //     $title = get_theme_mod('breadcrumb_shop', __('Shop', 'aiverse'));
    // } 
    elseif (is_archive()) {
        $title = get_the_archive_title();
    } else {
        $title = get_the_title();
    }

    $_id = get_the_ID();

    if (is_single() && 'product' == get_post_type()) {
        $_id = $post->ID;
    } elseif (function_exists("is_shop") and is_shop()) {
        $_id = wc_get_page_id('shop');
    } elseif (is_home() && get_option('page_for_posts')) {
        $_id = get_option('page_for_posts');
    }

    $is_breadcrumb = function_exists('get_field') ? get_field('is_it_invisible_breadcrumb', $_id) : '';
    if (!empty($_GET['s'])) {
        $is_breadcrumb = null;
    }

    if (empty($is_breadcrumb) && $breadcrumb_show == 1) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image', $_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image', $_id) : '';

        // get_theme_mod
        $bg_img = get_theme_mod('breadcrumb_bg_img');
        $breadcrumb_switch = get_theme_mod('breadcrumb_switch', true);

        if ($hide_bg_img && empty($_GET['s'])) {
            $bg_img = '';
        } else {
            $bg_img = !empty($bg_img_from_page) ? $bg_img_from_page['url'] : $bg_img;
        } ?>

        <!-- page title area start -->
        <?php if (!empty($breadcrumb_switch)) : ?>
            <section class="hero bg__secondary__1 py__80 mb__n1 wow fadeInDown" style="background-image: url('<?php echo esc_url($bg_img); ?>');">
                <div class="container position-relative">
                <div class="position-relative">
                    <div class="ball_img_3 d-none d-lg-block rotate">
                    <img src="<?php echo get_template_directory_uri(); ?> /assets/images/ball.png" alt="<?php echo esc_attr__('ball', 'aiverse'); ?>">
                    </div>

                    <div class="robot__img d-none d-lg-block">
                    <div class="robot__circle rotat">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/robot_circle.png" alt="<?php echo esc_attr__('robot_circle', 'aiverse'); ?>">
                    </div>
                    <div class="robot__body jumping_2">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/robot_body.png" alt="<?php echo esc_attr__('robot_body', 'aiverse'); ?>">
                    </div>
                    <div class="robot__base jumping_1">
                        <img src="<?php echo get_template_directory_uri(); ?> /assets/images/robot_base.png" alt="<?php echo esc_attr__('robot_base', 'aiverse'); ?>">
                    </div>
                    </div>
                </div>
                <h2 class="fs__64 text-white fw-bolder text-center text-capitalize mb-3  wow fadeInDown"><?php echo wp_kses_post($title); ?></h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center align-items-center">
                        <?php 
                            if (function_exists('bcn_display')) {
                                 bcn_display();
                            }
                        ?>
                    <!-- <li class="breadcrumb-item">
                        <a href="index.html" class="text-white fs__20 text-capitalize">Home</a>
                    </li> -->
                    <!-- <li class="breadcrumb-item text-white fs__20 text-capitalize text-decoration-underline " aria-current="page">
                        blog page</li> -->
                    </ol>
                </nav>
                </div>
            </section>

            <section style="background-image: url('<?php echo esc_url($bg_img); ?>');" class="banner-section  pt-120 pb-120 d-none">
                <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
                    <div class="row">
                        <div class="col-12 breadcrumb-area ">
                            <h2 class="mb-4"><?php echo wp_kses_post($title); ?></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <?php 
                                        if (function_exists('bcn_display')) {
                                                    bcn_display();
                                        }
                                    ?>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- page title area end -->
    <?php
        }
    }
    add_action('aiverse_before_main_content', 'aiverse_breadcrumb_func');

    

    // aiverse_search_form
    function aiverse_search_form()
    {
        ?>
    <!-- <div class="search-wrapper p-relative transition-3 d-none">
        <div class="search-form transition-3">
            <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Enter Your Keyword', 'aiverse'); ?>">
                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
            </form>
            <a href="javascript:void(0);" class="search-close"><i class="far fa-times"></i></a>
        </div>
    </div> -->
<?php
}

add_action('aiverse_before_main_content', 'aiverse_search_form');
