<?php
get_header();
?>
  <div id="main">
    <div class="large_lang" >
      <a class="large_lang_en" href="https://ccdesignweb.com/"></a>
      <a class="large_lang_fr" href="https://ccdesignweb.com/fr/home-2/"></a>
    </div>

      <div class="logo"style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/long-logo-2-scaled.jpg);" data-aos="flip-left"></div>

    <div class="cool container-fluid"></div>
  
    
    <section class="categories pt-5">
        <div class="rowing potatoing" >
          <div class="categories__col col-lg col-sm-12 "data-aos="fade-up">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/webdesign-_3_-scaled.jpeg);" ></div>
          </div>
          <div class="container categories__col col-lg col-sm-12"  data-aos="fade-up" >
            <?php dynamic_sidebar('design_widget');?> <?php dynamic_sidebar('design_widget_fr');?>
          </div>
        </div>
        <div class="rowing ">
          <div class="container categories__col col-lg col-sm-12" data-aos="fade-up">
          <?php dynamic_sidebar('responsive_widget');?> <?php dynamic_sidebar('responsive_widget_fr');?>
          </div>
          <div class="categories__col col-lg col-sm-12 " data-aos="fade-up">
            <div class="photo1" style=" background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/mainscreen-_2_-scaled.jpeg);"></div>
          </div>
        </div>
        <div class="rowing potatoing" >
          <div class="categories__col col-lg col-sm-12 " data-aos="fade-up">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/padlock-scaled.jpeg);"></div>
          </div>
          <div class="container categories__col col-lg col-sm-12" data-aos="fade-up">
          <?php dynamic_sidebar('security_widget');?> <?php dynamic_sidebar('security_widget_fr');?>
              
          </div>
        </div>
        <div class="rowing">
          <div class="container categories__col col-lg col-sm-12" data-aos="fade-up">
          <?php dynamic_sidebar('hosting_widget');?> <?php dynamic_sidebar('hosting_widget_fr');?>
          </div>
          <div class="categories__col col-lg col-sm-12 " data-aos="fade-up">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/Servers-scaled.jpeg);"></div>
          </div>
        </div>
        <div class="rowing potatoing ">
          <div class="categories__col col-lg col-sm-12 " data-aos="fade-up">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/wordpress-scaled.jpeg);"></div>
          </div>
          <div class="container categories__col col-lg col-sm-12" data-aos="fade-up">
          <?php dynamic_sidebar('easy_use_widget');?> <?php dynamic_sidebar('easy_use_widget_fr');?>
          </div>
        </div>
        <div class="rowing" >
          <div class="container categories__col col-lg col-sm-12" data-aos="fade-up">
          <?php dynamic_sidebar('tech_widget');?> <?php dynamic_sidebar('tech_widget_fr');?>
          </div>
          <div class="categories__col col-lg col-sm-12 "data-aos="fade-up">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/coding-scaled.jpeg);"></div>
          </div>
        </div>
        <div class="rowing potatoing">
          <div class="categories__col col-lg col-sm-12 "data-aos="fade-up">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/analyse_1-scaled.jpeg);"></div>
          </div>
          <div class="container categories__col col-lg col-sm-12" data-aos="fade-up">
          <?php dynamic_sidebar('seo_widget');?> <?php dynamic_sidebar('seo_widget_fr');?>
          </div>
        </div>
        <div class="rowing" >
          <div class="container categories__col col-lg col-sm-12" data-aos="fade-rup">
          <?php dynamic_sidebar('domain_widget');?> <?php dynamic_sidebar('domain_widget_fr');?>
          </div>
          <div class="categories__col col-lg col-sm-12 "data-aos="fade-up">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/domain-name-scaled.jpeg);"></div>
          </div> 
        </div>
    </section>
  <!-- <div class="art"></div> -->
  <div class="full-width-split group" >
      <div class="full-width-split__one" data-aos="fade-right">
          <div class="full-width-split__inner" style="overflow:hidden">
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
            <div class="full-width-split__two" style="overflow:hidden" data-aos="fade-up">
              <div class="full-width-split__inner" style="overflow:hidden">
              <h2 class="headline headline--small-plus t-center text-white">Latest Work</h2>
              <?php
                    $homepageEvents = new WP_Query(array(
                      'posts_per_page' => 1,
                      'post_type' => 'portfolio'
                    ));
          
                    while($homepageEvents->have_posts()){
                      $homepageEvents->the_post();?>

                    <div class="pic-gallery"><?php the_post_thumbnail('port2');?> </div>
                    
            <p class="t-center no-margin"><a href="http://ccdesignweb.com/portfolio" class="btn btn--yellow text-white">View More Work</a></p>
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