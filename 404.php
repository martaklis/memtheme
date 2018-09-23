<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MEM_Theme
 */

get_header(); ?>

<section class="error-404 not-found">
				<header class="page-header">
					<h1><?php esc_html_e( 'Błąd 404!', 'MEM_Theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Wygląda na to, że strona, której szukasz, nie istnieje. Skorzystaj z wyszukiwarki lub odwiedź jedną z proponowanych przez nas stron' ); ?></p>

					<?php
						get_search_form();


					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->