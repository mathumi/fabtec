<?php
/**
 * Template Name: Inner Page Template
 */

get_header();
?>
<?php 
  $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
  if($backgroundImg[0] == null){
    $backgroundImg[0] = esc_url(home_url('/'))."/wp-content/uploads/2018/05/banner-inner-page-about.jpg";
  }
?>
<section>
    <div class="inner_banner" style="background: url('<?php echo $backgroundImg[0]; ?>');">
    <h1><?php the_title(); ?></h1>
    </div>
</section>
<?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>
