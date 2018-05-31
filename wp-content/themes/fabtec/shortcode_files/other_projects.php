<?php

/*
 * Other projects Shortcode
 */

function other_projects($atts) {
    $html = '';
    $args = array(
        'post_type' => 'other_projects',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC'
    );       
    $other_projects = get_posts($args);
    if ($other_projects) {
    	$html.= '<ul class="other_project_list">';
        foreach($other_projects as $other_project) {
        $post_id = $other_project->ID;
        $post_title = get_the_title($post_id);
        $post = get_post( $post_id );
	    if (has_post_thumbnail($post_id)):
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
		$html .= '<li class="op_block_box"><div class="op_block_inner"><div class="op-block_img"><img src="'.$image[0].'" /></div><p>'.$post_title.'</p></div></li>';
	    endif;                 
        }
    	$html.= '</ul>';        
    }
    return $html;
}
add_shortcode('other_projects', 'other_projects');
?>