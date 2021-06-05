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
        
        
       
        
       
                    
                
        <div class="container-fluid con-col">
    
    <div class="row">
    <?php
while(have_posts()){
the_post();?>
    <div class="col-sm-6">
        <div class="card">
        <img class="card-img-top" src="<?php the_post_thumbnail('port2'); ?>">
        <div class="card-body">
            <h5 class="card-title text-center new_title"><p class="card-text"><?php the_content(); ?></p></h5>
            <div class="metabox">
            <p>Created on: <?php the_time('F j Y');?></p>
            </div>
            
            
        </div>
        </div>
    </div>
    <?php
            }
            echo paginate_links();
            ?>
        </div>
    </div>
  








<?php
get_footer();
?> 