<?php get_header(); ?>
<?php the_content(); ?>


<main>
<!-- new section-->
 <section class="hero-section">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php for ($i = 1; $i <= 3; $i++): 
      $image = get_field("slide_{$i}_image");
      $title = get_field("slide_{$i}_title");
      $text = get_field("slide_{$i}_text");
      $button_text = get_field("slide_{$i}_button_text");
      $button_url = get_field("slide_{$i}_button_url");
      if (!$image) continue;
    ?>
      <div class="carousel-item <?php if ($i === 1) echo 'active'; ?>">
        <div class="d-block w-100 hero-slide" 
          style="background-image: url('<?php echo esc_url($image['url']); ?>');">
          <div class="hero-overlay"></div>
          <div class="container h-100 d-flex align-items-center justify-content-center flex-column">
           <div class="text-white text-start w-100">
  <?php if ($title): ?>
    <h1 class="display-4 animate__animated animate__fadeInRight  animate__delay-0.5s animate__slow"><?php echo esc_html($title); ?></h1>
  <?php endif; ?>

  <?php if ($text): ?>
    <p class="lead animate__animated animate__fadeInRight animate__delay-1s animate__slow "><?php echo esc_html($text); ?></p>
  <?php endif; ?>

  <?php if ($button_text && $button_url): ?>
    <a href="<?php echo esc_url($button_url); ?>" class="btn btn-primary btn-lg mt-3 animate__animated animate__fadeInRight  animate__delay-1s animate__slow">
      <?php echo esc_html($button_text); ?>
    </a>
  <?php endif; ?>
</div>
          </div>
          <!-- ↓ Icono hacia abajo -->
          <div class="scroll-down-icon">
            <a href="#offerings-section">
              <i class="fas fa-chevron-down"></i>
            </a>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </button>
</div>



  </section>


  <!-- Our Offerings Section -->
  <section id='offerings-section' class="offerings-section py-5">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2 class="section-title">OUR OFFERINGS</h2>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="offering-card">
            <div class="card-body text-center">
              <h3>OCTG Products</h3>
              <p>1" – 20" casing, tubing, and accessories across all sizes and grades for oil & gas drilling and completion activities.</p>
              <a href="<?php echo home_url('/OCTG'); ?>" class="btn btn-outline-primary">LEARN MORE</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4">
          <div class="offering-card">
            <div class="card-body text-center">
              <h3>Midstream Products</h3>
              <p>½"– 64" API 5L pipe to X80, along with high yield fittings, flanges, and accessories.</p>
              <a href="<?php echo home_url('/midstream'); ?>" class="btn btn-outline-primary">LEARN MORE</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4">
          <div class="offering-card">
            <div class="card-body text-center">
              <h3>PVF Products</h3>
              <p>A comprehensive range of carbon and stainless pipe, fittings, flanges, and valves for industrial applications. Our line of products covers your last-minute requirements to large capital projects.</p>
              <a href="<?php echo home_url('/PVF'); ?>" class="btn btn-outline-primary">LEARN MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about-section py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2>Get the top manufactured OCTG, Midstream and PVF products for your operations</h2>
          <p>We provide high-quality products and services to meet the ever-evolving demands of the oil & gas, ESG, industrial fabrication, petrochemical, EPC, OEM, and aerospace industries. Since our start in 2000, SDB Steel & Pipe, is one of the largest stockists of OCTG, Midstream, and PVF Products in the US and Canada. We are committed to maintaining the highest quality, safety, and responsibility standards.</p>
          <p>We represent leading domestic and import mills and count North America's foremost energy and industrial focused companies among our customers, working closely with them to ensure they receive the products and services they need to succeed in their operations. Our unrivaled level of service and excellent ability to manage OCTG, Midstream, and PVF inventory has allowed us to become a trusted provider in a competitive market.</p>
          <a href="<?php echo home_url('/about-us'); ?>" class="btn btn-primary">ABOUT US</a>
        </div>
        <div class="col-lg-6">
          <div class="about-image">
            <!-- TODO: Agregar la imagen exacta de about-us.jpg de la página original de SDB Steel & Pipe -->
            <div style="background: #f8f9fa; border: 2px dashed #dee2e6; border-radius: 15px; padding: 3rem; text-align: center; color: #6c757d;">
              <i class="fas fa-image" style="font-size: 3rem; margin-bottom: 1rem;"></i>
              <p>Imagen de About Us<br><small>Necesitamos agregar la imagen exacta de la página original</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Service-Oriented Mindset Section -->
  <section class="services-section py-5">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2>Service-Oriented Mindset</h2>
          <p>Our product line includes a comprehensive inventory range of OCTG, PVF Products, and Midstream products designed and manufactured to meet the highest industry standards. In addition to our extensive product line, we offer various services to support our customers' operations. Our services include custom fabrication and coating, technical support, and inventory management.</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="service-card text-center">
            <div class="card-body">
              <h4>OCTG Offerings</h4>
              <p>Comprehensive OCTG solutions for drilling and completion activities.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4">
          <div class="service-card text-center">
            <div class="card-body">
              <h4>Midstream Offerings</h4>
              <p>Complete midstream solutions for pipeline and infrastructure projects.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4">
          <div class="service-card text-center">
            <div class="card-body">
              <h4>PVF Offerings</h4>
              <p>Extensive PVF product line for industrial applications.</p>
            </div>
          </div>
        </div>
</div>

      <div class="row text-center mt-4">
        <div class="col-12">
          <a href="tel:+17134750048" class="btn btn-success btn-lg">CALL US TODAY! +1 (713) 475-0048</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="team-section py-5 bg-light">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col-12">
          <h2>AT SDB, OUR TEAM IS THE FOUNDATION OF OUR SUCCESS.</h2>
          <h4>Our team's dedication to providing our customers with the highest level of service. We take pride in our expertise, commitment to quality, and ability to deliver top-notch solutions to every client.</h4>
          <p>We take pride in our work and are committed to our customers' needs. Every staff member is passionate about making a difference in the industries we serve, from our sales team to our technicians.</p>
          <a href="<?php echo home_url('/about-us#team'); ?>" class="btn btn-primary">MEET THE TEAM</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Info Section -->
  <section class="contact-info-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="contact-card text-center">
            <h4>Corporate Headquarters</h4>
            <p>11200 Richmond Ave, Ste 180<br>Houston, TX 77082</p>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4">
          <div class="contact-card text-center">
            <h4>Working Hours</h4>
            <p>Mon To Fri 8AM - 5PM<br>Sat & Sunday-Closed</p>
          </div>
        </div>
        
        <div class="col-lg-4 mb-4">
          <div class="contact-card text-center">
            <h4>Contact Us</h4>
            <p><a href="mailto:contact@thesdbgroup.com">contact@thesdbgroup.com</a><br>
            <a href="tel:+17134750048">+1 (713) 475-0048</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter-section py-5 bg-primary text-white">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h3>Contact us or Subscribe to our Newsletter!</h3>
          <form class="newsletter-form">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Enter your email">
              <button class="btn btn-light" type="submit">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Resources Section -->
  <section class="resources-section py-5">
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col-12">
          <h3>Resources</h3>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="resource-card text-center">
            <h6>NICKEL PRICING</h6>
            <p>SDB Steel & Pipe</p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="resource-card text-center">
            <h6>OIL PRICING</h6>
            <p>SDB Steel & Pipe</p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="resource-card text-center">
            <h6>NATURAL GAS PRICING</h6>
            <p>SDB Steel & Pipe</p>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="resource-card text-center">
            <h6>HRC PRICING</h6>
            <p>SDB Steel & Pipe</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>