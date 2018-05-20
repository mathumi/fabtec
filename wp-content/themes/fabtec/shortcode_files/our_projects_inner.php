<?php

/*
 * Projects Shortcode
 */

function our_projects_inner($atts) {
    $html = '';
    $args = array(
        'post_type' => 'recent_projects',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'DESC'
    );     


    $projects = get_posts($args);
    if ($projects) {
        foreach ($projects as $project) {
        $post_id = $project->ID;
        $post = get_post( $post_id);
	    $title = $project->post_title;
        $banner_img1 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_1', true),'large');
        $banner_img2 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_2', true),'large');
        $banner_img3 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_3', true),'large');
        $banner_img4 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_4', true),'large');
        $banner_img5 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_5', true),'large');
        $banner_img6 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_6', true),'large');

        $image_1 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_1', true),'thumbnail');
        $image_2 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_2', true),'thumbnail');
        $image_3 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_3', true),'thumbnail');
        $image_4 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_4', true),'thumbnail');
        $image_5 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_5', true),'thumbnail');
        $image_6 = wp_get_attachment_image_src(get_post_meta($post_id, 'project_image_6', true),'thumbnail');
        $image_arr= array($image_1, $image_2, $image_3, $image_4, $image_5, $image_6);
        $banner_image_arr= array($banner_img1, $banner_img2, $banner_img3, $banner_img4, $banner_img5, $banner_img6);
        
        $project_type = get_field('project_type', $post_id);
        $read_more_url = get_field('url_field', $post_id);
        $post_title = get_the_title($post_id);
        $post = get_post( $post_id );
	    $html.= '';
        $html.='<div class="container-fluid slider_section"><h2 class="blue_plain_head">'.$post_title.'</h2><div class="row row_flex slider_row"><div class="project_slider col-sm-6"><div class="slider_nav"><img src="'.$banner_img1[0].'"></div><div class="slider_thumb">';
        $index=0;
	    foreach ($image_arr as $image){
           if($image[0]!=NULL){
            $html .= '<div class="slider_img"><img src="'.$image[0].'" data-large="'.$banner_image_arr[$index][0].'"></div>';
            }
            $index++;
        }
        $html.='</div></div><div class="col-sm-6">'.$post->post_content.'</div></div>';
        $html.='<hr class="gray_line"></div>';
                   
        }
    }
    return $html;
}
add_shortcode('our_projects_inner', 'our_projects_inner');
?>