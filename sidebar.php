<div id="col-widgets">
	<ul class="xoxo">

		<li id="whereabouts-widget" class="widget">
		  <h2 class="widget-title">Our Whereabouts</h2>      
		  <div class="widget-content">
		    <div id="last-location-map"></div>        
		  </div>
		  <p class="last-updated">As of Friday August 16 at 9:12am CST</p>  
		</li>
		
    <?php if ( ! dynamic_sidebar( 'Widgets in the Right Column' ) ) : ?>
      <li class="widget">
        <h2>Uh-oh!</h2>
        <div class="widget-content">
          <p>Oh, this is awkward. There should be widgets here.</p>
        </div>
      </li>
    <?php endif; // end primary widget area ?>

	</ul>
</div><!-- #primary .widget-area -->

<script>
// I know, eh:
var zoom = 6; 
var	gmapLat = 50.447577
var	gmapLong = -104.554604;
// Poorly planned. ;)
</script>