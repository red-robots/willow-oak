<?php

/**

 * Template Name: New Developments

 */



get_header(); ?>


<div id="main-wrapper">

<div id="main">




<div class="page-content">

<h1><?php the_title()?></h1>



<!-- -->

<!-- content -->
<div class="new-developments-row">
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
'terms' => 'dilworth' // the terms (categories) you created
)
)
));
if ($wp_query->have_posts()) : ?>

<h2>Dilworth</h2>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
</div>
<!-- / content -->

<!-- content -->
<div class="new-developments-row">
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
'terms' => 'elizabeth' // the terms (categories) you created
)
)
));
if ($wp_query->have_posts()) : ?>

<h2>Elizabeth</h2>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
</div>
<!-- / content -->

<!-- content -->
<div class="new-developments-row">
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
'terms' => 'myers-park' // the terms (categories) you created
)
)
));
if ($wp_query->have_posts()) : ?>

<h2>Myers Park</h2>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
</div>
<!-- / content -->

<!-- content -->
<div class="new-developments-row">
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
'terms' => 'plaza-midwood' // the terms (categories) you created
)
)
));
if ($wp_query->have_posts()) : ?>

<h2>Plaza Midwood</h2>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
</div>
<!-- / content -->



<!-- content -->
<div class="new-developments-row">

<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
'terms' => 'south-end' // the terms (categories) you created
)
)
));
if ($wp_query->have_posts()) : ?>

<h2>South End</h2>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
</div>
<!-- / content -->

<!-- content -->
<div class="new-developments-row">
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
'terms' => 'south-park' // the terms (categories) you created
)
)
));
if ($wp_query->have_posts()) : ?>

<h2>South Park</h2>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
</div>
<!-- / content -->

<!-- content -->
<div class="new-developments-row">
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
'terms' => 'uptown' // the terms (categories) you created
)
)
));
if ($wp_query->have_posts()) : ?>

<h2>Uptown</h2>

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="home-featured-neighborhood">
<div class="home-featured-neighborhood-image"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
</div>
<!-- / content -->


<!-- -->




</div>



<?php get_footer(); ?>