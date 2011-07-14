<?php get_header(); ?>

  <div class="col-left">
    <section id="excerpts">
      <?php	get_template_part( 'loop', 'home' ); ?>	
    </section>
    
    <p class="more"><a href="" title="View full travel log">View full travel log</a></p>
  </div> 
  
  <div class="col-right">
  
    <section id="whereabouts-widget" class="widget">
      <header>
        <h2>Our Whereabouts</h2>
        <p class="last-updated">As of August 23 at 15:00 EST</p>
      </header>
      
      <div class="widget-content">
        <div id="last-location-map"></div>        
      </div>
      
    </section><!-- /#whereabouts-widget -->
    
    
    <?php get_sidebar(); ?>    
    
  </div>
  
  
  

<?php get_footer(); ?>
