<?php
/**
*Template Name: product_page
 * @package MEM_Theme
 */

get_header(); ?>
<div class="container-fluid">
<div class="container-fluid px-0">
<div class="row">
<main>
	<article>
<div class="col-12 text-center py-5 mb-4 bg-primary"><h2 class="card-slider pt-3">Programowanie bez komputera</h2>
<p class="slider-text mx-5">Niewiele osób zdaje sobie sprawę z tego, że nauka programowania odbywa się również bez komputera. Przy czym wybór możliwości jest wręcz ogromny! Programowanie dla dzieci na papierze- dlaczego nie? A może lepiej rodzinna gra planszowa? To od Was zależy, jak spędzicie wspólny czas. Poniżej przedstawiamy najciekawsze, naszym zdaniem propozycje. Dzięki nim nie tylko wyposażycie dziecko w nowe umiejętności, lecz także spędzicie wspaniały wspólny czas oraz poznacie zabawy, do których będziecie chcieli często wracać. Nie musisz wydawać majątku na kosztowne lekcje kodowania, często wystarczą kartki, długopisy i wyobraźnia!</p>
    				</div>
    			</div>
    		</div>
<div class="container">
<div class="row">
<?php
$the_query = new WP_Query( array(
'category_name' => 'Programowanie bez komputera',
'posts_per_page' => 30,
'order' => 'DSC'
)); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $dish_meta = get_post_meta( get_the_ID(), 'dish_meta', true ); ?>
<div class="col-sm-6 col-lg-3 pt-3 pb-5">
<div class="card border border-primary">
<img class="card-img-top" src="<?php the_field('programowanie_obraz'); ?>" alt="<?php echo $post->post_name ?>" width="250">
<div class="card-body">
<h4 class="card-title text-center pt-2"><?php the_field('programowanie_nazwa'); ?></h4>
<ul class="list-group list-group-flush">
<li class="list-group-item"><?php the_field('programowanie_wiek'); ?></li>
<li class="list-group-item"><?php the_field('programowanie_cena'); ?></li>
</ul>
<p class="card-text produkty pt-2"><?php the_field('programowanie_opis'); ?></p>
</div>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php __('Brak postów'); ?></p>
<?php endif; ?>
</div>
</div>
<div class="container-fluid px-0">
				<div class="row">
					<div class="col-12 text-center py-5 my-4 bg-danger"><h2 class="card-slider pt-3">Aplikacje</h2>
    					<p class="slider-text mx-5">Z aplikacji korzysta dzisiaj praktycznie każdy. A czy znasz aplikacje uczące dzieci programowania? Jest ich naprawdę sporo. Różnią się one poziomem trudności i przeznaczone są dla wielu grup wiekowych. Część z nich jest darmowa, za korzystanie z innych lub bardziej rozbudowanych wersji, będzie trzeba zapłacić. Poniżej znajdziesz najpopularniejsze aplikacje do programowania dla dzieci.</p>
    				</div>
    			</div>
    		</div>
 <div class="container">
<div class="row"> 
<?php
$the_query = new WP_Query( array(
'category_name' => 'Aplikacje',
'posts_per_page' => 30,
'order' => 'DSC'
)); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $dish_meta = get_post_meta( get_the_ID(), 'dish_meta', true ); ?>
<div class="col-sm-6 col-lg-3 pt-3 pb-5">
<div class="card border border-danger">
<img class="card-img-top" src="<?php the_field('aplikacje_obraz'); ?>" alt="<?php echo $post->post_name ?>" width="250">
<div class="card-body">
<h4 class="card-title text-center pt-2"><?php the_field('aplikacje_nazwa'); ?></h4>
<ul class="list-group list-group-flush">
<li class="list-group-item"><?php the_field('aplikacje_wiek'); ?></li>
<li class="list-group-item"><?php the_field('aplikacje_cena'); ?></li>
</ul>
<p class="card-text produkty pt-2"><?php the_field('aplikacje_opis'); ?></p>
</div>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php __('Brak postów'); ?></p>
<?php endif; ?>
</div>
</div>
<div class="container-fluid px-0">
				<div class="row">
					<div class="col-12 text-center py-5 my-4 bg-info"><h2 class="card-slider pt-3">Zabawki i roboty</h2>
    					<p class="slider-text mx-5">Które dziecko nie kocha zabawek, a w szczególności robotów? Kodowanie z nimi staje się za każdym razem wielką przyjemnością. Oferta dostępnych na rynku zabawek jest ogromna. Przyciągają one wzrok swoimi kolorami i funkcjonalnością. Jednak trzeba za nie zapłacić i to czasami dość znaczne kwoty. Wybierając zabawkę należy sprawdzić, do jakiego wieku dziecka są dostosowane. Warto przeczytać także informacje o umiejętnościach, które rozwijają w naszych pociechach.</p>
    				</div>
    			</div>
    		</div>
	<div class="container">
    <div class="row"> 
<?php
$the_query = new WP_Query( array(
'category_name' => 'Roboty',
'posts_per_page' => 30,
'order' => 'DSC'
)); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $dish_meta = get_post_meta( get_the_ID(), 'dish_meta', true ); ?>
<div class="col-sm-6 col-lg-3 pt-3 pb-5">
<div class="card border border-info">
<img class="card-img-top" src="<?php the_field('roboty_obraz'); ?>" alt="<?php echo $post->post_name ?>" width="250">
<div class="card-body">
<h4 class="card-title text-center pt-2"><?php the_field('roboty_nazwa'); ?></h4>
<ul class="list-group list-group-flush">
<li class="list-group-item"><?php the_field('roboty_wiek'); ?></li>
<li class="list-group-item"><?php the_field('roboty_cena'); ?></li>
</ul>
<p class="card-text produkty pt-2"><?php the_field('roboty_opis'); ?></p>
</div>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php else : ?>
<p><?php __('Brak postów'); ?></p>
<?php endif; ?>
</div>
</div>
</article>
</main>
<?php
get_footer();
?>
