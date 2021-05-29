<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="ccDesignWeb, for WebDesign made easy. We do it all and you get to sit back and relax. You can be involved in every step of the way or we can do everything">
    <meta name="keyword" content="Website design,creation,multilingual websites, SEO, ranking in Google,responsive website,bilingual,ccDesignWeb, ccDesignWeb.com, website creation near me, wordpress, bootstrap">
    <meta name="og:image" content="https://ccdesignweb.com/wp-content/uploads/2021/05/cclogo.jpg">
    <link rel="icon" href="https://ccdesignweb.com/wp-content/uploads/2021/05/cclogo.jpg" type="image/gif" sizes="16x16">
    <title><?echo get_the_title();?></title>
    <meta name="google-site-verification" content="U8WRHuV60128jQByW0WmQaYVaUN0ZXjundhZFEWLH50"/>
    <?php
  wp_head();
  ?>
</head>
<body>
  <div class="site-header">

  <?php
    wp_nav_menu(array(
      'menu' => 'primary',
      'container' => "",
      'theme_location' => 'primary',
      'items_wrap' => '<ul id="" class="topNav">%3$s</ul>'
    ));
  ?>
    <!-- <ul class="topNav">
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/">Home</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/tariffs/">Tariffs</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/portfolio">Portfolio</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/blog/">Blog</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/contact/">Contact</a></li>
    </ul> -->
    <button class="navbut" onclick="toggleNav()" type="button"data-target="dropnav"></button>
  </div>
  <nav class="nav-menu" id="dropnav">
  <?php
    wp_nav_menu(array(
      'menu' => 'seconadary',
      'container' => "",
      'theme_location' => 'secondary',
      'items_wrap' => '<ul id="" class="float-end">%3$s</ul>'
    ));
  ?>
    <!-- <ul class="float-end">
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/">Home</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/tariffs/">Tariffs</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/portfolio">Portfolio</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/blog/">Blog</a></li>
      <li class="moblinks"><a class="alink" href="http://ccdesignweb.com/contact/">Contact</a></li>
    </ul> -->
  </nav>
