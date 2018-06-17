<?php

/*
 * Projects Shortcode
 */

function our_projects($atts) {
    $html = '';
    $args = array(
        'post_type' => 'recent_projects',
        'post_status' => 'publish',
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
            $html .= '<div class="project_bg"><img class="img-responsive" src="'.$image[0].'"><div class="project_overlay clearfix">'
                    .'<div class="project_left"><div class="product_nam">'.$title.'</div></div><div class="project_right"><a class="read_more_url" href="'.$read_more_url.'">+</a></div>
                    </div></div></div>';
                   
        }
    }
    return $html;
}
add_shortcode('our_projects', 'our_projects');
?>