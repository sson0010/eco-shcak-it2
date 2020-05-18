<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package blogzilla
 */

get_header();
$blogzilla_options = blogzilla_theme_options();
$single_sidebar_page_show_checkbox = $blogzilla_options['single_sidebar_page_show_checkbox'];

if ($single_sidebar_page_show_checkbox== '0'){ ?>
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="single-content-wrap">
					<section id="primary" class="content-area">
						<main id="main" class="site-main">

						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'blogzilla' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

						</main><!-- #main -->
					</section><!-- #primary -->
				</div>
			</div>
		</div>
	</div>


<?php
}

else{ ?>

    <div class="section-content full-width">
        <div class="container">
            <div class="row">
                <div class="single-content-wrap">
                	<div class="col-md-8">
					<section id="primary" class="content-area">
						<main id="main" class="site-main">

						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title">
									<?php
									/* translators: %s: search query. */
									printf( esc_html__( 'Search Results for: %s', 'blogzilla' ), '<span>' . get_search_query() . '</span>' );
									?>
								</h1>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

						</main><!-- #main -->
					</section><!-- #primary -->
					</div>

					<div class="col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
}

get_footer();
