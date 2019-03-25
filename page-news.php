<?php
/**
 * Template Name: News
 *
 *
 */

get_header(); ?>


<div id="main">



<div class="page-content">

<div id="archives-box">
<h2>ARCHIVES</h2>

        <ul>
        	<?php wp_get_archives('type=monthly'); ?>
        </ul>
</div>

<div id="blog-posts">
               <h1><?php the_title(); ?></h1>
  	
	<?php
	//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
		'post_type'=>'post',
		'posts_per_page' => 12,
		'paged' => $paged,
		'post__not_in' => array($postid)

	));

	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) :  $wp_query->the_post(); ?>

	<div class="blogentry">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
                  <!-- blog featured image  -->
    <?php if ( has_post_thumbnail()) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'category-thumb'); } ?>
<?php if ( has_post_thumbnail()) { ?>
	<div class="news-featured-image"><?php the_post_thumbnail( 'category-thumb' ); ?></div>
<?php } else { ?>
<?php } ?>


<p><?php  echo get_excerpt(200); ?> </p>  
        
	</div><!-- blogentry -->

	<?php endwhile; ?>
	<?php pagi_posts_nav(); ?>
	<?php endif; ?>

</div>                	                            
      </div><!-- entry content -->
   </div><!-- #content -->


<?php get_footer(); ?>