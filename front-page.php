<?php get_header(); ?>
<section class="hero">
  <div class="container">
    <div class="row">
      
      <div class="col col-md-6">
        <div class="text-wrap">
          <h2 class="title">Jerzy Giedroyć</h2>
          <h3>
            Polityk i publicysta, epistolograf. Twórca i redaktor paryskiej
            "Kultury". Urodzony 27 lipca 1906 w Mińsku Litewskim, zmarł 14
            września 2000 w Maisons-Laffitte pod Paryżem.
          </h3>
          <a class="button" href="https://roznialerazem.pl/biografia/">czytaj więcej</a>
        </div>
      </div>
      <div class="col col-md-6">
        <div class="image-wrap">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt="" />
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news">
  <div class="container">
    <div class="slick slider slick-wrap">
      <div class="slide">
        <div class="row">
          <div class="col col-12 col-md-6">
            <div class="text-wrap" style="background-color: #FFDB97;">
              <p class="desc">aktualności</p>
              <h2>Poznaj Giedroycia</h2>
              <p>
                Jerzy Giedroyć był jednym z najwybitniejszych polskich intelektualistów XX wieku. Choć przez większą część swojego życia mieszkał poza granicami Polski, odegrał ogromną rolę w zachowaniu niezależnej polskiej kultury i myśli politycznej w okresie komunizmu. Był redaktorem, publicystą, wydawcą oraz założycielem Instytutu Literackiego i twórcą miesięcznika "Kultura", który przez dziesięciolecia stanowił jedno z najważniejszych miejsc swobodnej debaty o Polsce i jej przyszłości.
              </p>
              <a class="button" href="https://roznialerazem.pl/biografia/">czytaj więcej</a>
            </div>
          </div>
          <div class="col col-12 col-md-6">
            <div class="image-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/wons.png" alt="" />
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="row">
          <div class="col col-12 col-md-6">
            <div class="image-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/images/oksy.png" alt="" />
            </div>
          </div>
          <div class="col col-12 col-md-6">
            <div class="text-wrap" style="background-color: #D1E4EE;">
              <p class="desc">aktualności</p>
              <h2>Rozpoczęcie projektu</h2>
              <p>
                Projekt "Różni, ale razem. Giedroyć i środkowowschodnia wspólnota" to innowacyjny program edukacyjny i partycypacyjny poświęcony Jerzemu Giedroyciowi - jednemu z najważniejszych polskich myślicieli, redaktorów i działaczy emigracyjnych XX wieku. Projekt wychodzi poza szkolny kanon i proponuje młodzieży aktywne, cyfrowe i międzynarodowe spotkania z postacią, która z paryskiej redakcji "Kultury" wpływała na losy Polski oraz Europy Srodkowej i Wschodniej przez ponad pół wieku.
              </p>
              <a class="button" href="">czytaj więcej</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <div class="arrows-wrap">
      <a href="" class="arrow-left slick-arrow">
        <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="25.5" cy="25.5" r="24.5" stroke="black" stroke-width="2"/>
          <path d="M31 15L20 25.3895L31 36" stroke="black" stroke-width="2"/>
        </svg>
      </a>
      <a href="" class="arrow-right slick-arrow">
        <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="25.5" cy="25.5" r="24.5" stroke="black" stroke-width="2"/>
          <path d="M20 36L31 25.6105L20 15" stroke="black" stroke-width="2"/>
        </svg>
      </a>
    </div>
  </div>
</section>
<section class="education">
  <div class="container">
    <div class="col col-12">
      <p class="subject">materiały edukacyjne</p>
    </div>
    <div class="row">
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">scenariusze lekcji</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/portret.png" alt="" />
          <a href="https://roznialerazem.pl/scenariusze-lekcji/" class="button">odkryj więcej</a>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">filmy</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/zulte.png" alt="" />
          <a href="https://roznialerazem.pl/filmy/" class="button">odkryj więcej</a>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">prezentacje</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/jerzy1.jpg" alt="" />
          <a href="https://roznialerazem.pl/prezentacje/" class="button">odkryj więcej</a>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="edu-wrap">
          <p class="type">bibliografia</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/wons.png" alt="" />
          <a href="https://roznialerazem.pl/bibliografia/" class="button">odkryj więcej</a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <?php the_content(); ?>
</div>
<?php get_footer(); ?>