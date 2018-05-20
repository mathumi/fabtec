<?php

/*
 * Our services Shortcode
 */

function people($atts) {
    $html = '';
    $args = array(
        'post_type' => 'people',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC'
    );       
    $people = get_posts($args);
    if ($people) {
    	$html.= '<div class="people flex"><div class="row">';
        foreach ($people as $people) {
        $post_id = $people->ID;
        $post = get_post( $post_id );
        $content = $post->post_content;
        $name=get_post_meta($post_id, 'people_name')[0];
        $designation=get_post_meta($post_id, 'designation')[0];
	    $html.= '<div class="people-item col-sm-6">';
	    if (has_post_thumbnail($post_id)):
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
		$html .= '<div class="col-sm-5"><img class="img-responsive" src="'.$image[0].'"></div>';
	    endif;
            $html .= '<div class="col-sm-7"><h4 class="people_name">'.$name.'</h4>'
           			.'<p class="designation">'.$designation.'</p>'
                    .'<div class="people_content">'. $content.'</div></div></div>';
                   
        }
    	$html.= '</div></div>';        
    }
    return $html;
}

add_shortcode('people', 'people');
?>