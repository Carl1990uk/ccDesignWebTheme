<?php
get_header();
?>
<div id="main">
    <div class="large_lang">
      <a class="large_lang_en" href="https://ccdesignweb.com/blog/"></a>
      <a class="large_lang_fr" href="https://ccdesignweb.com/fr/blog-2/"></a>
    </div>
  <div class="logo"></div>
  <div class="cool container-fluid"></div>
  <h1 class="title_topic"><?php 
  $title = wp_title('', false);
  $title = strip_tags($title);
  echo $title;
  ?></h1>
  
  <div class="container ">
    
            <?php
        while(have_posts()){
        the_post();?>
                    <div class="card">
                    <div class="metabox">
                        <p>Posted on <?php the_time('F j Y'); ?>  in <?php echo get_the_category_list(',' ); ?></p>
                    </div>
                    <!-- <div class="card-img-top"><?php the_post_thumbnail('port1'); ?></div> -->
                    <div class="container pb-5 card-text"><?php the_content(); ?>
                    </div>
        </div>
               
            <?php
                    }
                    
                    ?>
            </div>
                          
            
           
                
                <?php
get_footer();
?> 
</div>
              </div>