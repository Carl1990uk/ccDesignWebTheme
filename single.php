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
  <h3 class="title_topic"><?php 
  $title = wp_title('', false);
  $title = strip_tags($title);
  echo $title;
  ?></h3>
  
  </div>
    <div class="write2">

        <?php
        while(have_posts()){
            the_post();?>
        <div class="write2_text post-item">
            
            
            <div class="metabox">
                <p>Posted on <?php the_time('F j Y'); ?>  in <?php echo get_the_category_list(',' ); ?></p>
            </div>
            <?php
            the_content(); 
        }
            ?>
       
        
        </div>
        </div>
    </div>
</div>
    


 <?php
    get_footer();
?>