<?php
/**
 * Displays a Single New Developments Post
 */

get_header(); ?>

	
<div id="main-wrapper">

<div id="main">




<div class="page-content">



<div id="news-events">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="developments-left">
<h1><?php the_title(); ?></h1>
<?php the_field("brief_intro"); ?>
<?php the_field("content"); ?>

<p><?php 
$image = get_field('development_logo');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>
</div>

<div id="developments-right">
<?php
$image = get_field('photo');
  $image = get_field('photo');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'neighborhoods_large';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>

</div>

  
          <!-- blog featured image  -->
        
        
 		<?php the_content(); ?>
        



<?php endwhile; endif; ?>        

<div id="prev-next-links">
<!-- content -->
<?php
$wp_query = new WP_Query();
$wp_query->query(array(
'post_type'=>'new_developments', // your custom post type
'posts_per_page' => -1,
'tax_query' => array(
array(
'taxonomy' => 'development', // your custom taxonomy
'field' => 'slug',
)
)
));
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<li><?php the_title(); ?></li>
<?php endwhile;   ?>
<?php endif;   ?>

<!-- / content -->
</div>

</div>


</div>





<?php get_footer(); ?>