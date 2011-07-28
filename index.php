<?php get_header(); ?>

  <div class="col-left">
    <section id="excerpts">
      <?php	get_template_part( 'loop', 'index' ); ?>	
    </section>
  </div> 
  
  <div class="col-right">    
    <?php get_sidebar(); ?>    
  </div>

<?php get_footer(); ?>
