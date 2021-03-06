<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package themotion
 */

get_header(); ?>


	</div><!-- .container -->

	<header class="page-main-header page-header-search">
		<div class="container">
			<h1 class="entry-title page-title">
				<?php
				/* translators: Search query */
				printf( esc_html__( 'Search Results for: %s', 'themotion-lite' ), '<span>' . get_search_query() . '</span>' );
				?>
				</h1>
		</div>
	</header><!-- .page-header -->

	<div class="container">

		<div class="content-wrap">

			<div id="primary" class="content-area search-page">
				<main id="main" class="site-main">

				<?php
				if ( have_posts() ) :
				?>

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

					the_posts_navigation(
						array(
							'prev_text' => sprintf( '&#8592; %s', __( 'Older Posts', 'themotion-lite' ) ),
							'next_text' => sprintf( '%s &#8594;', __( 'Newer Posts', 'themotion-lite' ) ),
						)
					);

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

				</main><!-- #main -->
			</section><!-- #primary -->

		</div><!-- .content-wrap -->

<?php
get_footer();

