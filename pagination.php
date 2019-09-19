<?php
			$links = paginate_links( array(
			  'prev_next'          => false,
			  'type'               => 'array'
			) );
			if ( $links ) :

			    echo '<ul class="pagination">';

			    // get_previous_posts_link
			    if ( $prev_posts_link = get_previous_posts_link( __( 'Previous' ) ) ) :
			        echo '<li class="page-link">';
			        echo $prev_posts_link;
			        echo '</li>';
			    endif;

			    echo '<li class="page-link">';
			    echo join( '</li><li class="page-link">', $links );
			    echo '</li>';

			    // get_next_posts_link
			    if ( $next_posts_link = get_next_posts_link( __( 'Next' ) ) ) :
			        echo '<li class="page-link">';
			        echo $next_posts_link;
			        echo '</li>';
			    endif;
			    echo '</ul>';
			endif;
		?>
