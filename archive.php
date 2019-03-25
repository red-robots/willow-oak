<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<div id="main">

<div class="page-content">



<div id="news-events">


<h1>Archives</h1>

<?php while(have_posts()) : the_post(); ?>



	<div class="blogentry">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_date('M, Y'); ?>
                  <!-- blog featured image  -->
    <?php if ( has_post_thumbnail()) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'category-thumb'); } ?>
<?php if ( has_post_thumbnail()) { ?>
	<div class="news-featured-image"><?php the_post_thumbnail( 'category-thumb' ); ?></div>
<?php } else { ?>
<?php } ?>


<p><?php  echo get_excerpt(200); ?> </p>  
        
	</div><!-- blogentry -->



    
<?php endwhile; ?>
<div class="clear"></div>
 <?php pagi_posts_nav(); ?>

<!-- -->



</div>
<!-- -->



	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>