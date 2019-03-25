<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('sitename'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />

<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700' rel='stylesheet' type='text/css'>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>




<?php wp_head(); ?>


<!-- mobile nav -->

<script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//--></script>

<!-- mobile nav -->

<!-- sticky nav -->

<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 0) { //I just used 200 for testing
        $("#tester").css({ "position": "fixed", "top": 0 });
    } else {
        $("#tester").css({ "position": "absolute", "top": "0px" }); //same here
    }   			
});
</script>


<!-- sticky nav -->


<?php the_field('google_analytics', 'option'); ?>

</head>



<body>




<div id="main-wrapper-all">



<div id="main-header">

<div id="header-mobile2">
<div id="header-content1"><div class="top">
    <div class="top-wrapper">
        <div class="top-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
            
            <div class="tenant-login">
            	<form method="post" action="https://willowoakrealtors.sharefile.com" target="_blank">
  <table cellspacing="0" cellpadding="0" border="0">
    <tr><td>Email:</td></tr>
    <tr><td><input type="text" name="username" /></td></tr>
    <tr><td height="5"></td></tr>
    <tr><td>Password:</td></tr>
    <tr><td><input type="password" name="password" /></td></tr>
    <tr><td height="10"></td></tr>
    <tr><td><input type="submit" value="Log In" /></td></tr>
    <tr><td height="10"></td></tr>
    <tr>
      <td>
        <a href="https://willowoakrealtors.sharefile.com/?cmd=p" rel="nofollow" target="_blank">
          Forgot your password?
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="https://www.sharefile.com" rel="nofollow" target="_blank">
          <font color="#cccccc" size="1">powered by Citrix ShareFile</font>
        </a>
      </td>
    </tr>
  </table>
 </form>

            </div><!-- tenant login -->
            
        </div><!-- top nav -->
    </div><!-- wrapper -->
</div><!-- top -->
</div>
</div>


<div id="tester">
<div id="header">


    <div id="logo">
    <a href="<?php bloginfo('url'); ?>" target="_parent"><img src="<?php bloginfo('template_url'); ?>/images/willow-oak-realtors-logo.png" alt="" border="0"></a> 
    </div><!-- #logo -->
    
    <div id="navigation-bar"><div id="mobile-navigation">

<a href="javascript:ReverseDisplay('uniquename')"> 
<img src="<?php bloginfo('template_url'); ?>/images/down-arrow.png" alt="" border="0">&nbsp;&nbsp;&nbsp; menu
</a>

<div id="uniquename" style="display:none;">
<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>    
            
</div>

      
    </div><!-- #navigation -->   </div>
    
<div id="header-content-wrapper">
<div id="header-content">

<div class="social-icons">

<div class="social3"><a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"></a></div>

<div class="social2"><a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"></a></div>

<div class="social1"><a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a></div>

</div>



<div id="header-mobile1"><div id="header-content1"><div class="top">
    <div class="top-wrapper">
        <div class="top-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
            
            <div class="tenant-login">
            	<form method="post" action="https://willowoakrealtors.sharefile.com" target="_blank">
  <table cellspacing="0" cellpadding="0" border="0">
    <tr><td>Email:</td></tr>
    <tr><td><input type="text" name="username" /></td></tr>
    <tr><td height="5"></td></tr>
    <tr><td>Password:</td></tr>
    <tr><td><input type="password" name="password" /></td></tr>
    <tr><td height="10"></td></tr>
    <tr><td><input type="submit" value="Log In" /></td></tr>
    <tr><td height="10"></td></tr>
    <tr>
      <td>
        <a href="https://willowoakrealtors.sharefile.com/?cmd=p" rel="nofollow" target="_blank">
          Forgot your password?
        </a>
      </td>
    </tr>
    <tr>
      <td>
        <a href="https://www.sharefile.com" rel="nofollow" target="_blank">
          <font color="#cccccc" size="1">powered by Citrix ShareFile</font>
        </a>
      </td>
    </tr>
  </table>
 </form>

            </div><!-- tenant login -->
            
        </div><!-- top nav -->
    </div><!-- wrapper -->
</div><!-- top -->
</div>
</div>




</div>
</div>


<div id="navigation">
            
      <nav id="access" role="navigation">
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
            </div><!-- #navigation -->


   
    
    </div>
   </div> 
     
            
    </div>
    
           
    

 
    
    

  