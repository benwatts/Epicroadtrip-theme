<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentyten' ) . '</span> %title' ); ?></div>
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '</span>' ); ?></div>
				</div><!-- #nav-above -->

      	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <div class="post-cap-top"><!-- A cap? I know. I'm a monster. --></div>

          <div class="post-content">
            <header class="clearfix">
        		  <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
              <time class="entry-date" datetime="<?php get_the_date( 'c' ) ?>" pubdate><?php the_date('F d, Y'); ?></time>
        		</header>

        		<div class="entry">
        		  <?php
              if(has_post_thumbnail()){
              	the_post_thumbnail();
              }
        			the_content(); 
        			?>
        		</div>

        		<footer class="entry-meta clearfix">

        		  <div class="entry-details">
        		    <div class="gravatar">
        		      <?php echo get_avatar( get_the_author_meta( 'user_email' ), 48 ); ?>
        		    </div>
        		    <!--
        		    <div class="post-author-info">
        		      <p>By: <em><?php the_author(); ?><?php edit_post_link( 'Edit', '<small class="edit-link">(', ')</small>' ); ?></p>
          		    <p>In: <?php the_taxonomies(); ?> </p>
        		    </div>
        		    -->
        		  </div>
        		</footer>
      		</div><!-- /.post-content -->

      		<div class="post-cap-bottom"><!-- Oh shit! Another one! --></div>


      	</article><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>