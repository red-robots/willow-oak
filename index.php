<?php 

get_header(); 

?>
<div id="home-wrapper">
  <div id="home-row1">
    <div id="home-slider">
      <?php 
      // Query the Post type Slides
      $querySlides = array(
        'post_type' => 'slides',
        'posts_per_page' => '-1'
      );
      // The Query
      $the_query = new WP_Query( $querySlides );
      ?>
    <?php 
    // The Loop
    if ( $the_query->have_posts()) : ?>
      <div class="flexslider">
        <ul class="slides">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <li> 
            <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail();
            } 
            ?>
            <div id="home-row1-image">
            <?php
            $image = get_field('home_photo');
              $image = get_field('home_photo');
              $url = $image['url'];
              $title = $image['title'];
              $alt = $image['alt'];
              $caption = $image['caption'];
             
              // thumbnail or custom size that will go
              // into the "thumb" variable.
              $size = 'homepage';
              $thumb = $image['sizes'][ $size ];
              $width = $image['sizes'][ $size . '-width' ];
              $height = $image['sizes'][ $size . '-height' ];
                if( !empty($image) ): ?>
                	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                <?php endif; ?>
            </div>
          </li>
        <?php endwhile; ?>
        </ul><!-- slides -->
      </div><!-- .flexslider -->
    <?php endif; // end loop ?>
    <?php wp_reset_postdata(); ?>
    </div>
  <!-- -->
  </div><!-- home row1 -->

  <div id="home-row2">
    <h2>PROPERTY SEARCH</h2>
    <div id="home-property-search">
      <iframe src="http://willowoak.localhomesearch.net/bellamap/" width="100%" height="460" frameborder="0"></iframe>
    </div>
  </div><!-- home row2 -->

<!-- end home wrapper -->
</div>

<section class="home-about">
  

  <div id="home-wrapper2">
    <?php //get_template_part('inc/neighborhoods'); ?>
      <!-- New About Section -->
      <div class="social-headers">
        <h2>ABOUT WILLOW OAK</h2>
      </div>
      <?php
      // specific post ID you want to pull
      $post = get_post(2494); 
      setup_postdata( $post );

      $photo = get_field('about_photo');
      $about = get_field('about_section');
      ?>
       
        <div class="about-photo">
          <img src="<?php echo $photo['url']; ?>">
        </div>
        <div class="about-section">
          <?php echo $about; ?>
        </div>
       
      <?php wp_reset_postdata(); ?>
  </div>
</section>

<div id="home-wrapper3">
  <!-- <div id="home-row4"> -->

    <?php //get_template_part('inc/facebook'); ?>

    <?php //get_template_part('inc/twitter'); ?>

    <?php //get_template_part('inc/instagram'); ?>

  <!-- </div> -->
</div>

<?php get_footer(); ?>



