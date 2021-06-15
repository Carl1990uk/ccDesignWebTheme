<div class="par-pic">
      <div class="image-container"></div>
  </div>
  <footer>
      <div class="container-fluid me">
         
      <div class="mb-5">
          <?php dynamic_sidebar('foot_widget');?> <?php dynamic_sidebar('foot_widget_fr');?>
      </div>
          
      
          <div class="site-footer__inner container container--narrow">
            <div class="group">
              <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color">
                  <a href="#">cc<strong>DesignWeb</strong></a></h1>
                  <nav class="nav-list">
                    <ul class="contact_details">
                      <li>UK Office: 0203 4880 572</li>
                      <li>France Office: 0611584705</li>
                      <li>Email: info@ccdesignweb.com</li>
                    </ul>
                  </nav>
              </div>
    
              <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                  <!-- <h3 class="headline headline--small">Explore</h3> -->
                  <nav class="nav-list">
                  <?php dynamic_sidebar('explore_widget');?> <?php dynamic_sidebar('explore_widget_fr');?>
                   
                  </nav>
                </div>
    
                <div class="site-footer__col-three">
                  <!-- <h3 class="headline headline--small">Learn</h3> -->
                  <nav class="nav-list">
                  <?php dynamic_sidebar('learn_widget');?> <?php dynamic_sidebar('learn_widget_fr');?>
                  </nav>
                </div>
              </div>
    
              <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav class="soc_ial">
                  <ul class="min-list  group">
                    
                    <li>
                      <a href="https://www.linkedin.com/company/78135196/" class="social-color-linkedin"><i class="fa fa-linkedin"></i></a>
                    </li>
                   
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
          
  </footer>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
<?php
wp_footer();
?>