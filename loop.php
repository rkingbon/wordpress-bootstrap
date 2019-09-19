<?php query_posts('posts_per_page=4'); while(have_posts() ) : the_post();?>
    <div class="card mb-4">
      	<?php
			if ( has_post_thumbnail() ) {
			    the_post_thumbnail();
			}
			else {
				echo '<img src="http://placehold.it/750x300" />';
			}
		?>
      <div class="card-body">
        <h2 class="card-title"><?php the_title(); ?></h2>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on <?php the_time('F d, Y'); ?> by
        <a href="#"><?php the_author(); ?></a>
      </div>
    </div>
<?php endwhile; wp_reset_query();?>

