<div id="col-widgets">
	<ul class="xoxo">

		<li id="whereabouts-widget" class="widget">
		  <h2 class="widget-title">Our Whereabouts</h2>      
		  <div class="widget-content">
		    <div id="last-location-map"></div>        
		  </div>
		  <p class="last-updated">As of Friday August 5 at 9:01am MDT</p>  
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
var zoom = 12; 
var	gmapLat = 60.728464
var	gmapLong = -135.066474;
// Poorly planned. ;)
</script>