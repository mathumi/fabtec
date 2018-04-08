<?php

/*
 * Projects Shortcode
 */

function our_projects($atts) {
    $html = '';
    $args = array(
        'post_type' => 'recent_projects',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC',
        'numberposts' => 6
    );       
    $projects = get_posts($args);
    if ($projects) {
        foreach ($projects as $project) {
        $post_id = $project->ID;
        $post = get_post( $post_id );
	    $title = $project->post_title;
        $project_type = get_field('project_type', $post_id);
        $read_more_url = get_field('url_field', $post_id);
	    $html.= '<div class="item col-sm-4">';
	    if (has_post_thumbnail($post_id)):
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail');
	    endif;
            $html .= '<div class="project_bg" style="background-image:url('.$image[0].')")><div class="service_nam">'.$title.'</div>'
                    .'<div class="service_prof">'. $project_type.'</div>
                    <a href="'.$read_more_url.'">Read More</a>
                    </div></div>';
                   
        }
    }
    return $html;
}
add_shortcode('our_projects', 'our_projects');
?>