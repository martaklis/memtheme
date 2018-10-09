<?php
/**
 * @package MEM Theme
 */
 get_header(); ?>
     <div class="col-10 col-md-6 offset-1 mt-3 mb-4 pl-md-0 w-100">
		<main id="main" class="site-main" role="main">

			<?php
		if ( have_posts() ) : ?>
		<?php
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->
</div>
<?php 
get_sidebar();
get_footer(); ?>
