<?php get_header(); ?>

  <div class="col-left">
    <section id="excerpts">
      <?php	get_template_part( 'loop', 'home' ); ?>	
    </section>
    
    <p class="more"><a href="" title="View full travel log">View full travel log</a></p>
  </div> 
  
  <div class="col-right">    
    <?php get_sidebar(); ?>    
  </div>

<?php get_footer(); ?>
