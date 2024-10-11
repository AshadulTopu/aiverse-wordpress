<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiverse
 */

 if ( is_single() ) : ?>
 <!-- single/detail post -->
    <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item format-image mb-50' );?>>
        <?php if ( has_post_thumbnail() ): ?>
            <div class="postbox__thumb">
                <?php the_post_thumbnail( 'blog-details', ['class' => 'img-responsive w-100'] );?>
            </div>
        <?php endif;?>

        <div class="postbox__content">
            <!-- blog meta -->
            <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>
            <h3 class="postbox__title">
                <?php the_title();?>
            </h3>
            <div class="postbox__text">
               <?php the_content();?>
                <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'aiverse' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
            </div>
            <?php print aiverse_get_tag();?>
        </div>
    </article>
<?php else:
    // blog list post
    ?>

     <article id="post-<?php the_ID();?>" <?php post_class( 'postbox__item blog__page__content__2 wow fadeInDown' );?>>

        <?php if ( has_post_thumbnail() ): ?>
        <div class="blog__content__img">
          <div class="blog__img">
            <!-- <img src="assets/images/news_img/blog_1.png" class="w-100" alt="blog"> -->
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail( 'blog-post', ['class' => 'img-responsive w-100'] );?>
            </a>
          </div>
        </div>
        <?php endif;?>

        <div class="blog__content__text postbox__content">
        <!-- blog meta -->
        <?php get_template_part( 'template-parts/blog/blog-meta' ); ?>

          <a href=<?php the_permalink();?>>
            <h4 class="postbox__title fs__40 mt__32 mb__10 fw-bold secondary__2">
              <?php the_title();?>
            </h4>
          </a>
            <div class="postbox__text">
                <?php the_excerpt();?>
            </div>
          <div class="mt__32">

            <!-- blog btn -->
            <?php get_template_part( 'template-parts/blog/blog-btn' ); ?>
            </a>
          </div>
        </div>
      </article>

<?php endif;?>