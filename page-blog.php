<?php

/**

 * Template Name: Blog

 */



get_header(); ?>


<div id="main-wrapper">

<div id="main">




<div class="page-content">

<h1><?php the_title()?></h1>

<!-- sidebar -->

<div id="news-sidebar" style="margin-top: -13px;">

<div id="newsletters-box">

<h2>Most Recent Posts</h2>

<!-- -->

<?php
//echo $postid;

	$wp_query = new WP_Query();

	$wp_query->query(array(

	'post_type'=>'post',
	'cat'=> 1,

	'posts_per_page' => 6,

	'paged' => $paged,
	'post__not_in' => array($postid)

));

	if ($wp_query->have_posts()) : ?>

    <?php while ($wp_query->have_posts()) : ?>

        
<?php $wp_query->the_post(); ?>


<div class="quick-link"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>

<?php endwhile; endif; ?>
 
 <p>&nbsp;

<h2>Archives</h2>
<div style="float: left; width: 100%;">
<ul>
<?php wp_get_archives('type=yearly'); ?>
</ul>

<!-- -->
</div>
</div>
</div>

<!-- / sidebar -->










<?php
//echo $postid;

	$wp_query = new WP_Query();

	$wp_query->query(array(

	'post_type'=>'post',
	'cat'=> 1,

	'posts_per_page' => 6,

	'paged' => $paged,
	'post__not_in' => array($postid)

));

	if ($wp_query->have_posts()) : ?>

    <?php while ($wp_query->have_posts()) : ?>

        
<?php $wp_query->the_post(); ?>



<div class="blogentry">

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<!-- <?php the_date('m.d.Y', '', ''); ?> -->

 <p><?php  echo get_excerpt(280); ?> 

</div><!-- blogentry -->

<?php endwhile; endif; ?>



<?php pagi_posts_nav(); ?>

</div>

<!-- <a href="<?php bloginfo('url'); ?>/blog-archive">Blog Archive ></a> -->

 



<?php get_footer(); ?>