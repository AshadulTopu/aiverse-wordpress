<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aiverse_widgets_init() {

    $footer_style_2_switch = get_theme_mod( 'footer_style_2_switch', false );
    $footer_style_3_switch = get_theme_mod( 'footer_style_3_switch', false );
    $footer_style_4_switch = get_theme_mod( 'footer_style_4_switch', false );

    /**
     * blog sidebar
     */
    register_sidebar( [
        'name'          => esc_html__( 'Blog Sidebar', 'aiverse' ),
        'id'            => 'blog-sidebar',
        'description'          => esc_html__( 'Set Your Blog Widget', 'aiverse' ),
        'before_widget' => '<div id="%1$s" class="nb3-bg cus-rounded-1 p-4 p-lg-6 sidebar__widget mb-25 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="pb-5 mb-5 border-bottom border-color four">',
        'after_title'   => '</h5>',
    ] );


    $footer_widgets = get_theme_mod( 'footer_widget_number', 4 );

    // footer default
    for ( $num = 1; $num <= $footer_widgets; $num++ ) {
        register_sidebar( [
            'name'          => sprintf( esc_html__( 'Footer %1$s', 'aiverse' ), $num ),
            'id'            => 'footer-' . $num,
            'description'   => sprintf( esc_html__( 'Footer column %1$s', 'aiverse' ), $num ),
            'before_widget' => '<div id="%1$s" class="footer__part footer__widget footer-col-'.$num.' %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="mb-6 mb-lg-8 footer__widget-title">',
            'after_title'   => '</h4>',
        ] );
    }


}
add_action( 'widgets_init', 'aiverse_widgets_init' );