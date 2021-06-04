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
  
  <div class="container-fluid con-col">
    
            <div class="row">
            <?php
        while(have_posts()){
        the_post();?>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center new_title"><a href="<?php the_permalink(); ?>"><?php the_title();?></h5>
                    <div class="metabox">
                        <p>Posted on <?php the_time('F j Y'); ?>  in <?php echo get_the_category_list(',' ); ?></p>
                    </div>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <div class="metabox">
                        <a class="btn btn--blue" href="<?php the_permalink(); ?>">continue reading...</a>
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