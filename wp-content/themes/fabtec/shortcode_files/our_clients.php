<?php

/*
 * Client Shortcode
 */

function our_clients($atts) {
    $html = '';
    $args = array(
        'post_type' => 'clients',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC',
        'numberposts' => 6
    );       
    $clients = get_posts($args);
    if ($clients) {
        $html.= '<ul class="client-section">';
        foreach ($clients as $client) {
        $post_id = $client->ID;
        $post = get_post( $post_id );
	   	$image =(has_post_thumbnail($post_id))? wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail')[0]: esc_url(home_url('/'))."/wp-content/uploads/2018/04/fabtec-logo.png";
    	$html .= '<li style="background-image:url('.$image.')"></li>';           
        }
        $html.= '</ul>';
    }
    return $html;
}

add_shortcode('our_clients', 'our_clients');
?>