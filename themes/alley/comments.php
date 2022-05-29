<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Markup
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */

if ( post_password_required() ) {
	return;
}
$fields =  array(
    'author' => '<div class="row "><div class="col-sm-6 contact-item"><input type="text" name="author" id="author" class="input-form" placeholder="'.esc_attr__('Your name *', 'alley').'" /></div>',
    'email'  => '<div class="col-sm-6 contact-item"><input type="text" name="email" id="email" class="input-form" placeholder="'.esc_attr__('Your email *', 'alley').'"/></div>',
    'website'=>'<div class="col-sm-12 contact-item"><input type="text" name="url" id="url" class="input-form" placeholder="'.esc_attr__('Website URL', 'alley').'"/></div></div>'

);
$custom_comment_form = array(
    'fields'                => apply_filters( 'alley_comment_form_default_fields', $fields ),
    'comment_field'         => '<div class="contact-item"><textarea name="comment" id="comment" class="textarea-form" placeholder="'.esc_attr__('Your comment ...', 'alley').'"  rows="1"></textarea></div>',
    'logged_in_as'          => '<p class="logged-in-as">' . esc_html__('Logged in as', 'alley') .' <a href="'.esc_url(admin_url('profile.php')).'">'. $user_identity .'</a> <a href="'. wp_logout_url( apply_filters( 'alley_the_permalink', get_permalink() ) ) .'">'. esc_html__('Log out?', 'alley'). '</a></p>',
    'cancel_reply_link'     => esc_html__( 'Cancel' , 'alley' ),
    'comment_notes_before'  => '',
    'comment_notes_after'   => '',
    'title_reply'           => esc_html__('Leave a Reply', 'alley'),
    'label_submit'          => esc_html__( 'Post Comment' , 'alley' ),
    'id_submit'             => 'submit',
);?>
<?php if ( have_comments() ) : ?>
<div id="comments" class="comments-area">
    <?php if ( comments_open() ) : ?>
        <h2 class="title"><?php comments_number( null, esc_html__('1 Comment', 'alley'), '% ' . esc_html__('Comments', 'alley') ); ?></h3>
   	<?php endif; ?>
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'alley' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'alley' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'alley' ) ); ?></div>
	</nav>
	<?php endif; ?>    
	<ul class="comment-list">
		<?php
			wp_list_comments( array(
				'style'       => 'ul',
				'short_ping'  => true,
			) );
		?>
	</ul>    
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'alley' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'alley' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'alley' ) ); ?></div>
	</nav>
	<?php endif; ?>    
	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'alley' ); ?></p>
	<?php endif; ?>
</div>
<?php endif; ?>
<?php comment_form($custom_comment_form); ?>
