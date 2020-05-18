<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strangerwp
 */

get_header(); 
do_action( 'arileextra_stranger_blogpage', false);
?>
<section id="content" class="theme-block theme-blog theme-blog-large theme-bg-grey">		
	<div class="container">
		<div class="row">
		
			<div class="col-lg-8 col-md-8 col-sm-8">
			
			    <div class="row">
					<?php 
					if ( have_posts() ) :
					// Start the loop.
					while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				 
						get_template_part( 'template-parts/contentgrid', get_post_type() );
						
					endwhile;
					
				// End the loop.
						
				    else :
					
				// If no content, include the "No posts found" template.	
					
			            get_template_part( 'template-parts/content', 'none' );
						
	        	    endif; ?>
					
				</div>
				<?php
					// Pgination.
					the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
						'next_text'          => '<i class="fa fa-angle-double-right"></i>'
					) );
					?>
			</div>
			
			
			
			<?php get_sidebar();?>
			
		</div>	
		
	</div>
	
</section>

<?php
get_footer();