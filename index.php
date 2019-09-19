<?php get_header(); ?>
  <!-- Other Content here -->
  <!-- Page Content -->
  <div class="container">
    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        <!-- Blog Post -->
        <?php get_template_part('loop') ?>
        <?php get_template_part('pagination') ?>
        <!-- Pagination -->
      </div>

    <?php get_sidebar(); ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php get_footer(); ?>