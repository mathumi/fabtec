<?php

/*
 * Our services Shortcode
 */

function current_openings($atts) {
    $html = '';
    $args = array(
        'post_type' => 'current_openings',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC'
    );       
    $current_openings = get_posts($args);
    if ($current_openings) {
    	$html.= '<div class="career_page">';
        foreach($current_openings as $current_opening) {
        $post_id = $current_opening->ID;
        $post = get_post( $post_id );
        $title = $current_opening->post_title;        
        $content = $current_opening->post_content;
        $place=get_post_meta($post_id, 'place')[0];        
	    if (has_post_thumbnail($post_id)):
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
        endif; 
		$html .= '<div class="career_inner"><h3>'.$title.'</h3>
        <p class="text"><span class="place">'.$place.'</span><span class="date">May, 2017</span></p><div>'.$content.'</div><a target="_blank" class="apply_job" href="mailto:info@fabtec.com?subject=Applying for '.$title.' &body=Hi">Apply for this Job</a></div>';	                    
        }
    	$html.= '</div>';        
    }
    return $html;
}

add_shortcode('current_openings', 'current_openings');
?>