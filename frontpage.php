<?php
/**
*Template Name: CustomPageT1
 * @package MEM_Theme
 */

get_header(); ?>
<div class="container-fluid bg-primary">
    <div class="row">
      <div class="col-12">
          <div class="row">
            <div class="col-4 d-none d-md-block">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <img class="d-block w-75 mb-5 mt-5 ml-5" src="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.png" alt="Dzieci uczą się programowania">
                      <div class="mask rgba-black-light"></div>
                    </div>
                  </div>
                </div>
<div class="col-sm-7 m-auto">
              <div class="card bg-primary">
                <div class="card-body">
                 <div class="container">
                  <h2 class="card-slider d-none d-md-block">Nauka programowania dla dzieci</h2>
                  <h3 class="card-slider d-block d-md-none">Nauka programowania dla dzieci</h3>
                  <p class="slider-text">Programowanie to fantastyczna zabawa, rozwijąca mózg Twojego dziecka. Dzięki zabawanie w małego programistę dzieci i młodzież poznają podstawy logicznego myślenia, uczą się rozwiązywać problemy oraz przekuwać swoje pomysły w działające projekty. A to wszystko w miłej atmosferze rozrywki. Jeśli zależy Ci na przyszłości Twego potomka - koniecznie zadbaj o to, by uczył się programowania. To prawdziwa inwestycja w przyszłosć dziecka.</p>
                  <a href="https://sprytnebankowanie.pl/oferta/" class="btn btn-danger mr-2 mt-2">Poznaj ofertę</a>
                  <a href="https://sprytnebankowanie.pl/kontakt/" class="btn btn-info mt-2">Zapisz dziecko</a>
                 </div>
                </div>
              </div>
			</div>

        </div>
      </div>
    </div>
  </div>
</div>
    <!-- 3 row -->
    <div class="container">
    	<div class="text-center pt-3">
      	<h1>NAUKA PROGRAMOWANIA DLA NAJMŁODSZYCH</h1>
      </div>
      <div class="row">
      <div class="col-md-6 mb-2 my-4 pr-4">
      	<p>Programowanie dla dzieci to zajęcie, które ma mnóstwo zalet. Po pierwsze - dzięki kontaktowi z tworzeniem kodu i budowaniem coraz bardziej skomplikowanych rozwiązań młody człowiek uczy się myślenia koncepcyjnego. Po drugie - programowanie to także szansa, by dziecko w przyszłości nie miało kompleksów na rynku pracy. Ostrożne prognozy mówią, że w 2030 roku branża IT zatrudniać będzie ok. 20% światowej populacji. Tworzenie stron i aplikacji, uczenie maszynowe, zarządzanie bazami danych - Twoje dziecko już teraz może zrobić krok w świetlaną przyszłość. Nawet jeśli Twoje dziecko wybierze inną ścieżkę kariery - ma bardzo duże szanse, że w codziennym życiu i tak będzie korzystać z komputera.</p></div>
      <div class="col-md-6 mb-2 my-4 pr-4">
      <p>Ale programowanie to przede wszystkim świetna zabawa. Tworzenie prostych gierek, stron internetowych lub aplikacji przynosi masę satysfakcji i daje zadowolenie ze swoich umiejętności. Im większa wiedza - tym ciekawsze efekty można osiągnąć. Programowanie to specyficzny sposób myślenia, rozkładania wszystkiego na mniejsze kawałki. To umiejętność patrzenia na coś abstrakcyjnego i niemal odruchowe wyciąganie "przed nawias" elementów wspólnych. Naukę na naszych kursach dopasowujemy do wieku dziecka. Na początku są kolorowe animacje, klocki Lego i podstawy robotyki, a potem stopniowo przechodzimy do "dorosłych" tematów. Daj swojemu dziecku szansę na przygodę życia i zapisz na kurs.</p></div>
    	</div>
	</div>
    <!-- 4 row -->
<div class="container-fluid bg-primary w-100">
  <div class="container">
    <div class="col-12 text-center py-2"><h2 class="card-slider pt-3">Strefa rodzica</h2></div>
    <div class="row">
 <?php 
                    // the query
                    $the_query = new WP_Query( array(
                        'category_name' => 'Strefa rodzica',
                        'posts_per_page' => 4,
                        'order' => 'ASC'
                    )); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $dish_meta = get_post_meta( get_the_ID(), 'dish_meta', true ); ?>
                    
                    <div class="col-sm-6 col-lg-3 pt-3 pb-5">
                        <div class="card">
                            <img class="thumb" src="<?php the_post_thumbnail_url( 'homepage-thumb' );?>" alt="<?php echo $post->post_name ?>">
                             <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><?php the_title( '<h4 class="card-title text-center">', '</h4>' ); ?></a>
                             <p class="card-text"><?php the_content(); ?></p>
                             <a href="<?php the_permalink(); ?>" class="btn btn-danger d-block w-50 ml-auto mr-auto">Więcej</a>
           <div style="clear:both"></div>
          </div>
        </div>
      </div>



                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php __('Brak postów'); ?></p>
                    <?php endif; ?>
</div></div></div>
  <div style="clear:both"></div>

    <!-- 5 row -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-2 my-4">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scratch.png" class="img-thumbnail my-auto float-left border-0 rounded-circle" alt="Aplikacje do nauki programowania">

      </div>

      <div class="col-md-6 mb-2 my-md-auto">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title ml-0 text-center">Nauka programowania - przydatne aplikacje</h2>
            <p>Chcesz zacząć programować z dzieckiem w domu? Opracowaliśmy listę gier, aplikacji i platform, które pozwolą Ci urozmaicić naukę na naszych kursach i poszerzyć wiedzę dziecka. Nasze propozycje podzielone są na 3 kategorie: aplikacje (najczęściej na smartfona), programowanie bez prądu (bo podstaw programowania można uczyć się bez dostępu do komputera, za pomocą klocków lub gier planszowych) oraz zabawki i roboty. Część z nich używamy na naszych zajęciach. Warto testować różne rozwiązania, by znaleźć takie, które sprawia dziecku  nam największą frajdę. Nawet, jeśli dziecko nie będzie zadowolone z jednej aplikacji, kolejna może się okazać strzałem w dziesiątkę. Przy nauce programowania warto także pamiętać, by nie naciskać na malucha. To ma być przede wszystkim dobra zabawa!</p>
            <a href="https://sprytnebankowanie.pl/nauka-programowania/" class="btn btn-info d-block w-50 ml-auto mr-auto">Więcej</a>
          </div>
        </div>
      </div>
    </div>

    <!-- 6 row -->
    <div class="row">

      <div class="col-md-6 mb-2 my-md-auto">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title ml-0 text-center">Najlepsze projekty</h2>
            <p>Jakie efekty można osiągnąć przy nauce programowania? Prezentujemy najciekawsze projekty, wykonane przez dzieci na naszych kursach. Twoje dziecko także może robić podobne dziecko (a jeśli programowanie jest dla Ciebe czarną magią - nauczyć też Ciebie). Obejrzyj proponowane przez nas projekty, by poszukać inspiracji do pracy z dzieckiem albo zobaczyć, czego dokładnie się spodziewać po naszych zajęciach. Wybraliśmy różną skalę trudności, dostosowaną do dzieci w odpowiednim wieku. Jeśli Twoje dziecko od razu nie jest w stanie tworzyć podobnych rzeczy - daj mu czas. Nadmiernymi oczekiwaniami możesz zniechęcić je do programowania, które powinno być przede wszystkim świetną zabawą. Dodatkowe bonusy z programowania przyjdą same, wraz z poświęconym mu czasem.</p>
            <a href="https://sprytnebankowanie.pl/najciekawsze-projekty/" class="btn btn-info d-block w-50 ml-auto mr-auto">Więcej</a>
          </div>
        </div>
      </div>


      <div class="col-sm-6 mb-2 my-4">

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/najlepszeprojekty.jpg" class="img-thumbnail my-auto float-right border-0 rounded-circle d-none d-md-block" alt="Najlepsze projekty">

      </div>
    </div>
  </div>

    <!-- 7 row -->
<div class="container-fluid bg-danger w-100">
  <div class="container">
    <div class="col-12 text-center py-2"><h2 class="card-slider pt-3">Aktualności</h2></div>
    <div class="row">
 <?php 
                    // the query
                    $the_query = new WP_Query( array(
                        'category_name' => 'Aktualności',
                        'posts_per_page' => 4,
                        'order' => 'DSC'
                    )); 
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $dish_meta = get_post_meta( get_the_ID(), 'dish_meta', true ); ?>
                    
                    <div class="col-sm-6 col-lg-3 pt-3 pb-5">
                        <div class="card">
                            <img class="img-responsive" src="<?php the_post_thumbnail_url( 'homepage-thumb' );?>" alt="<?php echo $post->post_name ?>">
                             <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><?php the_title( '<h4 class="card-title text-center">', '</h4>' ); ?></a>
                             <p class="card-text"><?php the_content(); ?></p>
                             <a href="<?php the_permalink(); ?>" class="btn btn-primary d-block w-50 ml-auto mr-auto">Więcej</a>
           <div style="clear:both"></div>
          </div>
        </div>
      </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                    <p><?php __('Brak postów'); ?></p>
                    <?php endif; ?>
</div></div></div>
  <div style="clear:both"></div>

    <!-- 8 row -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-2 my-4 pr-4">
<h2>Nasza oferta</h2>
        <p>
MEM Programowanie dla dzieci to świetny wybór, jeżeli chcesz, aby Twoje dziecko się czegoś nauczyło! Na pewno nie będzie się u nas nudzić. Na zajęciach pracujemy nad praktycznymi tematami: poznajemy tajniki programowania, piszemy swoje pierwsze gry komputerowe, uczymy się logicznego myślenia, zapoznajemy z podstawami programów 3D.
</p>
      <h4>Aktualna lista kursów:</h4>
        <ul>
        <li><b>Podstawy programowania</b> - to kurs przeznaczony dla dzieci powyżej 4 klasy szkoły podstawowej, znających już Scratcha. Na zajęciach poruszane są podstawy projektowania stron internetowych i projektowania aplikacji mobilnych.</li>
        <li><b>Nauka Scratcha</b> - Scratch jest to graficzny język programowania. Kurs przeznaczony jest dla dzieci pomiędzy 7 a 10 rokiem życia. Dzieci poznają podstawy Scratcha, a potem wykonują w nim działania: od najprostszych po działające gry.</li>
         <li><b>Zajęcia dla maluchów</b> - zajęcia przeznaczone są dla dzieci pomiędzy 4 a 7 rokiem życia. Pierwsze zajęcia to poznanie podstaw programowania bez użycia komputera. Podstawy logicznego myślenia, roboty i gry planszowe oraz świetna zabawa.</li>
       </ul>
    
      </div>
      <div class="col-md-6 mb-2 my-4">
        <h2>Zapisz swoje dziecko na kurs</h2>
       <?php echo do_shortcode( '[contact-form-7 id="58" title="Zapisz na kurs"]' ); ?>
      </div>

    </div>
  </div>
</div>
  <?php
get_footer();
?>
