<div id="home-row3">
    <div class="social-headers">
      <h2>FEATURED NEIGHBORHOODS</h2>
    </div>
    <div class="home-blog-box">
    <!-- content -->
    <?php
    $wp_query = new WP_Query();
    $wp_query->query(array(
      'post_type'=>'neighborhoods', // your custom post type
      'posts_per_page' =>9,
      'tax_query' => array(
        array(
          'taxonomy' => 'category', // your custom taxonomy
          'field' => 'slug',
          'terms' => 'featured' // the terms (categories) you created
        )
      )
    ));
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <div class="home-featured-neighborhood">
        <div class="home-featured-neighborhood-image">
          <?php
          $image = get_field('featured_image');
            $image = get_field('featured_image');
            $url = $image['url'];
            $title = $image['title'];
            $alt = $image['alt'];
            $caption = $image['caption'];
           
            // thumbnail or custom size that will go
            // into the "thumb" variable.
            $size = 'neighborhoods_featured';
            $thumb = $image['sizes'][ $size ];
            $width = $image['sizes'][ $size . '-width' ];
            $height = $image['sizes'][ $size . '-height' ];
          if( !empty($image) ): ?>
            <a href="<?php the_permalink() ?>">
              <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
            </a>
          <?php endif; ?>
        </div>
        <div class="home-featured-neighborhood-heading-wrapper">
          <div class="home-featured-neighborhood-heading"><?php the_title(); ?></div>
            <img src="<?php bloginfo('template_url'); ?>/images/bg-featured-heading.png" alt="" border="0">
          </div>
        </div>
    <?php endwhile;   ?>
    <?php endif;   ?>
    <!-- / content -->
    </div><!-- blogentry -->
  </div><!-- home row2 -->