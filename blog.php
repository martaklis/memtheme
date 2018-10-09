<?php
/**
*Template Name: Blog
 * @package MEM_Theme
 */
get_header(); ?>
 <div class="container">
	  <div class="row">
     <div class="col-12 col-lg-8 mt-3 mb-4 pl-md-0 w-100">
		<main id="main" class="site-main" role="main">
			<h1 style="text-align: center;">Aktualności</h1>
<?php
$the_query = new WP_Query( array(
'category_name' => 'Aktualności, Strefa rodzica',
'posts_per_page' => 30,
'order' => 'DSC'
)); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $dish_meta = get_post_meta( get_the_ID(), 'dish_meta', true ); ?>
<div class="container border pt-2">
<div class="row">
<div class="col-12 col-md-3 pt-2 mt-2"><a href="<?php the_permalink(); ?>"><img class="img-fluid mx-auto d-block" src="<?php the_post_thumbnail_url( 'thumbnail' );?>" alt="<?php echo $post->post_name ?>"></a></div>
<div class="post col-12 col-md-9 px-2 px-md-0 pr-0 pt-2 pt-md-0 mt-2">
<a href="<?php the_permalink(); ?>"><?php the_title( '<h4 class="class="pt-1">', '</h4>' ); ?></a>
<p class="data"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calender.svg" height="14px" class="mr-1 mb-1">Data: <?php the_time('d-m-Y') ?> | Kategoria: <?php the_category(', ') ?></p>
<p><?php the_content(); ?></p>
</div>
</div>
</div>
<div style="clear:both"></div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php __('Brak postów'); ?></p>
<?php endif; ?>

</main>
</div>

<?php
get_sidebar();
get_footer();
?>
