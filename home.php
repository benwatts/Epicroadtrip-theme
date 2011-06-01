<?php get_header(); ?>

  <div class="col-left">
    <div id="excerpts">
      <?php	get_template_part( 'loop', 'index' ); ?>	
    </div>
  </div> 
  
  <div class="col-right">
  
    <div id="whereabouts-widget">
      <header>
        <h2>Our Whereabouts</h2>
        <p>As of August 23 at 15:00 EST</p>
      </header>
    </div><!-- /#whereabouts-widget -->
    
    <?php get_sidebar(); ?>    
    
  </div>
  
  
  

<?php get_footer(); ?>
