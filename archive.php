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
    // the_archive_title();
  ?></h1>
  
    <div class="write2">

        <?php
        while(have_posts()){
            the_post();?>
        <div class="write2_text post-item">
            <h2 class="blog_title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
            
            <div class="metabox">
                <p>Posted on <?php the_time('F j Y'); ?>  in <?php echo get_the_category_list(',' ); ?></p>
            </div>
            <div class="container">
            <?php
            the_excerpt(); ?>
            </div>
            <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">continue reading...</a></p><hr>
        <?php
        }
        echo paginate_links();
        ?>
        </div>
        </div>
    </div>
</div>
    


 <?php
    get_footer();
?>