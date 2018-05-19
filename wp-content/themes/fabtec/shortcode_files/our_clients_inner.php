<?php

/*
 * Client Shortcode
 */

function our_clients_inner($atts) {
    $values = shortcode_atts($atts);  
    $html = '';
    $args = array(
        'post_type' => 'clients',
        'post_status' => 'publish',
        'numberposts' => -1,
        'order' => 'ASC'
    );       
    $clients = get_posts($args);
    if ($clients) {
        $html.= '<ul class="row list-unstyled block_row">';
        foreach ($clients as $client) {
        $post_id = $client->ID;
        $post = get_post( $post_id );
        $post_title = get_the_title($post_id);
	   	$image =(has_post_thumbnail($post_id))? wp_get_attachment_image_src(get_post_thumbnail_id($post_id), 'single-post-thumbnail')[0]: esc_url(home_url('/'))."/wp-content/uploads/2018/04/fabtec-logo.png";
    	$html .= '<li class="col-sm-4 block_box"><div class="block_inner"><div class="block_img"><img src='.$image.' alt="'.$post_title.'" title="'.$post_title.'"></div><p>'.$post_title.'</p></div></li>';           
        }
        $html.= '</ul>';
    }
    return $html;
}

add_shortcode('our_clients_inner', 'our_clients_inner');
?>