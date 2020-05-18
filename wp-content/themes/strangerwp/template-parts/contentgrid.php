<?php
/**
 * Template part for displaying posts
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strangerwp
 */
?>

<div class="col-lg-6 col-md-6 col-sm-12">
	<article class="post" <?php post_class(); ?>>		
			   <?php 
				if(has_post_thumbnail()){
				echo '<figure class="post-thumbnail"><a href="'.esc_url(get_the_permalink()).'">';
				the_post_thumbnail( '', array( 'class'=>'img-fluid' ) );
				echo '</a></figure>';
				} ?>		
				<div class="post-content">					
					<div class="entry-meta">
					<?php $category_data = get_the_category_list();
						if(!empty($category_data)) { ?>
						<span class="cat-links"><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
					<?php } ?>
				    </div>						
					<header class="entry-header">
						<?php 
						the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h4>' );
						?>
					</header>
					<div class="entry-content">
						<?php the_content( __('Read More','strangerwp') ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'strangerwp' ), 'after'  => '</div>', ) ); ?>
					</div>
				</div>				
	</article>
</div><!-- #post-<?php the_ID(); ?> -->