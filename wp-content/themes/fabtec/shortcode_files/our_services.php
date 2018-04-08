<?php

/*
 * Employee services Shortcode
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
            $designation = get_the_content(post_id);
	    $html.= '<div class="item col-sm-4">';
	    if (has_post_thumbnail($post_id)):
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
		$html .= '<div class="service_bg" style="background-image:url('.$image[0].')")></div>';
	    endif;
            $html .= '<div class="service_nam">'.$title.'</div>'
                    .'<div class="service_prof">'. $content.'</div>
                    <a href="'.$read_more_url.'">Read More</a>
                    </div>';
                   
        }
    }
    return $html;
}

add_shortcode('our_services', 'our_services');
?>