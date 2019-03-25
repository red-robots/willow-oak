<?php
/**
 * Displays a Single Neighborhoods Post
 */

get_header(); ?>

	
<div id="main-wrapper">

<div id="main">




<div class="page-content">

<div id="neighborhoods-content">
<?php 

$images = get_field('gallery');

 ?>
<div id="neighborhoods-left">
<!-- -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
<!-- -->

<!-- -->


    
    

<!-- -->
</div><!-- / left -->

<?php if( $images ): ?>
<div id="neighborhoods-right">
<div id="slider" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['sizes']['neighborhoods_large']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <p><?php echo $image['caption']; ?></p>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div><!-- / right -->
<?php endif; ?>

<div class="neighborhood-search">
<iframe src="<?php the_field("neighborhood_search"); ?>" width="100%" height="1700" frameborder="0"></iframe>
</div>


</div><!-- / neighborhoods content -->



</div>





<?php get_footer(); ?>