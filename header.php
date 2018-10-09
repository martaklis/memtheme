<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link http://kursscratch.pl/
 *
 * @package MEM_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
   <div class="container-fluid sticky-top bg-light">
         <div class="container pt-2">
      <nav class="navbar navbar-light navbar-expand-lg mb-2">
                <div class="navbar-brand">
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo4.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'navwalker::fallback',
                'walker'          => new navwalker()
                ));
                ?>

            </nav>
        </div>
  </header>
