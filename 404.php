<?php
/**
 * @package MEM_Theme
 */

get_header(); ?>
<main>
 <div class="col-10 col-md-6 offset-1 mt-3 mb-4 pl-md-0 w-100">
					<h1 class="error"><?php esc_html_e( 'Błąd 404!', 'mem-theme' ); ?></h1>

				<div class="page-content">
					<p><?php esc_html_e( 'Wygląda na to, że strona, której szukasz, nie istnieje. Skorzystaj z wyszukiwarki lub odwiedź jedną z proponowanych przez nas stron' ); ?></p>

					<?php
						get_search_form();


					?>


</div>
		</main>
<?php 
get_sidebar();
get_footer(); ?>
