

       <!-- FOOTER -->

      <footer id="footer" class="bg-dark text-center py-4 text-white">
        <div class="container">
          <div id="top-footer-text" class="row">
            <?php
            wp_nav_menu([
                'menu'            => 'bottom',
                'theme_location'  => 'bottom',
                'container_class' => 'col-md-6 col-sm-12',
                'menu_class'      => 'list-inline'
            ]);
            ?>
            <div class="col-md-6 d-sm-inline-block footer-social-icons">
              <a href="https://facebook.com/FriendsOfStep/?ref=aymt_homepage_panel">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a href="https://twitter.com/SwindonSTEP">
                <i class="fab fa-twitter-square"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCfzd14Hd6avMwu34MsnSD1A">
                <i class="fab fa-youtube-square"></i>
              </a>
            </div>
          </div>
          <hr>
          <div class="row text-white text-center">
            <div class="col-md-12">
              <p id="year">Copyright &copy; STEP Swindon 2009-<span>2018</span></p>
              <p id="year">By Andy French</p>
            </div>
          </div>
        </div>
      </footer>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyCjxHJP2uTgVi2EfEPyq4E4ne-oeTursHM'></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/locationpicker.jquery.js"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.magnific-popup.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery-tiles-slider.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/script.js"></script>
    
    <?php wp_footer(); ?>
  </body>
</html>