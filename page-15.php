<?php

/* Template Name: Contact */
/**
 * This template will be used to display page content.
 *
 * @package blm_basic
 */

get_header(); ?>

<div id="main">
	
	<section id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1><?php the_title(); ?></h1>
			
			<?php the_content(); ?>
			
			<?php do_shortcode('[contact-form-7 id="103" title="Contact form 1"]'); ?>
			
		</article>
		
		<?php endwhile; endif; ?>
		
	</section><!-- #content -->

<?php get_template_part( 'inc/alt-sidebar' ); ?>

</div><!-- #main -->

<?php get_footer(); ?>