<?php
/**
 * This template will be used to display page content.
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">
	
	<section id="content">
		<?php
		$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );

			$col = 0;

			while ( $loop->have_posts() ) : $loop->the_post();
				echo '<li class="thumb';

				if($col % 2 === 0){
					echo ' col-1';
				}else{
					echo ' col-2';
				}

				echo '">';

				echo '<a href="', the_permalink(), '">', the_post_thumbnail(), '</a></li>';

				
				$col ++;
		 	endwhile;?>

		
	</section><!-- #content -->

<?php get_template_part( 'inc/alt-sidebar' ); ?>

</div><!-- #main -->

<?php get_footer(); ?>