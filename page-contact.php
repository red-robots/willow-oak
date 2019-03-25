<?php 
/**
* Template Name: Contact
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div id="main">



<div class="page-content">

     <h1><?php the_title(); ?></h1>

<div id="contact-left">
<?php the_content(); ?>
</div>


<div id="contact-right">
<?php the_field("contact_right"); ?>
</div>


 </div><!-- / page content -->





<?php endwhile; endif; ?>



<?php get_footer(); ?>