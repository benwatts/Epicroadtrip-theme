	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword">This post is password protected. Enter the password to view any comments.</p>
	</div><!-- #comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title"><?php printf( _n('One comment', '%1$s comments', get_comments_number()), number_format_i18n( get_comments_number() )); ?></h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<div class="nav-previous"><?php previous_comments_link( '&larr; Older Comments' ); ?></div>
			<div class="nav-next"><?php next_comments_link( 'Newer Comments &rarr;' ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'bw_comment' ) ); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<div class="nav-previous"><?php previous_comments_link( '&larr; Older Comments' ); ?></div>
			<div class="nav-next"><?php next_comments_link( 'Newer Comments &rarr;' ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>

  <?php
  $comment_fields =  array(
  	'author' => '<p class="comment-form-author">' . '<label for="author">Name <em>*</em></label> '.
  	            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
  	'email'  => '<p class="comment-form-email"><label for="email">Email <em>*</em></label> ' .
  	            '<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
  	'url'    => '<p class="comment-form-url"><label for="url">Website</label>' .
  	            '<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
  );  
  
  ?>

	<?php comment_form(array('fields'=>$comment_fields, 'comment_notes_after' => '')); ?>

</div><!-- #comments -->
