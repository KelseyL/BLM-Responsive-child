<?php
/**
 * The Sidebar containing the main widget areas.
 * If no widgets are set, the content below will be displayed
 *
 * @package blm_basic
 */
?>
<section id="sidebar">
	
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth' => 3 ) );
		?>	

		<?php 
			$terms = get_terms("medias");
			// var_dump($terms);
 			$count = count($terms);
 			if ( $count > 0 ){
 			    echo "<ul>";
 			    foreach ( $terms as $term ) {
 			      echo "<li><a href='".get_bloginfo('url')."/".$term->taxonomy."/".$term->slug."'>" . $term->name . "</a></li>";     
 			    }
 			    echo "</ul>";
 			}
		 ?>

		<!-- <aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside> -->
	
</section>