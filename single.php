<?php
/**
 * Displays a Single Post
 */

get_header(); ?>

	
<div id="main-wrapper">

<div id="main">




<div class="page-content">



<div id="news-events">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<h1><?php the_title(); ?></h1>
<div id="archives-box">
<h2>ARCHIVES</h2>

        <ul>
        	<?php wp_get_archives('type=monthly'); ?>
        </ul>
</div><h2><?php the_date(); ?></h2>

<div id="blog-posts">



  
          <!-- blog featured image  -->
    <?php if ( has_post_thumbnail()) { $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'category-thumb'); } ?>
<?php if ( has_post_thumbnail()) { ?>
	<div id="news-featured-image"><?php the_post_thumbnail( 'category-thumb' ); ?></div>
<?php } else { ?>
<?php } ?>

  
 		<?php the_content(); ?>
        

<?php endwhile; endif; ?>        
<div style="float: left; width: 45%;"><?php previous_post(); ?></div>
<div style="float: right; width: 45%;"><?php next_post(); ?></div>

</div>

</div>



</div>





<?php get_footer(); ?>