<?php get_header(); ?>

  <div class="col-left">
  
  <section id="excerpts">
      <?php	get_template_part( 'loop', 'home' ); ?>	
    </section>

		<div class="post-nav">
	  <?php posts_nav_link(' / ','Newer Posts','Older Posts'); ?> 
	  </div>
	
  </div> 
  
  <div class="col-right">    
    <?php get_sidebar(); ?>    
  </div>

<?php get_footer(); ?>
