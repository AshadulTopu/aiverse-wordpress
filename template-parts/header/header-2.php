<?php

/**
 * Template part for displaying header layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aiverse
 */


 // button switch
$aiverse_btnone_switch = get_theme_mod('aiverse_btnone_switch', false);
// $aiverse_btntwo_switch = get_theme_mod('aiverse_btntwo_switch', false);

// contact button
$aiverse_buttonone_text = get_theme_mod('aiverse_btnone_text', __('Get Started', 'aiverse'));
$aiverse_buttonone_link = get_theme_mod('aiverse_btnone_link', __('#', 'aiverse'));
// $aiverse_buttontwo_text = get_theme_mod('aiverse_btntwo_text', __('Sign Up', 'aiverse'));
// $aiverse_buttontwo_link = get_theme_mod('aiverse_btntwo_link', __('#', 'aiverse'));


// header right
$aiverse_header_right = get_theme_mod('aiverse_header_right', false);
// $aiverse_menu_col = $aiverse_header_right ? 'col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block' : 'col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block text-end';
?>

  <!-- Header start  -->
  <header class="bg__secondary__1 header_section border__bottom__black">
    <div class="container">
      <nav>
        <div class="navbar">
          <i class="fa-solid fa-bars" id="shownav"></i>
          <div class="logo border__right__black_2">
          <?php aiverse_header_logo(); ?>
          </div>
          <div class="nav-links">
            <?php aiverse_mobile_logo(); ?>

            <?php aiverse_header_menu(); ?>
            <ul class="links d-none">
              <li>
                <span class="dropdown_menu">HOME
                  <i class="fa-solid fa-chevron-down up-arrow arrow"></i>
                </span>
                <ul class="sub-menu dropdown_item">
                  <li><a href="index.html">Home 1</a></li>
                  <li><a href="index-2.html">Home 2</a></li>
                  <li><a href="index-3.html">Home 3</a></li>
                </ul>
              </li>
              <li>
                <span class="dropdown_menu">About
                  <i class="fa-solid fa-chevron-down up-arrow arrow"></i>
                </span>
                <ul class="sub-menu dropdown_item">
                  <li><a href="aboutus-1.html">About 1</a></li>
                  <li><a href="aboutus-2.html">About 2</a></li>
                </ul>
              </li>
              <li>
                <span class="dropdown_menu">
                  Blog
                  <i class="fa-solid fa-chevron-down up-arrow arrow"></i>
                </span>
                <ul class="sub-menu dropdown_item">
                  <li><a href="blog-1.html">blog 1</a></li>
                  <li><a href="blog-2.html">Blog 2</a></li>
                  <li><a href="blog-details.html">blog details</a></li>
                </ul>
              </li>
              <li><a href="pricing.html">Pricing</a></li>

              <li><span class="dropdown_menu">shop
                  <i class="fa-solid fa-chevron-down up-arrow arrow"></i>
                </span>
                <ul class="sub-menu dropdown_item">
                  <li><a href="shoppage.html">Shopping</a></li>
                  <li><a href="Product-single.html">product single page</a></li>
                  <li><a href="shoping-cart.html">shopping cart</a></li>
                  <li><a href="checkout-page.html">checkout page</a></li>
                </ul>
              </li>
              <li>
                <span class="dropdown_menu">Pages
                  <i class="fa-solid fa-chevron-down up-arrow arrow"></i>
                </span>
                <ul class="sub-menu dropdown_item">
                  <li><a href="services-page.html">services page</a></li>
                  <li><a href="services-details.html">services details</a></li>
                  <li><a href="faq.html">Faq’s</a></li>
                  <li><a href="team.html">team</a></li>
                  <li><a href="register.html">register</a></li>
                  <li><a href="log-in.html">login</a></li>
                  <li><a href="thank-you.html">Thank you</a></li>
                  <li><a href="error.html">error</a></li>
                </ul>
              </li>
              <li><a href="contact.html">contact</a></li>
            </ul>

          </div>

         <?php if (!empty($aiverse_btnone_switch)) : ?>
            <?php if( !empty($aiverse_buttonone_text) ) : ?>
          <div class="header_btn">
            <a class="bg__primary__1 fs__16 rounded-pill py-2 px-xl-4 px-3 text-white btn__hover d-block"
              href=<?php echo esc_url($aiverse_buttonone_link) ?>>
            <?php echo esc_html($aiverse_buttonone_text) ?>
            </a>
          </div>
          <?php endif; ?>
         <?php endif; ?>

        </div>
      </nav>
    </div>
  </header>
  <!-- Header end  -->










