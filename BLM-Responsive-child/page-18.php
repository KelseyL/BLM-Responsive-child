<?php
/**
 * This template will be used to display page content.
 * Blog page
 * @package blm_basic
 */

get_header(); ?>

<div id="main">

	<?php get_sidebar(); ?>

	
	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<!-- <p class="post-date"><?php the_date('Y | m | d', '<h2>', '</h2>', true); ?> --> 

			<?php //echo get_the_date(); ?></p>
			<!--<?php add_thickbox(); ?>-->
			<?php the_content( __( 'Read more', 'blm-responsive' ) ); ?>	
				
			<?php get_template_part( 'inc/meta' ); ?>

		</article>
		
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->


</div><!-- #main -->

<?php get_footer(); ?>