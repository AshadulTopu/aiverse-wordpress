
<?php 

/**
 * Template part for displaying post meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiverse
 */

// $categories = get_the_terms( $post->ID, 'category' );
$aiverse_blog_date = get_theme_mod( 'aiverse_blog_date', true );
// $aiverse_blog_comments = get_theme_mod( 'aiverse_blog_comments', true );
$aiverse_blog_author = get_theme_mod( 'aiverse_blog_author', true );
// $aiverse_blog_cat = get_theme_mod( 'aiverse_blog_cat', false );

?>


<div class="postbox__meta d-flex align-items-center gap-4">
    <?php if ( !empty($$aiverse_blog_author) ): ?>
    <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>" class="d-flex align-items-center gap-3">
        <img class="rounded-circle" src="<?php echo get_avatar_url(get_the_author_meta('ID'));?>" width="50" height="50" alt="admin">
        <span class="fs__20 secondary__2 fw-medium text-capitalize"><?php echo esc_html__(' By','aiverse')?> <?php print get_the_author();?></span>
    </a>
    <?php endif; ?>
    
    <?php if ( !empty($aiverse_blog_date) ): ?>
    <p class="fs__14 py-2 px-sm-4 px-3 fw-medium secondary__2 bg__primary__2 d-inline-block rounded-pill m-0">
        <?php the_time( get_option('date_format') ); ?>
    </p>
    <?php endif; ?>
</div>
