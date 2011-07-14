
  </div><!-- /#main -->

  <footer id="bottom">
  
  </footer>


</div><!-- /.wrapper -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='<?php bloginfo( 'template_url' ); ?>/js/jquery-1.6.1.min.js'>\x3C/script>")</script>
  <script src="<?php bloginfo( 'template_url' ); ?>/js/cherokee.js"></script>
  
  <script>
    var _gaq=[["_setAccount","UA-24534496-1"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>
  
  <script src="//maps.google.com/maps/api/js?sensor=false"></script>
  <script>
  // determine how this is going to work...
  var myLatlng = new google.maps.LatLng(-34.397, 150.644);
  var myOptions = {
    zoom: 8,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };  
  var map = new google.maps.Map(document.getElementById("last-location-map"), myOptions);
  </script>
  
  <small style="color: yellow">UA-XXXXX-X</small>  

  <?php wp_footer(); ?>

</body>
</html>
