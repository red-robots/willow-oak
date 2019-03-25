</div> <!-- main -->

<div id="footer">



<div id="footer-wrapper">


<div id="footer-row1-box1">

<div class="social-icons">

<div class="social3"><a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"></a></div>

<div class="social2"><a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"></a></div>

<div class="social1"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a></div>

</div>

<div id="footer-content2">

<?php the_field('footer', 'option'); ?>
</div>


<div id="footer2"><a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a></div>

</div>





</div>
</div>
	

</div><!-- main-wrapper-all -->

<?php wp_footer(); ?>

</body>
</html>