<?php
/*
    Template name: Portfolio
*/
get_header();
?>
<div id="main">
    <div class="large_lang">
      <a class="large_lang_en" href="https://ccdesignweb.com/portfolio"></a>
      <a class="large_lang_fr" href="https://ccdesignweb.com/portfolio"></a>
    </div>
  <div class="logo"></div>
  <div class="cool container-fluid"></div>
  <h1 class="title_topic">Portfolio</h1>
        

        <div class="write2">
            <div class="write2_text post-item">
        <?php
          while(have_posts()){
            the_post();?>
               <h2 class="blog_title"><?php the_title(); ?></h2>
               <div class="metabox">
                   <p>Created on: <?php the_time('F j Y'); ?> </p>
               </div>
               <div class="pic-gallery"><?php the_post_thumbnail('port2'); ?> </div> <hr>
       
            
            <?php
        }
            ?>
            <?php
        
        echo paginate_links();
        ?>
            
        </div>
    </div>
</div>
</div>
    


 <?php
    get_footer();
?>