<?php
/**
* Search Page
*/

get_header(); ?> 

<div id="main-wrapper">

<div id="main">




<div class="page-content">



<!-- -->
	
<h1>Search Results</h1>

<!-- sidebar -->


<div id="news-sidebar">
<div id="news-sidebar-video-box">

<?php $recent = new WP_Query("page_id=795"); while($recent->have_posts()): $recent->the_post();?>

<?php the_field("video")?>

<h2><?php the_field("video_title")?></h2>
<h3><?php the_field("video_description")?></h3>

<?php endwhile; wp_reset_postdata(); //end of the loop. ?>

</div>

<div id="gallery-link"><h2>Loaves & Fishes Photo Gallery</h2></div>

<div id="newsletters-box">
<?php $recent = new WP_Query("page_id=795"); while($recent->have_posts()): $recent->the_post();?>
<?php the_content()?>

<?php endwhile; wp_reset_postdata(); //end of the loop. ?>
</div>

<div id="instagram-wrapper" style="margin-top: 15px; float: right; width: 100%;">

<div id="instagram-feed">

<?php echo do_shortcode("[instagram-feed]"); ?>
</div>

<div id="instagram-feed-text">

<h2><a href="https://instagram.com/loavesfishesnc/" target="_blank">Loaves & Fishes on Instagram</a></h2>

<a href="https://instagram.com/loavesfishesnc/" target="_blank">@loavesfishesnc</a> <div style="float: right;">#landfclt</div></div>
</div>
&nbsp;<p>&nbsp;
</div>



<!-- / sidebar -->

<?php
	/* Start the Loop 
	
		Number of posts on a category page, 
		before it paginates, will be determined 
		by the WordPress Admin in Settings > Reading
	
	*/
	
	while ( have_posts() ) : the_post(); ?>
    
    <div class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </div><!-- post -->
    

<?php endwhile;?>

    <div class="clear"></div>
    <?php pagi_posts_nav(); ?>
    






</div>
	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>