<?php
/*
    Template Name: Tariffs
*/
get_header();
?>

<div id="main">
    <div class="large_lang">
      <a class="large_lang_en" href="https://ccdesignweb.com/tariffs"></a>
      <a class="large_lang_fr" href="https://ccdesignweb.com/fr/tarifs/"></a>
    </div>
  <div class="logo"></div>
  <div class="cool container-fluid"></div>
  <h1 class="title_topic"><?php 
  $title = wp_title('', false);
  $title = strip_tags($title);
  echo $title;
  ?></h1>
  
  
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


    





<?php
get_footer();
?>
</div>