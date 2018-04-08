<?php

/*
 * Our services Shortcode
 */

function our_services($atts) {
    $html = '';
    $args = array(
        'post_type' => 'our_services',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC',
        'numberposts' => 6
    );       
    $services = get_posts($args);
    if ($services) {
        foreach ($services as $service) {
            $post_id = $service->ID;
            $post = get_post( $post_id );
	    $title = $service->post_title;
        $content = $post->post_content;
        $read_more_url=get_post_meta($post_id, 'read_more_url')[0];
	    $html.= '<div class="item col-sm-4">';
	    if (has_post_thumbnail($post_id)):
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
		$html .= '<div class="service_bg" style="background-image:url('.$image[0].')")></div>';
	    endif;
            $html .= '<h4 class="service_nam red_text">'.$title.'</h4>'
                    .'<div class="service_prof">'. the_excerpt_max_charlength($content,210).'</div>
                    <a href="'.$read_more_url.'" class="btn_primary">Read More</a>
                    </div>';
                   
        }
    }
    return $html;
}

add_shortcode('our_services', 'our_services');
?>