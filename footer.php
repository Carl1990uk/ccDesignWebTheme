<div class=" par-pic">
      <div class="image-container"></div>
  </div>
  <footer>
      <div class="container-fluid me">
          <div class="infome">
            <p>
            Founded in 2021 with a purpose of creating and maintaining websites that  are user friendly, whilst optimising the latest tools for search engines and being responsive for different screen sizes.<br> <br>
            Here at cc<em>DesignWeb</em> we value our customers and work endlessly to ensure you have a website that reflects your buisness. 
            </p>
          </div>
          <div class="middle">
            <p>
              <!-- <em></em> -->
            </p>
          </div>
          <div class="site-footer__inner container container--narrow">
            <div class="group">
              <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color">
                  <a href="#">cc<strong>DesignWeb</strong></a></h1>
                  <nav class="nav-list">
                    <ul class="contact_details">
                      <li>Phone: 0611584705</li>
                      <li>Email: info@ccdesignweb.com</li>
                    </ul>
                  </nav>
              </div>
    
              <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                  <h3 class="headline headline--small">Explore</h3>
                  <nav class="nav-list">
                  <?php
                      wp_nav_menu(array(
                        'menu' => 'footer1',
                        'container' => "",
                        'theme_location' => 'footer1'
                      ));
                      ?>
                   
                  </nav>
                </div>
    
                <div class="site-footer__col-three">
                  <h3 class="headline headline--small">Learn</h3>
                  <nav class="nav-list">
                  <?php
                      wp_nav_menu(array(
                        'menu' => 'footer2',
                        'container' => "",
                        'theme_location' => 'footer2'
                      ));
                      ?>
    
                  </nav>
                </div>
              </div>
    
              <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav class="soc_ial">
                  <ul class="min-list  group">
                    
                    <li>
                      <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin"></i></a>
                    </li>
                   
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
          
  </footer>
</div>
</body>
</html>
<?php
wp_footer();
?>