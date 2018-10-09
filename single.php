<?php 
/**
 * @package MEM Theme
 */


get_header(); ?>
<div class="container">
 <div class="row">
     <div class="col-12 col-lg-8 mt-3 mb-4 pl-md-0 w-100">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	 </div>
<?php
get_sidebar();
get_footer();
	 ?>
