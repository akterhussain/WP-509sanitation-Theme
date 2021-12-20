<?php



function cleaning_default(){
	add_theme_support('title-tag');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	add_image_size( 'logo-image', 70, 70, true );
	add_image_size('about',540,304,true);
	add_image_size('service',320,200,true);
	add_image_size('blog',540,300,true);
	add_image_size('feature',1349,495,true);
	
	load_theme_textdomain('cleaning',get_template_directory_uri(),'/languages');
	
	if(function_exists('register_nav_menu')){
	register_nav_menu('main-menu',__('Main-menu','cleaning'));
}

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action('after_setup_theme','cleaning_default');
add_filter('widget_text', 'do_shortcode');


//Js & Css
function cleaning_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '4.0.0', 'all');

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() .'/css/owl.carousel.min.css', array(), '2.2.1', 'all' );
	wp_enqueue_style( 'magnific', get_template_directory_uri() .'/css/magnific-popup.css', array(), '1.1.0', 'all' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() .'/css/slicknav.min.css', array(), '1.0.10', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/fontawesome-all.min.css', array(), '5.0.6', 'all' );

	wp_enqueue_style( 'animate-headline', get_template_directory_uri() .'/css/animate-headline.css', array(), '4.5', 'all' );

	wp_enqueue_style( 'animate-min','//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css', array(), '3.5.1', 'all' );
	//animate.min.css here    -----    //

	wp_enqueue_style( 'default', get_template_directory_uri() .'/css/default.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() .'/css/style.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() .'/css/responsive.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'cleaning-style', get_stylesheet_uri() );


	
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'vendor', get_template_directory_uri() .'/js/vendor/modernizr-3.5.0.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'js-vendor', get_template_directory_uri() .'/js/vendor/jquery-1.12.4.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'popper', get_template_directory_uri() .'/js/popper.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'carousel', get_template_directory_uri() .'/js/owl.carousel.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() .'/js/imagesloaded.pkgd.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() .'/js/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );
	
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() .'/js/jquery.slicknav.js', array('jquery'), '20151215', true );







}
add_action( 'wp_enqueue_scripts', 'cleaning_scripts' );



function cleaning_custom_post_type(){
	
	//services area custom-fields
	register_post_type('banner',array(
		'labels' => array(
			'name'=>'Slider',
			'add_new_item'=>'Add New Slider',
		),
		'public' =>true,
		'supports'=>array(
			'thumbnail','editor','title','custom-fields','page-attributes'
		),
	));
	//services area custom-fields
	register_post_type('service',array(
		'labels' => array(
			'name'=>'Services',
			'add_new_item'=>'Add New Service',
		),
		'public' =>true,
		'supports'=>array(
			'thumbnail','editor','title','custom-fields','comments'
		),
	));
	
	//promotions area custom-fields
	register_post_type('promotion',array(
		'labels' => array(
			'name'=>'Promotion',
			'add_new_item'=>'Add New Promotion',
		),
		'public' =>true,
		'supports'=>array(
			'editor','title','custom-fields','page-attributes'
		),
	));
	
	register_post_type('feature',array(
		'labels' => array(
			'name'=>'Feature',
			'add_new_item'=>'Add New Feature',
		),
		'public' =>true,
		'supports'=>array(
			'thumbnail'
		),
	));
	
	

	//counter area custom-fields
	register_post_type('counter',array(
		'labels' => array(
			'name'=>'Counter',
			'add_new_item'=>'Add New Counter',
		),
		'public' =>true,
		'supports'=>array(
			'editor','title','custom-fields','page-attributes'
		),
	));
}
add_action('init','cleaning_custom_post_type');


//register widget 
function cleaning_widget(){
	register_sidebar(array(
		'name'     =>esc_html__('Footer logo','cleaning'),
		'id'       =>'footer-1',
		'description'=>esc_html__('Add Your Footer One Widgets Here','cleaning'),
		'before_widget'=>'<div class="single-widget">',
		'after_widget' =>'</div>',
		'before_title'=>'<h2 class="widget-title">',
		'after_title' =>'</h2>'
	));
	
	register_sidebar(array(
		'name'     =>esc_html__('Footer Quick Links','cleaning'),
		'id'       =>'footer-2',
		'description'=>esc_html__('Add Your Footer Quick Links Widgets Here','cleaning'),
		'before_widget'=>'<div id="%1$s" class="widget %2$s">',
		'after_widget' =>'</div>',
		'before_title'=>'<h2 class="widget-title">',
		'after_title' =>'</h2>'
	));
	register_sidebar(array(
		'name'     =>esc_html__('Footer Latest Post','cleaning'),
		'id'       =>'footer-3',
		'description'=>esc_html__('Add Your Footer Post Widgets Here','cleaning'),
		'before_widget'=>'<div id="%1$s" class="widget %2$s">',
		'after_widget' =>'</div>',
		'before_title'=>'<h2 class="widget-title">',
		'after_title' =>'</h2>'
	));
	register_sidebar(array(
		'name'     =>esc_html__('Footer Business Hour','cleaning'),
		'id'       =>'footer-4',
		'description'=>esc_html__('Add Your Footer Business Hour Widgets Here','cleaning'),
		'before_widget'=>'<div id="%1$s" class="widget %2$s">',
		'after_widget' =>'</div>',
		'before_title'=>'<h2 class="widget-title">',
		'after_title' =>'</h2>'
	));
	register_sidebar(array(
		'name'     =>esc_html__('Footer Category','cleaning'),
		'id'       =>'footer-5',
		'description'=>esc_html__('Add Your Footer Category Widgets Here','cleaning'),
		'before_widget'=>'<div class="widget">',
		'after_widget' =>'</div>',
		'before_title'=>'<h2 class="widget-title">',
		'after_title' =>'</h2>'
	));
	register_sidebar(array(
		'name'     =>esc_html__('Footer Recent Post','cleaning'),
		'id'       =>'footer-6',
		'description'=>esc_html__('Add Your Footer Recent Post Widgets Here','cleaning'),
		'before_widget'=>'<div id="%1$s" class="widget %2$s">',
		'after_widget' =>'</div>',
		'before_title'=>'<h2 class="widget-title">',
		'after_title' =>'</h2>'
	));
	register_sidebar(array(
		'name'     =>esc_html__('Add Map','cleaning'),
		'id'       =>'footer-7',
		'description'=>esc_html__('Add Your Map Here','cleaning'),
		'before_widget'=>'<div id="%1$s" class="google_map %2$s">',
		'after_widget' =>'</div>',
		'before_title'=>'<h2>',
		'after_title' =>'</h2>',
	));
}
add_action('widgets_init','cleaning_widget');

function cleaning_shortcode_latest($atts){
    extract( shortcode_atts( array(
        'count' => '3',
    ), $atts) );
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $list .= '
        <a href="'.get_permalink().'" class="widget-post">
	        '.get_the_post_thumbnail($idd,'thumbnail').'
	        <p>'.get_the_title().'</p>
	        <span>'.get_the_date('d M Y', $idd).'</span>
	    </a>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('thumb_posts', 'cleaning_shortcode_latest'); 


//Integrated cs-framework
require (get_template_directory().'/theme-options/cs-framework.php');
require (get_template_directory().'/inc/cmb2-functions.php');