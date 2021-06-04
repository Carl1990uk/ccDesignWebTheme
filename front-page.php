<?php
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
    
    <h1 class="title_topic"><?php the_title();?></h1>
    <section class="categories pt-5 ">
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white">Design</h2>
              <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white">Design</h2>
            <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white">Design</h2>
              <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white">Design</h2>
            <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white">Design</h2>
              <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white">Design</h2>
            <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white">Design</h2>
              <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
        </div>
        <div class="rowing">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white">Design</h2>
            <p class="text-white">We will help you create a website branding that is tailored to your business.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1"></div>
          </div>
        </div>
    </section>

  <?php
        while(have_posts()){
            the_post();?>
        <div class="write">
            
            <?php
            the_content(); 
        }
            ?>
    </div>
  </div>
  <!-- <div class="art"></div> -->
  <div class="full-width-split group">
      <div class=" full-width-split__one">
          <div class="full-width-split__inner">
              <h2 class="headline headline--small-plus t-center">Latest Blog</h2>
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
                      <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink();?>" class="nu gray">Read more</a></p>
                    </div>
                </div>
                
                <?php }
              ?>
              <p class="t-center no-margin"><a href="http://ccdesignweb.com/blog" class="btn btn--blue">View All Blog Posts</a></p>
          </div>
      </div>
            <div class="full-width-split__two ">
              <div class="full-width-split__inner ">
              <h2 class="headline headline--small-plus t-center">Latest Work</h2>
              <?php
                    $homepageEvents = new WP_Query(array(
                      'posts_per_page' => 1,
                      'post_type' => 'portfolio'
                    ));
          
                    while($homepageEvents->have_posts()){
                      $homepageEvents->the_post();?>

                    <div class="pic-gallery"><?php the_post_thumbnail('port2');?> </div>
                    
            <p class="t-center no-margin"><a href="http://ccdesignweb.com/portfolio" class="btn btn--yellow">View More Work</a></p>
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