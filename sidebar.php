<?php
/**
 *
 * @package MEM Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

        <div class="d-none d-lg-block col-md-4 mt-md-3 mb-4 p-0">
          <aside class="sidebar offset-1">
            <div class="row">
								<div class="col-12 mb-4">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
				<div class="col-12">
				  <h3 style="text-align: center;">
					  Aktualności</h3>
				 <?php
$the_query = new WP_Query( array(
'category_name' => 'Aktualności',
'posts_per_page' => 5,
'order' => 'DSC'
)); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $dish_meta = get_post_meta( get_the_ID(), 'dish_meta', true ); ?>
<div class="container border">
<div class="row">
	<div class="col-4 p-2"><a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail_url( 'thumbnail' );?>" alt="<?php echo $post->post_name ?>"></a></div>
<div class="col-8 pl-2 pr-0 mt-4 pt-2 pt-md-0 mx-auto">
	<a href="<?php the_permalink(); ?>"><?php the_title( '<p>', '</p>' ); ?></a></div>
</div>
</div>
<div style="clear:both"></div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php __('Brak postów'); ?></p>
<?php endif; ?>
				  				          </div>
			  </div>
          </aside>
      </div>
