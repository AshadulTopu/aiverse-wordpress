<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aiverse
 */

get_header();
?>

<section class="error__area pt-200 pb-200">
   <div class="container">
      <div class="row">
         <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
            <?php 
               $aiverse_404_bg = get_theme_mod('aiverse_404_bg',get_template_directory_uri() . '/assets/images/error.png');
               $aiverse_error_title = get_theme_mod('aiverse_error_title', __('Page not found', 'aiverse'));
               $aiverse_error_link_text = get_theme_mod('aiverse_error_link_text', __('Back To Home', 'aiverse'));
               $aiverse_error_desc = get_theme_mod('aiverse_error_desc', __('Oops! The page you are looking for does not exist. It might have been moved or deleted.', 'aiverse'));
            ?>
            <div class="error__item text-center">
               <div class="error__thumb mb-45">
                  <img src="<?php echo esc_url($aiverse_404_bg); ?>" alt="<?php print esc_attr__('Error 404','aiverse'); ?>">
               </div>
               <div class="error__content">
                  <h3 class="mb-4 mb-lg-5 error__title"><?php print esc_html($aiverse_error_title);?></h3>
                  <p class="fs-six"><?php print esc_html($aiverse_error_desc);?></p>
                  <a href="<?php print esc_url(home_url('/'));?>" class="cmn-btn fs-six-up nb4-xxl-bg gap-2 gap-lg-3 align-items-center py-2 px-3 py-lg-3 px-lg-4 mt-7 mt-xxl-8"><?php print esc_html($aiverse_error_link_text);?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php
get_footer();
