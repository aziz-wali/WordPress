<?php

add_theme_support('post-thumbnails'); //build in function  to add featured image in wordpress theme 
require_once('wp-bootstrap-nav-walker.php');// add navwalker function in the nabar 
function wali_styles(){// function to add style files
	
	
	
	wp_enqueue_style("bootstrap",get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style("all",get_template_directory_uri().'/fontawesome-free-5.13.0-web/css/all.min.css');
	wp_enqueue_style("wp_media",get_template_directory_uri().'/wp_media.css');
	wp_enqueue_style("style",get_template_directory_uri().'/style.css');
}







function wali_scripts(){
	
	
	wp_deregister_script('jquery');
	wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true);
	wp_enqueue_script("jquery");
	wp_enqueue_script("main_js",get_template_directory_uri().'/js/main_js.js',array(),false,true);
	wp_enqueue_script("bootstrap",get_template_directory_uri().'/js/bootstrap.min.js',array(),false,true);
	
}
add_action("wp_enqueue_scripts","wali_styles");
add_action("wp_enqueue_scripts","wali_scripts");


function add_menu (){
	
	register_nav_menus(array('navbar_menu'=>__('navigation bar'),'footer_ menu'=>__('footer_menu1')));
}
add_action('init','add_menu');

function navbar(){
	
	wp_nav_menu(array(
		'container'=> 'ul',
		'menu_class'=> ' nav navbar-nav navbar-right',
		'menu_id'=>'',
		'theme_location'=> 'navbar_menu',
	
		'walker'=> new  bs4Navwalker()
					  
						  
						  ));
}

function wali_excerpt_lenght($lenght){
	return 44;
}

function wali_excerpt_more($more){
	return 'more ...';
}
add_filter('excerpt_lenght','wali_excerpt_lenght');
add_filter('excerpt_more','wali_excerpt_more');

function num_pagination(){
	global $WP_Query;
	$all =$WP_Query->max_num_pages;
	$current=max(1,get_query_var('paged'));
	if($all<1){
		return paginate_links(array(
		'base'=>get_pagenum_link().'%_%',
		'format'=>'/page/%#%',
		'current'=>$current));
	}
	
	
}

 // need an unlikely integer
function pp(){
 global $WP_Query;
	//$big = 999999999;
	if($WP_Query->max_num_pages <1){
return paginate_links( array(
    'base' => get_pagenum_link().'%_%',
    'format' => '/page/%#%',
    'current' => max(1, get_query_var('paged') )
    //'total' =>  $WP_Query->max_num_pages
) );}}
function add_widget() {
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'main-sidebar',
        'description'   => 'Widgets in this area will be shown on all posts and page.',
        'before_widget' => '<div  class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'add_widget' );