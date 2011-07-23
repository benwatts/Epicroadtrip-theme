<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	  
    <div class="post-cap-top"><!-- A cap? I know. I'm a monster. --></div>
	
    <div class="post-content">
      <header class="clearfix">
  		  <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
  		</header>
  
  		<div class="entry">
  		  <?php
        if(has_post_thumbnail()){
        	the_post_thumbnail();
        }
  			the_content(); 
  			?>
  		</div>
		</div><!-- /.post-content -->
		
		<div class="post-cap-bottom"><!-- Oh shit! Another one! --></div>
		
		
	</article><!-- #post-## -->

<?php endwhile; // end of the loop. ?>