<?php 
				// load scripts and style
function load_style_script(){
	wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-3.0.0.min.js');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');

	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

}

add_action('wp_enqueue_scripts', 'load_style_script' );
 



			// thumbnail support

add_theme_support('post-thumbnails');
set_post_thumbnail_size(300,200);





    // vidjets
   
		// menu header
register_sidebar(array(
	'name' => 'Menu',
	'id' => 'menu_header', 
	'before_widget' => '', 
	'after_widget'  => ''
));

		// menu footer
register_sidebar(array(
	'name' => 'footer',
	'id' => 'menu_footer', 
	'before_widget' => '<div class="footer_menu">', 
	'after_widget'  => '</div>'
));

		// menu header mobile
register_sidebar(array(
	'name' => 'mobile',
	'id' => 'menu_header_mobile', 
	'before_widget' => '', 
	'after_widget'  => ''
));


		// slider
register_sidebar(array(
	'name' => 'slider',
	'id' => 'slider_main', 
	'description' => 'add code text', 
	'before_widget' => '', 
	'after_widget'  => ''
));


	// form
register_sidebar(array(
	'name' => 'form',
	'id' => 'form_product', 
	'before_widget' => '', 
	'after_widget'  => ''
));	


	// tabs
register_sidebar(array(
	'name' => 'tabs',
	'id' => 'tabs', 
	'before_widget' => '', 
	'after_widget'  => ''
));	



 
        //Change the WP logo image on the logon page 
function my_login_logo(){
   echo '<style type="text/css">#login h1 a { background: url('. get_bloginfo('template_directory') .'/img/logo-form.png) no-repeat 0 0 !important; width: 320px; }</style>';
}
add_action('login_head', 'my_login_logo');
/* change the link to the logo to the site, not on wordpress.org */
add_filter( 'login_headerurl', create_function('', 'return get_home_url();') );
/* remove the title in the logo "the site works on us wordpress" */
add_filter( 'login_headertitle', create_function('', 'return false;') );





					
						// get single news content

add_action('wp_ajax_myaction', 'data_news');    
add_action('wp_ajax_nopriv_myaction', 'data_news'); 


function data_news(){


	$id_p = $_POST['param'];

	$the_query = new WP_Query(array('p' => $id_p));
	if ( $the_query -> have_posts() ) : 
		while ($the_query -> have_posts() ) : $the_query -> the_post(); ?>
	
	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>

	<?php endwhile; 
		wp_reset_postdata();
	 	endif; 
	 	die(); 

}


	