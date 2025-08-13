<?php get_header(); ?>

<main class="container py-5">
  <div class="row">
    <div class="col-lg-8">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="mb-5">
            <header class="entry-header">
              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <div class="entry-meta">
                <span class="posted-on">
                  Posted on <?php echo get_the_date(); ?>
                </span>
                <span class="byline">
                  by <?php the_author(); ?>
                </span>
              </div>
            </header>
            
            <div class="entry-content">
              <?php the_excerpt(); ?>
            </div>
            
            <footer class="entry-footer">
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
            </footer>
          </article>
        <?php endwhile; ?>
        
        <nav class="pagination-wrapper">
          <?php
          the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => '&laquo; Previous',
            'next_text' => 'Next &raquo;',
          ));
          ?>
        </nav>
        
      <?php else : ?>
        <div class="no-posts">
          <h2>No posts found</h2>
          <p>Sorry, no posts matched your criteria.</p>
        </div>
      <?php endif; ?>
    </div>
    
    <div class="col-lg-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
