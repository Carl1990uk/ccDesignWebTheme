<?php

/*
    Template name: Frontfr
*/
get_header();
?>
  <div id="main">
    <div class="large_lang" >
      <a class="large_lang_en" href="https://ccdesignweb.com/"></a>
      <a class="large_lang_fr" href="https://ccdesignweb.com/fr/home-2/"></a>
    </div>
    <!-- <div class="par-pic1"> -->
      <div class="logo"></div>
    <!-- </div> -->
    <div class="cool container-fluid"></div>
    
    
    <section class="categories pt-5 ">
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Conception</h2>
              <p class="text-white text-center cent-text mt-5">nous vous aiderons à créer une image de marque de site Web adaptée à votre entreprise.</p>
          </div>
        </div>
        <div class="rowing potatoing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Responsive</h2>
            <p class="text-white text-center mt-5">With all packages your website will be viewable from iPads and tablets to phones and obviously laptop/computers.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo2"></div>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo3"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Sécurité</h2>
              <p class="text-white text-center mt-5">tous les sites Web sont livrés avec un certificat SSL.</p>
          </div>
        </div>
        <div class="rowing potatoing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Hosting</h2>
            <p class="text-white text-center mt-5">Un bon hosting est essentiel et nous nous occuperons de l’hosting en votre nom.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo4"></div>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo5"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Utilisation facile</h2>
              <p class="text-white text-center mt-5">une fois le site Web publié, vous aurez accès au CMS WordPress et disposerez de tous les pouvoirs pour modifier votre site à votre guise.</p>
          </div>
        </div>
        <div class="rowing potatoing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Sur appel</h2>
            <p class="text-white text-center mt-5">une fois que vous devenez client de Designweb, vous bénéficierez d’une maintenance technique complète comprenant des sauvegardes, des conseils et bien plus encore.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo6"></div>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo7"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Optimisation pour les moteurs de recherche (SEO):</h2>
              <p class="text-white text-center mt-5">le référencement est le processus d’amélioration de votre trafic vers votre site Web par les moteurs de recherche, tels que Google. Votre site Web sera indexé, ainsi les moteurs de recherche tels que Google pourront vous trouver!</p>
          </div>
        </div>
        <div class="rowing potatoing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Domaine</h2>
            <p class="text-white text-center mt-5">sans oublier la partie la plus importante, nous vous aiderons à trouver le nom parfait pour votre entreprise.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo8"></div>
          </div>
        </div>
    </section>
  <!-- <div class="art"></div> -->
  <div class="full-width-split group">
      <div class=" full-width-split__one">
          <div class="full-width-split__inner">
              <h2 class="headline headline--small-plus t-center">Dernier blog</h2>
              <?php
                $homepagePosts = new WP_Query(array(
                  'posts_per_page' => 2
                ));
                while($homepagePosts->have_posts()){
                  $homepagePosts->the_post(); ?>
                <div class="event-summary">
                    <a class="event-summary__date t-center" href="#">
                      <span class="event-summary__month"><?php the_time('M');?></span>
                      <span class="event-summary__day"><?php the_time('d');?></span>
                    </a>
                    <div class="event-summary__content">
                      <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                      <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink();?>" class="nu gray">Lire la suite</a></p>
                    </div>
                </div>
                
                <?php }
              ?>
              <p class="t-center no-margin"><a href="http://ccdesignweb.com/blog" class="btn btn--blue">Voir tous les Articles de Blog</a></p>
          </div>
      </div>
            <div class="full-width-split__two ">
              <div class="full-width-split__inner ">
              <h2 class="headline headline--small-plus t-center">Dernier Ouvrage</h2>
              <?php
                    $homepageEvents = new WP_Query(array(
                      'posts_per_page' => 1,
                      'post_type' => 'portfolio'
                    ));
          
                    while($homepageEvents->have_posts()){
                      $homepageEvents->the_post();?>

                    <div class="pic-gallery"><?php the_post_thumbnail('port2');?> </div>
                    
            <p class="t-center no-margin"><a href="http://ccdesignweb.com/portfolio" class="btn btn--yellow">Voir plus de Travail</a></p>
          </div>
          
      </div>
          <?php }
              ?>
     
            
          </div>
            
      </div>
  </div>


 <?php
    get_footer();
?>