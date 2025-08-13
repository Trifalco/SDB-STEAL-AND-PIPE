<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="site-header mo-left header style-2">

<!--Menu desde wordpress-->

      <!-- Main Header -->
      <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
                     <div class="container-fluid clearfix">
            

        <div class="logo-header mostion logo-white">
         <!--Logo desde wordpress-->
<?php
$front_page_id = get_option('page_on_front');
$logo = get_field('logo_header', $front_page_id);

if ($logo): ?>
    <div class="logo ">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
        </a>
    </div>
<?php endif; ?>
        </div>
        
        <!-- Full Side Navigation Modal -->
        <div class="full-sidenav" id="fullSidenav">
          <!-- Mobile Side Navigation -->
<div class="mobile-sidenav" id="mobileSidenav">

  <button class="close-btn" id="closeMobileMenu">×</button>
  <ul>
        <?php
 wp_nav_menu([
     'theme_location' => 'primary',
        'container' => 'nav',
        'container_class' => 'main-nav',
        'menu_class' => 'navbar-nav',
        'depth' => 2,
  ]);

?>
  </ul>
</div>
          <div class="container">
            <button class="close-btn" id="closeMenu">×</button>
            <div class="row">
              <div class="col-lg-6">
                <div class="service-list">
                  <ul>
                    <li>
                      <i class="fas fa-phone"></i>
                      <span>Make A Call</span>
                      <h4 class="title">+1 (713) 475-0048</h4>
                    </li>
                    <li>
                      <i class="fas fa-envelope"></i>
                      <span>Email Address</span>
                      <h4 class="title">contact@thesdbgroup.com</h4>
                    </li>
                    <li>
                      <i class="fas fa-map-marker-alt"></i>
                      <span>Location</span>
                      <h4 class="title">11200 Richmond Ave, Ste 180,<br>Houston, TX 77082</h4>
                    </li>
                  </ul>
                </div>
                <div class="social-menu">
                  <ul>
                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/SDBSteelandPipe" target="_blank"></a></li>
                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/company/sdb-steel-and-pipe/" target="_blank"></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <h4>About Us</h4>
                <p>We provide high-quality products and services to meet the ever-evolving demands of the oil &amp; gas, ESG, industrial fabrication, petrochemical, EPC, and aerospace industries. Since our start in 2000, SDB Steel &amp; Pipe is one of the largest stockists of OCTG, PVF Products, and Midstream Products in the US and Canada. We are committed to maintaining the highest quality, safety, and responsibility standards.</p>
                <a href="<?php echo home_url('/about-us'); ?>" class="btn btn-info">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>


        <div class="header-nav navbar-collapse  collapse justify-content-center" id="navbarNavDropdown">
          
<ul class="nav navbar-nav mx-auto show">
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'container' => false,
    'items_wrap' => '%3$s',  // SOLO los <li>
    'depth' => 2,
    'fallback_cb' => false,
  ]);
  ?>
</ul>
<ul>
  <!-- Nav Toggle Button -->
<button class="navbar-toggler" type="button" id="menuToggle">
<span></span>
<span></span>
<span></span>
</button>

</ul>
      
<!--
          <div class="dz-social-icon">
            <ul>
              <li><a class="fab fa-facebook-f" href="https://www.facebook.com/SDBSteelandPipe" target="_blank"></a></li>
              <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/company/sdb-steel-and-pipe/" target="_blank"></a></li>
            </ul>
          </div>

          -->

          
        </div>
      </div>
    </div>
  </div>
  <!-- Main Header End -->
</header>
