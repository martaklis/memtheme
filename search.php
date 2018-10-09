<?php
/**
 *
 * @package MEM Theme
 */

get_header(); ?>
<div class="container-fluid">
 <div class="row">
<div class="col-12 col-md-6 offset-1 mt-3 mb-4 pl-md-0 w-100">
	<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1><?php printf( esc_html__( 'Wyniki wyszukiwania: %s', 'mem-theme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

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

		endif; ?>
	</main>
	</div>
<?php
get_sidebar();
get_footer();
?>
