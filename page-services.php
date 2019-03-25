<?php 
/**
* Template Name: Services
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div id="main">



<div class="page-content">

     <h1><?php the_title(); ?></h1>

     <?php the_content(); ?>
     

<!-- -->

                    <?php if( have_rows('services') ): ?>
                    <div class="faqs">
                    <?php while( have_rows('services') ): the_row(); 
					
							$question = get_sub_field('service');
							$answer = get_sub_field('service_content');
							
					?>
                    <div class="faqrow">
                    	<div class="question">
                        <div class="question-image"></div><!--question-image-->
							<?php the_sub_field('service'); ?>
                        </div><!--question-->
               		<div class="answer"><?php the_sub_field('service_content'); ?>
                    
                    
                    
<?php 

$file = get_sub_field('file');

if( $file ) {

	$url = wp_get_attachment_url( $file );
	
	?><div class="services-button"><a href="<?php echo $url; ?>" target="_blank"><?php the_sub_field('button_text'); ?></a></div><?php

}

?>
                    
                    </div><!--answer-->
                    </div><!-- faqrow -->
                    
                    <?php endwhile; ?>
                    </div><!-- faqs -->
                    <?php endif; ?>



<!-- -->



 </div><!-- / page content -->





<?php endwhile; endif; ?>



<?php //get_sidebar(); ?>

<?php get_footer(); ?>