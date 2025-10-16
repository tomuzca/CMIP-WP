<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url('/home') ?>" style="background-image: url('<?php echo get_theme_file_uri('/images/logo.png') ?>'); background-size: contain; background-repeat: no-repeat; background-position: center; display: block; width: 200px; height: 80px; text-indent: -9999px;"></a>
            </h1>
            <p><a style="background-position: center;">190 Sierra Court suite b113,</br> Palmdale, CA, </br>93550, USA</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
                <?php
                wp_nav_menu(array(
                'theme_location' =>'footerLocationOne'
              ));
              ?>
                <!-- <ul>
                  <li <?php if(is_page('about-us')) echo'class="current-menu-item"'?>>
                      <a href="<?php echo site_url('/about-us') ?>">About Us</a>
                  </li>
                  
                  <li <?php if(is_page('services')) echo'class="current-menu-item"'?>
                      <a href="<?php echo site_url('/services') ?>">Services</a>
                  </li>
                  
                  <li<?php if(is_page('work-with-us')) echo'class="current-menu-item"'?>
                      <a href="<?php echo site_url('/work-with-us') ?>">Work with us</a>
                  </li>
                  
                  <li <?php if(is_page('subcontractor')) echo'class="current-menu-item"'?>
                    <a href="<?php echo site_url('/subcontract') ?>">Subcontractors & Partners</a>
                  </li>
                  
                  <li<?php if(is_page('contact-us')) echo'class="current-menu-item"'?>
                    <a href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
                  </li>
                </ul>-->
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li><a href="https://www.facebook.com" class="social-color-facebook" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.x.com" class="social-color-twitter" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com" class="social-color-youtube" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com" class="social-color-linkedin" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com" class="social-color-instagram" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>