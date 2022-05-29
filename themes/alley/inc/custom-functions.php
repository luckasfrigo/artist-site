<?php
/**
 * Checkbox sanitization callback.
 */
function alley_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

/**
 * Select sanitization callback example.
 *
 * - Sanitization: select
 * - Control: select, radio
 */
function alley_sanitize_select( $input, $setting ) {
	
	// Ensure input is a slug.
	$input = sanitize_key( $input );
	
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}


/**
 * Social Sharing Hook
 * @since 1.0.0
 *
 * @param int $post_id
 * @return void
 *
 */
if (!function_exists('alley_social_sharing')) :
    function alley_social_sharing($post_id)
    {
        $alley_url = get_the_permalink($post_id);
        $alley_title = get_the_title($post_id);
        $alley_image = get_the_post_thumbnail_url($post_id);
        
        //sharing url
        $alley_twitter_sharing_url = esc_url('http://twitter.com/share?text=' . $alley_title . '&url=' . $alley_url);
        $alley_facebook_sharing_url = esc_url('https://www.facebook.com/sharer/sharer.php?u=' . $alley_url);
        $alley_pinterest_sharing_url = esc_url('http://pinterest.com/pin/create/button/?url=' . $alley_url . '&media=' . $alley_image . '&description=' . $alley_title);
        $alley_linkedin_sharing_url = esc_url('http://www.linkedin.com/shareArticle?mini=true&title=' . $alley_title . '&url=' . $alley_url);
        
        ?>
        <div class="post-share">
            <a target="_blank" href="<?php echo $alley_facebook_sharing_url; ?>"><i class="fa fa-facebook"></i></a>
            <a target="_blank" href="<?php echo $alley_twitter_sharing_url; ?>"><i
                        class="fa fa-twitter"></i></a>
            <a target="_blank" href="<?php echo $alley_pinterest_sharing_url; ?>"><i
                        class="fa fa-pinterest"></i></a>
            <a target="_blank" href="<?php echo $alley_linkedin_sharing_url; ?>"><i class="fa fa-linkedin"></i></a>
        </div>
        <?php
    }
endif;
add_action('alley_social_sharing', 'alley_social_sharing', 10);