<?php
/*
    Template Name: Privacy
*/
get_header();
?>
<div id="main">
    <div class="large_lang">
      <a class="large_lang_en" href="https://ccdesignweb.com/privacy/"></a>
      <a class="large_lang_fr" href="https://ccdesignweb.com/fr/intimite/"></a>
    </div>
    <div class="logo" style="background-image: url(https://ccdesignweb.com/wp-content/uploads/2021/06/long-logo-2-scaled.jpg);"></div>
  <div class="cool container-fluid"></div>
  <h1 class="title_topic"><?php 
  $title = wp_title('', false);
  $title = strip_tags($title);
  echo $title;
  ?></h1>
  
  </div>
    <div class="write2">

        <?php
        while(have_posts()){
            the_post();?>
        <div class="write2_text post-item">
            
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