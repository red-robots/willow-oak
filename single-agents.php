<?php
/**
 * Displays a Single Post
 */

get_header(); ?>

	
<div id="main-wrapper">

<div id="main">




<div class="page-content">


<div id="single-agent">

<h1><?php the_title(); ?></h1>



<?php if (strlen(get_post_meta($post->ID, "testimonial", true)) > 0) : ?>
<div id="agents-sidebar">
<?php the_field("testimonial") ?>
</div>
<?php endif; ?>








<div class="agent-info">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agent-image"><a href="<?php the_permalink() ?>"><?php
$image = get_field('agent_photo');
  $image = get_field('agent_photo');
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'agent-lg';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?></a></div>       

<h2><?php the_field("title") ?></h2>
<div id="agents-contact"> <?php the_field("contact_info") ?>
</div>

<div id="agent-icons">
<!-- -->

<?php if (strlen(get_post_meta($post->ID, "facebook", true)) > 0) : ?> 
 <div id="agent-facebook"><a href="<?php the_field("facebook") ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-agent-facebook.png" alt="" border="0"></a></div>  
<?php endif; ?>
<!-- -->

<!-- -->

<?php if (strlen(get_post_meta($post->ID, "twitter", true)) > 0) : ?> 
 <div id="agent-twitter"><a href="<?php the_field("twitter") ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-agent-twitter.png" alt="" border="0"></a></div>  
<?php endif; ?>
<!-- -->

<!-- -->

<?php if (strlen(get_post_meta($post->ID, "instagram", true)) > 0) : ?> 
 <div id="agent-instagram"><a href="<?php the_field("instagram") ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-agent-instagram.png" alt="" border="0"></a></div>  
<?php endif; ?>
<!-- -->

<!-- -->

<?php if (strlen(get_post_meta($post->ID, "linkedin", true)) > 0) : ?> 
 <div id="agent-linkedin"><a href="<?php the_field("linkedin") ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-agent-linkedin.png" alt="" border="0"></a></div>  
<?php endif; ?>
<!-- -->

</div>

<!-- -->

<?php if (strlen(get_post_meta($post->ID, "listings_link", true)) > 0) : ?> 
 <div id="listings-button"><a href="#listings">MY LISTINGS</a></div>  
<?php endif; ?>
<!-- -->

</div>

<!-- -->

<div id="agent-bio"> 
 		<?php the_content(); ?>

    
 
 <?php if (strlen(get_post_meta($post->ID, "listings_link", true)) > 0) : ?> 
 <div id="agents-listings"><a name="listings"></a>      
<iframe src="<?php the_field("listings_link"); ?>" width="100%" height="1000" frameborder="0"></iframe>
</div>  
<?php endif; ?>

</div>   
 

  
<?php endwhile; endif; ?>        


</div>

</div>





<?php get_footer(); ?>