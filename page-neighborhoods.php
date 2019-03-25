<?php

/**

 * Template Name: Neighborhoods

 */



get_header(); ?>


<div id="main-wrapper">

<div id="main">




<div class="page-content">
<div class="neighborhoods-text neighborhoods-text-img"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title()?></h1>

<!-- -->
<?php the_content()?>
<?php endwhile; endif; ?>
</div>

<!-- content -->
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'neighborhoods', // your custom post type
'posts_per_page' => -1,
'orderby'=> 'title',
'order' => 'ASC', // # of posts to show use -1 for all posts. 
));
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('featured_image');
  $image = get_field('featured_image');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'neighborhoods_featured';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
<a href="<?php the_permalink() ?>"><img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" /></a>
<?php endif; ?></div>
<div class="home-featured-neighborhood-heading-wrapper"><div class="home-featured-neighborhood-heading"><?php the_title(); ?></div><img src="<?php bloginfo('template_url'); ?>/images/bg-featured-heading.png" alt="" border="0"></div>


</div>
<?php endwhile;   ?>
<?php endif;   ?>

<!-- / content -->


<!-- -->




</div>



<?php get_footer(); ?>