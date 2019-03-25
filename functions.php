<?php 
// Enqueueing all the java script in a no conflict mode
 function ineedmyjava() {
	if (!is_admin()) {
 
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', false, '1.11.0', true);
		wp_enqueue_script('jquery');
		
		// Custom Theme scripts...
		wp_register_script(
			'custom',
			get_bloginfo('template_directory') . '/js/custom.js',
			array('jquery') );
		wp_enqueue_script('custom');
		
		// Lightbox/Colorbox scripts...
		wp_register_script(
			'colorbox',
			get_bloginfo('template_directory') . '/js/jquery.colorbox-min.js',
			array('jquery') );
		wp_enqueue_script('colorbox');
		
		// Lightbox/Colorbox scripts...
		wp_register_script(
			'flexslider',
			get_bloginfo('template_directory') . '/js/flexslider.js',
			array('jquery') );
		wp_enqueue_script('flexslider');		
	
	}
}
 
add_action('wp_enqueue_scripts', 'ineedmyjava');
?>
<?php
// add a favicon from your themes images folder
function mytheme_favicon() { ?> <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.png" > <?php } add_action('wp_head', 'mytheme_favicon');
?>
<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

/* Custom Post Types */
add_action('init', 'js_custom_init');
function js_custom_init()
{
  $labels = array(
 'name' => _x('Neighborhoods', 'post type general name'),
    'singular_name' => _x('Neighborhoods', 'post type singular name'),
    'add_new' => _x('Add New', 'Neighborhoods'),
    'add_new_item' => __('Add New Neighborhoods'),
    'edit_item' => __('Edit Neighborhoods'),
    'new_item' => __('New Neighborhoods'),
    'view_item' => __('View Neighborhoods'),
    'search_items' => __('Search Neighborhoods'),
    'not_found' =>  __('No Neighborhoods found'),
    'not_found_in_trash' => __('No Neighborhoods found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Neighborhoods'
  );
  $args = array(
 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail')
  );
  register_post_type('neighborhoods',$args);    
}
{
  $labels = array(
 'name' => _x('Agents', 'post type general name'),
    'singular_name' => _x('Agents', 'post type singular name'),
    'add_new' => _x('Add New', 'Agents'),
    'add_new_item' => __('Add New Agents'),
    'edit_item' => __('Edit Agents'),
    'new_item' => __('New Agents'),
    'view_item' => __('View Agents'),
    'search_items' => __('Search Agents'),
    'not_found' =>  __('No Agents found'),
    'not_found_in_trash' => __('No Agents found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Agents'
  );
  $args = array(
 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail')
  );
  register_post_type('agents',$args);    
}
{
  $labels = array(
 'name' => _x('New Developments', 'post type general name'),
    'singular_name' => _x('New Developments', 'post type singular name'),
    'add_new' => _x('Add New', 'New Developments'),
    'add_new_item' => __('Add New Developments'),
    'edit_item' => __('Edit New Developments'),
    'new_item' => __('New New Developments'),
    'view_item' => __('View New Developments'),
    'search_items' => __('Search New Developments'),
    'not_found' =>  __('No New Developments found'),
    'not_found_in_trash' => __('No New Developments found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'New Developments'
  );
  $args = array(
 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail')
  );
  register_post_type('new_developments',$args);    
}
{
  $labels = array(
 'name' => _x('Home Slides', 'post type general name'),
    'singular_name' => _x('Home Slides', 'post type singular name'),
    'add_new' => _x('Add New', 'Home Slides'),
    'add_new_item' => __('Add Home Slides'),
    'edit_item' => __('Edit Home Slides'),
    'new_item' => __('New Home Slides'),
    'view_item' => __('View Home Slides'),
    'search_items' => __('Search Home Slides'),
    'not_found' =>  __('No Home Slides found'),
    'not_found_in_trash' => __('No Home Slides found in Trash'),
    'parent_item_colon' => '',
    'menu_name' => 'Home Slides'
  );
  $args = array(
 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail')
  );
  register_post_type('slides',$args);    
}
/*
##############################################
Custom Taxonomies
*/
add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() {
	// Custom Tax, "Organization Type"
	register_taxonomy( 'development', 'new_developments', // second value is the Custom Post Type you're linking it to.
array(
'hierarchical' => true, // True acts like categories (dropdownns) False acts like tags...
'label' => 'Neighborhoods', // Label that will show up in the menu
'query_var' => true,
'rewrite' => true ,
'show_admin_column' => true,
'public' => true,
'rewrite' => array( 'slug' => 'new-developments' ), // the url. must be different from any existing page or post type.
'_builtin' => true
) );
// Custom Tax, "Organization Type"
	register_taxonomy( 'category', 'neighborhoods', // second value is the Custom Post Type you're linking it to.
array(
'hierarchical' => true, // True acts like categories (dropdownns) False acts like tags...
'label' => 'Neighborhoods Categories', // Label that will show up in the menu
'query_var' => true,
'rewrite' => true ,
'show_admin_column' => true,
'public' => true,
'rewrite' => array( 'slug' => 'category' ), // the url. must be different from any existing page or post type.
'_builtin' => true
) );
} // End build taxonomies
?>
<?php
// Pagination
function pagi_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
?>
<?php
// Add Thumbnail Image Supoort
// Must have to do featured images.
add_theme_support( 'post-thumbnails' ); 
add_image_size( 'portsmall', 200, 9999 );
add_image_size( 'homepage', 1098, 383, true );
add_image_size( 'neighborhoods_featured', 354, 234, true );
add_image_size( 'neighborhoods_large', 600, 397, true );
add_image_size( 'neighborhoods_thumb', 100, 100, true );
add_image_size( 'agent-sm', 235, 180, true );
// add_image_size( 'agent-lg', 300, 230, true );
add_image_size( 'agent-lg', 500, 383, true );
?>
<?php
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];

  if(empty($first_img)) {
    $first_img = "/path/to/default.png";
  }
  return $first_img;
}
?>
<?php
// Changing WordPress admin Menu Names
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News';
    $submenu['edit.php'][5][0] = 'News';
    $submenu['edit.php'][10][0] = 'Add a News Post';
   // $submenu['edit.php'][15][0] = 'Status'; // Change name for categories
    //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add a News Post';
        $labels->add_new_item = 'Add a News Post';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No posts found';
        $labels->not_found_in_trash = 'No posts found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );
?>
<?php
// if you need to deregister styles in plugins
/*add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
	wp_deregister_style( 'soliloquy-style' );
}*/
?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>
<?php
/*
Plugin Name: Page Excerpt

Description: Adds support for page excerpts - uses WordPress code

*/
add_action( 'edit_page_form', 'pe_add_box');
add_action('init', 'pe_init');
function pe_init() {
	if(function_exists("add_post_type_support")) //support 3.1 and greater
	{add_post_type_support( 'page', 'excerpt' );}
}
function pe_page_excerpt_meta_box($post) {
?>
<label class="hidden" for="excerpt"><?php _e('Excerpt hey') ?></label><textarea rows="1" cols="40" name="excerpt" tabindex="6" id="excerpt"><?php echo $post->post_excerpt ?></textarea>
<p><?php _e('Excerpt go here..........'); ?></p>
<?php
}
function pe_add_box()
{
	if(!function_exists("add_post_type_support")) //legacy
	{		add_meta_box('postexcerpt', __('Page Excerpt'), 'pe_page_excerpt_meta_box', 'page', 'advanced', 'core');}
}

  // Limit the excerpt without truncating the last word.
// use like this > echo get_excerpt(100);
function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = $excerpt.'... <div class="read-post"><a href="'.$permalink.'">READ POST</a></div>';
  return $excerpt;
}
?>
<?php
//
// Custom login function 
//
function custom_login_logo() {
        echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/login-logo.png) no-repeat !important; width: 340px!important; height: 140px!important; }</style>';
}
add_action('login_head', 'custom_login_logo'); 

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return '';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' ); 
?>
<?php
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'menu1' ) );
	register_nav_menu( 'secondary', __( 'Sitemap Menu', 'menu2' ) );
		register_nav_menu( 'header', __( 'Header Menu', 'menu3' ) );
?>
<?php
 add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
 // add your extension to the array
 $existing_mimes['vcf'] = 'text/x-vcard';
 return $existing_mimes;
}

?>