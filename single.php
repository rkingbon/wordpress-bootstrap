<?php get_header(); ?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <!-- Blog Post -->
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="card mb-4">
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                    else {
                        echo '<img src="http://placehold.it/750x300" />';
                    }
                ?>
              <div class="card-body" id="post-<?php the_ID(); ?>"><?php post_class(); ?>>
                <h2 class="card-title" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
                <p class="card-text"><?php the_content(); ?></p>
              </div>
              <div class="card-footer text-muted">
                Posted on <?php the_time('F d, Y'); ?> by
                <a href="#"><?php the_author(); ?></a>
              </div>
            </div>
            <?php endwhile; ?>
        
        <?php else: ?>
            <?php _e( 'Content Not Found', 'quickstrap'); ?>
        <?php endif; ?>

      </div>

    <?php get_sidebar(); ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php get_footer(); ?>