<aside class="sidebar">
  <div class="widget-area">
    
    <!-- Search Widget -->
    <div class="widget widget_search mb-4">
      <h4 class="widget-title">Search</h4>
      <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
        <div class="input-group">
          <input type="search" class="form-control" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
    
    <!-- Recent Posts Widget -->
    <div class="widget widget_recent_entries mb-4">
      <h4 class="widget-title">Recent Posts</h4>
      <ul>
        <?php
        $recent_posts = wp_get_recent_posts(array(
          'numberposts' => 5,
          'post_status' => 'publish'
        ));
        
        foreach($recent_posts as $post) : ?>
          <li>
            <a href="<?php echo get_permalink($post['ID']); ?>">
              <?php echo $post['post_title']; ?>
            </a>
            <span class="post-date"><?php echo get_the_date('', $post['ID']); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    
    <!-- Categories Widget -->
    <div class="widget widget_categories mb-4">
      <h4 class="widget-title">Categories</h4>
      <ul>
        <?php
        $categories = get_categories(array(
          'orderby' => 'name',
          'order' => 'ASC'
        ));
        
        foreach($categories as $category) : ?>
          <li>
            <a href="<?php echo get_category_link($category->term_id); ?>">
              <?php echo $category->name; ?>
              <span class="count">(<?php echo $category->count; ?>)</span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
    
    <!-- Contact Info Widget -->
    <div class="widget widget_contact mb-4">
      <h4 class="widget-title">Contact Information</h4>
      <div class="contact-info">
        <p><i class="fas fa-phone"></i> +1 (713) 475-0048</p>
        <p><i class="fas fa-envelope"></i> contact@thesdbgroup.com</p>
        <p><i class="fas fa-map-marker-alt"></i> 11200 Richmond Ave, Ste 180<br>Houston, TX 77082</p>
      </div>
    </div>
    
    <!-- Social Media Widget -->
    <div class="widget widget_social mb-4">
      <h4 class="widget-title">Follow Us</h4>
      <div class="social-links">
        <a href="https://www.facebook.com/SDBSteelandPipe" target="_blank" class="social-link">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://www.linkedin.com/company/sdb-steel-and-pipe/" target="_blank" class="social-link">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </div>
    
    <!-- Newsletter Widget -->
    <div class="widget widget_newsletter mb-4">
      <h4 class="widget-title">Newsletter</h4>
      <p>Subscribe to our newsletter for updates and news.</p>
      <form class="newsletter-form">
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Your email">
          <button class="btn btn-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
    
  </div>
</aside> 