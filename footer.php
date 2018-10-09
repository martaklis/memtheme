<?php
/**
 * @package MEM_Theme
 */

?>
</div>
</div>
<footer>
            <div class="container-fluid pt-3 pb-3 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-6 mt-3">
<?php if(is_active_sidebar('footer-sidebar-1')){dynamic_sidebar('footer-sidebar-1');} ?>
</div>
<div class="col-3 text-center mt-3">
<?php if(is_active_sidebar('footer-sidebar-2')){dynamic_sidebar('footer-sidebar-2');} ?>
</div>
     <div class="col-3 mt-3">
<?php if(is_active_sidebar('footer-sidebar-3')){ dynamic_sidebar('footer-sidebar-3');} ?>
</div>

                            <div class="container">
              <div class="container">
                    <div class="row">
             <p="footer">   &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>MEM TEAM</p>

            </div>
		</div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
