<?php

add_action( 'after_setup_theme', 'rt_setup' );


function rt_setup() {
	
	add_editor_style(); // This theme styles the visual editor with editor-style.css to match the theme style.
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) ); // Post Format support. You can also use the legacy "gallery" or "asides" (note the plural) categories.
	add_theme_support( 'post-thumbnails' ); // This theme uses post thumbnails
	add_theme_support( 'automatic-feed-links' ); // Add default posts and comments RSS feed links to head

	register_nav_menus( array(
		'primary' => 'Banner',
	) );

  register_taxonomy('location', 'post', array(
                                          'label'=>'Location', 
                                           'sort' => true,
                                           'args' => array('orderby', 'term_order'),
                                           'rewrite' => array('slug', 'location')
                                          )
  );

	set_post_thumbnail_size( 265, 175, true );
}


/** 
 * Add home button to the menu automagically. 
 * Won't add the selected state, unfortunately. 
 */
function new_nav_menu_items($items) {
	$homelink = '<li class="home"><a href="' . home_url( '/' ) . '">' . __('Home') . '</a></li>';
	$items = $homelink . $items;
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items' );



/**
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @since Twenty Ten 1.0
 * @return int
 */
function twentyten_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'twentyten_excerpt_length' );



/**
 * Returns a "Continue Reading" link for excerpts
 */
function twentyten_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) . '</a>';
}



/**
 * Remove inline styles printed when the gallery shortcode is used.
 */
add_filter( 'use_default_gallery_style', '__return_false' );





/** 
 * Register widgety areas. 
 */
function rt_widgets_init() {
	register_sidebar( array(
		'name' => 'Widgets in the Right Column',
		'id' => 'widgets-right-col',
		'description' =>'Fun right column widgets. *cough*',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<header><h3 class="widget-title">',
		'after_title' => '</h3></header>',
	) );

}
add_action( 'widgets_init', 'rt_widgets_init' );



/**
 * Oh just, you know, Wordpress' strange comment callback function. 
 */
function bw_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	
	<?php // PINGBACK ?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyeleven' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	
	<?php // COMMENT ?>
 	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
	  
	  <div class="a-comment clearfix">
  	  <div class="comment-gravatar"><?php echo get_avatar( $comment, 42 ); ?></div>
	  
  		<article id="comment-<?php comment_ID(); ?>" class="comment">
		  
  		  <p class="comment-author"><?php comment_author_link() ?> said:</p>

  			<?php if ( $comment->comment_approved == '0' ) : ?>
  				<p class="comment-awaiting-moderation notice"><em>Your comment is awaiting moderation.</em></p>
  			<?php endif; ?>
			
  			<div class="comment-content"><?php comment_text(); ?></div>

        <footer class="comment-details clearfix">
  			  <a href="<?php echo get_comment_link( $comment->comment_ID) ?>"><time pubdate datetime="<?php get_comment_time( 'c' ) ?>"><?php comment_date() ?></time></a>
  			  <?php edit_comment_link( '[Edit]', '| ' ); ?>
    			<div class="reply">
    				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    			</div>			  
        </footer>

  		</article><!-- #comment-## -->
		</div>

	<?php
			break;
	endswitch;
}
