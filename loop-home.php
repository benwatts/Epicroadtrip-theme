<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

		<div class="entry-content excerpt">
			<?php the_excerpt(); ?>
			
		</div>
		
		<div class="entry-details clearfix">
		  <div class="left comments-link">
				<?php comments_popup_link('Leave a comment', '1 Comment', '% Comments'); ?>
		  </div>
		  <div class="right">
		    <span class="date-posted"><?php the_date(); ?></span> by <span class="author-name"><?php the_author(); ?> <?php edit_post_link( 'Edit', '<small class="edit-link">(', ')</small>' ); ?></span>
		  </div>
		</div>
		
	</div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>