<?php 
/**
* Template Name: Agents
*/
 get_header(); ?>



<div id="main">
  <div class="page-content">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endwhile; endif; ?>


  <?php /* Second Custom Query pulling the post type, "Agents" */  
         	$args = array( 
          	'post_type' => array('agents'),
          	'posts_per_page' => '-1',
          );
          $query = new WP_Query( $args ); 
  ?>
  <?php 

  if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); 

    $image = get_field('agent_photo');
    $image = get_field('agent_photo');
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // thumbnail or custom size that will go
    // into the "thumb" variable.
    // $size = 'agent-lg';
    $size = 'large';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ];

   ?>
    <div class="agent-box">
      <div class="agent-box-image">
        <a href="<?php the_permalink() ?>">
        <?php if( !empty($image) ): ?>
        	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
        <?php endif; ?>
        </a>
      </div>
      <div class="agent-box-heading-wrapper">
        <div class="agent-box-heading">
          <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
          </a>
        </div>
        <img src="<?php bloginfo('template_url'); ?>/images/bg-featured-heading.png" alt="" border="0">
      </div>

      <div class="agent-box-content">
        <h2><?php the_field("title") ?></h2>
        <?php the_field("contact_info") ?>
      </div>

    </div>
  <?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
  </div><!-- / page content -->
<?php get_footer(); ?>