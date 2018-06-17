<?php

/*
 * Our services Shortcode
 */

function certification_inner($atts) {
    $html = '';
    $args = array(
        'post_type' => 'certificate_inner',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC'
    );       
    $certifications = get_posts($args);
    if ($certifications) {
    	$html.= '<div class="certification"><ul>';
        foreach($certifications as $certification) {
        $post_id = $certification->ID;
        $post = get_post( $post_id );
	    if (has_post_thumbnail($post_id)):
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
		$html .= '<li class="cert_box"><div class="certification_border_outer"><div class="certification_border_inner"><img class="img-responsive" src="'.$image[0].'"></div></div></li>';
	    endif;                 
        }
    	$html.= '</ul></div>';        
    }
    return $html;
}

add_shortcode('certification_inner', 'certification_inner');
?>