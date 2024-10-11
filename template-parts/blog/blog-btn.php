<?php

/**
 * Template part for displaying post btn
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiverse
 */

$aiverse_blog_btn = get_theme_mod( 'aiverse_blog_btn', 'Read More' );
$aiverse_blog_btn_switch = get_theme_mod( 'aiverse_blog_btn_switch', true );

?>

<?php if ( !empty( $aiverse_blog_btn_switch ) ): ?>
<div class="postbox__read-more">
    <a href="<?php the_permalink();?>" class="fs__20 secondary__2 fw-medium text-capitalize btn__hover__text__primary"><?php print esc_html( $aiverse_blog_btn );?>
<i class="fa-solid fa-arrow-right ms-2"></i>
</a>
</div>
<?php endif;?>