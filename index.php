<?php
/**
 * Template Name: Blog
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiverse
 */

get_header();
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 8 : 12;

?>

  <!-- blog start -->
  <section class="blog pt__120 mb__60">
    <div class="container">
      <div class="row g-4">

        <div class="col-lg-<?php print esc_attr( $blog_column );?> blog-post-items">
          <div class="postbox__wrapper">
			<?php
				if ( have_posts() ):
				if ( is_home() && !is_front_page() ):
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title();?></h1>
			</header>
			<?php 
          endif;
			/* Start the Loop */
			while ( have_posts() ): the_post();
            ?>
					<?php
						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_format() );?>
					<?php
						endwhile;
					?>
					<nav aria-label="Page navigation" class="d-flex mt-15">
			<div class="basic-pagination mb-40 pagination justify-content-left">
				<?php aiverse_pagination( '<i class="fal fa-arrow-left"></i>', '<i class="fal fa-arrow-right"></i>', '', ['class' => ''] );?>
			</div>
				</nav>
					<?php
					else:
						get_template_part( 'template-parts/content', 'none' );
					endif;
				?>
			</div>
      </div>

			<?php if ( is_active_sidebar( 'blog-sidebar' ) ): ?>
		        <div class="col-lg-4">
		        	<div class="blog__sidebar">
						<?php get_sidebar();?>
	            </div>
	          </div>
			<?php endif;?>
      </div>
    </div>
  </section>
  <!-- latest news end -->


  <?php get_footer(); ?>