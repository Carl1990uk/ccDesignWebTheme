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
    
    
    <section class="categories pt-5">
        <div class="rowing potatoing" >
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/webdesign-_3_-scaled.jpeg);" ></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Design</h2>
            <p class="text-white text-center center-text mt-5">We will help you create a website branding that is tailored to your business.</p>
          </div>
        </div>
        <div class="rowing " >
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Responsive</h2>
              <p class="text-white text-center center-text mt-5">With all packages your website will be viewable from iPads and tablets to phones and obviously laptop/computers.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style=" background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/mainscreen-_2_-scaled.jpeg);"></div>
          </div>
        </div>
        <div class="rowing potatoing  ">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/padlock-scaled.jpeg);"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Security</h2>
              <p class="text-white text-center mt-5">All websites come with a SSL certificate</p>
          </div>
        </div>
        <div class="rowing  " >
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Hosting</h2>
            <p class="text-white text-center mt-5">Hosting is essential, we can deal with this on your behalf</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/Servers-scaled.jpeg);"></div>
          </div>
        </div>
        <div class="rowing potatoing " >
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/wordpress-scaled.jpeg);"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Easy use</h2>
              <p class="text-white text-center mt-5">After the website is published, you will have access to the WordPress CMS, and will have full power to edit your site as you please.</p>
          </div>
        </div>
        <div class="rowing  ">
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Tech help</h2>
            <p class="text-white text-center mt-5">Once you become a client of Designweb, you will receive full technical maintenance including backups, advice and much more.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/coding-scaled.jpeg);"></div>
          </div>
        </div>
        <div class="rowing potatoing ">
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/analyse_1-scaled.jpeg);"></div>
          </div>
          <div class="categories__col col-lg col-sm-12">
              <h2 class="text-white text-center mt-5">Search engine optimization (SEO)</h2>
              <p class="text-white text-center mt-5">SEO is the process of improving your traffic to your website by search engines, such as google. Your website will be indexed, thus search engines such as google will be able to find you!</p>
          </div>
        </div>
        <div class="rowing  " >
          <div class="categories__col col-lg col-sm-12">
            <h2 class="text-white text-center mt-5">Domain</h2>
            <p class="text-white text-center mt-5">Not forgetting the most important part, we will help you find the perfect name for your business.</p>
          </div>
          <div class="categories__col col-lg col-sm-12 ">
            <div class="photo1" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/domain-name-scaled.jpeg);"></div>
          </div> 
        </div>
    </section>
  <!-- <div class="art"></div> -->
  <div class="full-width-split group" >
      <div class=" full-width-split__one" >
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
            <div class="full-width-split__two " style="overflow:hidden">
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