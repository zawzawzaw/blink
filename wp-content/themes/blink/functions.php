<?php 
/********************************************************************************************************/
/* CONSTANTS */
/********************************************************************************************************/

define("THEMEROOT", get_stylesheet_directory_uri());
define("IMG", THEMEROOT."/images");
define("JS", THEMEROOT."/js");
define("CSS", THEMEROOT."/css");


/********************************************************************************************************/
/* MENUS */
/********************************************************************************************************/

function register_my_menus(){
	register_nav_menus(array(
    'mobile-menu' => __('Mobile Menu', 'blink'),
		'main-menu' => __('Main Menu', 'blink'),
    'footer-menu' => __('Footer Menu', 'blink')
	));
}

add_action('init', 'register_my_menus');

add_filter( 'wp_nav_menu_items', 'add_nav_menu_items', 10, 2 );
function add_nav_menu_items( $items, $args ) {
  if( $args->theme_location == 'main-menu' ):
    ob_start(); // start the output buffer
    $page_info = get_page_by_title('search');
?>
    <li>
      <a href="#" class="site-search"><i class="fa fa-search"></i></a>
      <form action="<?php the_permalink($page_info); ?>">
        <input type="text" name="q" id="search_input" required>
        <a href="#" class="close-search"><i class="fa fa-times"></i></a>
      </form>
    </li>    
<?php
    $products = ob_get_clean(); // store all output from above    
  endif;    
  return $items . $products; // add stored output to end of $items and return
}

/********************************************************************************************************/
/* LOAD ASSETS */
/********************************************************************************************************/

add_action('wp_enqueue_scripts', 'load_scripts');

function load_scripts(){
    wp_enqueue_style( 'bootstrap', THEMEROOT.'/css/vendors/bootstrap/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-theme', THEMEROOT.'/css/vendors/bootstrap/bootstrap-theme.min.css' );
    wp_enqueue_style( 'jquery-ui', THEMEROOT.'/css/vendors/jquery-ui/jquery-ui.min.css' );    
    wp_enqueue_style( 'font-awesome', THEMEROOT.'/css/font-awesome.min.css' );
    wp_enqueue_style( 'animate', THEMEROOT.'/css/animate.min.css' );
    wp_enqueue_style( 'stylecss', get_stylesheet_uri() );

    wp_enqueue_script('$', THEMEROOT.'/js/vendors/jquery/jquery-1.11.1.min.js', array(), '', false);
    wp_enqueue_script('jquery-ui', THEMEROOT.'/js/vendors/jquery/jquery-ui.min.js', array('$'), '', true);
    wp_enqueue_script('jquery-mobile', THEMEROOT.'/js/vendors/jquery/jquery.mobile.custom.min.js', array('$'), '', true);
    wp_enqueue_script('carousel', THEMEROOT.'/js/vendors/bootstrap/bootstrap.min.js', array('$'), '', true);
    wp_enqueue_script('imagesloaded', THEMEROOT.'/js/plugins/imagesloaded.pkgd.min.js', array('$'), '', true);
    wp_enqueue_script('isotope', THEMEROOT.'/js/plugins/isotope.pkgd.min.js', array('$'), '', true);
    wp_enqueue_script('packery-mode', THEMEROOT.'/js/plugins/packery-mode.pkgd.min.js', array('$'), '', true);
    wp_enqueue_script('mousewheel', THEMEROOT.'/js/plugins/jquery.mousewheel.min.js', array('$'), '', true);
    wp_enqueue_script('disablescroll', THEMEROOT.'/js/plugins/jquery.disablescroll.min.js', array('$'), '', true);
    wp_enqueue_script('timelinemax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TimelineMax.min.js', array('$'), '', true);
    wp_enqueue_script('tweenmax', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js', array('$'), '', true);
    wp_enqueue_script('tweenlite', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js', array('$'), '', true);
    wp_enqueue_script('scrolltoplugin', '//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/ScrollToPlugin.min.js', array('$'), '', true);
    
    wp_enqueue_script('mainjs', THEMEROOT.'/js/main.js', array('$'), '', true);

    if(is_home()) {

        wp_enqueue_script('scrollmagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.js', array('$'), '', true);
        wp_enqueue_script('scrollmagicdebug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/1.3.0/jquery.scrollmagic.debug.js', array('$'), '', true);        
        wp_enqueue_script('homejs', THEMEROOT.'/js/home.js', array('$'), '', true);
    } 
    if(is_page('profile')) {
        wp_enqueue_script('profilejs', THEMEROOT.'/js/profile.js', array('$'), '', true);
    }
    if(is_page('portfolio')) {
        wp_enqueue_style( 'jplistcorecss', THEMEROOT.'/css/jplist.core.min.css' );
        wp_enqueue_style( 'jplistfiltercss', THEMEROOT.'/css/jplist.filter-toggle-bundle.min.css' );

        wp_enqueue_script('jplistcore', THEMEROOT.'/js/plugins/jplist.core.min.js', array('$'), '', true);
        wp_enqueue_script('jplistfilter', THEMEROOT.'/js/plugins/jplist.filter-toggle-bundle.min.js', array('$'), '', true);
        wp_enqueue_script('jplistsort', THEMEROOT.'/js/plugins/jplist.sort-bundle.min.js', array('$'), '', true);
        wp_enqueue_script('handlebars', THEMEROOT.'/js/plugins/handlebars-v4.0.5.js', array('$'), '', true);
        wp_enqueue_script('portfoliojs', THEMEROOT.'/js/portfolio.js', array('$'), '', true);
    }

    if(is_singular( 'ptype_portfolios' )) {
      wp_enqueue_script('casestudyjs', THEMEROOT.'/js/case-study.js', array('$'), '', true);
    }

    if(is_page('news')) {
        wp_enqueue_script('handlebars', THEMEROOT.'/js/plugins/handlebars-v4.0.5.js', array('$'), '', true);
        wp_enqueue_script('newsjs', THEMEROOT.'/js/news.js', array('$'), '', true);
    }

    if(is_page( 'contact-us' )) {      
      wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array('$'), '', true);
      wp_enqueue_script('validate', THEMEROOT.'/js/plugins/jquery.validate.min.js', array('$'), '', true);
      wp_enqueue_script('contact', THEMEROOT.'/js/contact-us.js', array('$'), '', true);
    }

    if(is_page( 'search' )) {      
      wp_enqueue_script('handlebars', THEMEROOT.'/js/plugins/handlebars-v4.0.5.js', array('$'), '', true);
      wp_enqueue_script('search', THEMEROOT.'/js/search.js', array('$'), '', true);
    }
}


/********************************************************************************************************/
/* ADD POST THUMBNAIL SUPPORT */
/********************************************************************************************************/

if(function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(940, 346);
}

/********************************************************************************************************/
/* CUSTOM POST TYPE & META BOXES */
/********************************************************************************************************/

// require 'my-custom-posts.php';

# home slider post #
add_action( 'init', 'register_home_slider_post_type' );
function register_home_slider_post_type() {
  $name = 'home slider';
  $upper = ucwords($name);
  $name = strtolower($name);
  $category = array();
  register_post_type($name, array(
    'public' => true,
    'label' => "$upper",
    'labels' => array('add_new_item' => "Add New $upper"), #learn more at codex
    'supports' => array('title','editor','aside','thumbnail'),
    'taxonomies' => $category
  ));
}

// add_post_type('home slider', array(
//     'supports' => array('title','editor','aside','thumbnail')
// ));

// /********************************************************************************************************/
// /* WORDPRESS EDITOR CUSTOM FIELDS */
// /********************************************************************************************************/

function Custom_get_featured_image($post_ID) {  
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);  
    if ($post_thumbnail_id) {  
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'featured_preview');  
        return $post_thumbnail_img[0];  
    }  
}  

function Custom_get_meta_post($post_ID) {  
    $custom_fields = get_post_meta($post_ID);

    if(!empty($custom_fields)) {
        return $custom_fields;
    }
}

function Custom_get_meta_post_terms($post_ID, $type) {  
    $custom_posts_terms = wp_get_post_terms($post_ID, $type);

    if(!empty($custom_posts_terms)) {
        return $custom_posts_terms;
    }
}

function Slider_colums_head($defaults) {
    $new_columns['title'] = _x('Slider Name', 'column name');
    $new_columns['featured_image'] = 'Featured Image';  
    $new_columns['place'] = 'Place';  
    $new_columns['date'] = _x('Date', 'column name');

    return $new_columns;  
}

function Slider_columns_content($column_name, $post_ID) {  
    if ($column_name == 'featured_image') {  
        $post_featured_image = Custom_get_featured_image($post_ID);  
        if ($post_featured_image) {  
            // HAS A FEATURED IMAGE  
            echo '<img src="' . $post_featured_image . '" height="37" width="100" >';  
        }  
        else {  
            // NO FEATURED IMAGE, SHOW THE DEFAULT ONE  
            echo '<img src="' . get_bloginfo( 'template_url' ) . '/images/default.jpg" />';  
        }  
    }

    $all_terms = array('place');

    foreach ($all_terms as $key => $term) {
        if($column_name==$term) {
            $custom_post_meta = Custom_get_meta_post_terms($post_ID,$term); 

            if ($custom_post_meta) {  
                foreach ($custom_post_meta as $key => $meta) {
                    echo $meta->name . '<br>';
                }
            }  
            else {  
                echo '';  
            }
        }
    }
}

add_filter('manage_slider_posts_columns', 'Slider_colums_head');  
add_action('manage_slider_posts_custom_column', 'Slider_columns_content', 10, 2);

// Include MetaBoxes plugin
include (TEMPLATEPATH . "/lib/meta-box/meta-box.php");

// Include in all pages except home
include (TEMPLATEPATH . "/lib/metabox-page.php");

// Include new post types and metabox for home and other pages
include (TEMPLATEPATH . "/lib/ptype-sections.php");
include (TEMPLATEPATH . "/lib/ptype-profileleaders.php");
include (TEMPLATEPATH . "/lib/ptype-portfolios.php");
include (TEMPLATEPATH . "/lib/ptype-honors.php");
include (TEMPLATEPATH . "/lib/ptype-mediacoverages.php");
include (TEMPLATEPATH . "/lib/ptype-pressreleases.php");
include (TEMPLATEPATH . "/lib/ptype-offices.php");

// Include Shortcodes
include (TEMPLATEPATH . "/lib/shortcodes.php");

/********************************************************************************************************/
/* WORDPRESS EDITOR FIX */
/********************************************************************************************************/

function change_mce_options( $init ) {  
     //code that adds additional attributes to the pre tag  
     $ext = 'article[id|name|class|style|x|y|cx|cy|nav]';  
      
     //if extended_valid_elements alreay exists, add to it  
     //otherwise, set the extended_valid_elements to $ext  
     if ( isset( $init['extended_valid_elements'] ) ) {  
      $init['extended_valid_elements'] .= ',' . $ext;  
     } else {  
      $init['extended_valid_elements'] = $ext;  
     }  
      
     //important: return $init!  
     return $init;  
} 

function change_mce_options_2( $init ) {  
     //code that adds additional attributes to the pre tag  
     $ext = 'div[id|name|class|style|x|y|cx|cy|nav]';  
      
     //if extended_valid_elements alreay exists, add to it  
     //otherwise, set the extended_valid_elements to $ext  
     if ( isset( $init['extended_valid_elements'] ) ) {  
      $init['extended_valid_elements'] .= ',' . $ext;  
     } else {  
      $init['extended_valid_elements'] = $ext;  
     }  
      
     //important: return $init!  
     return $init;  
} 

add_filter('tiny_mce_before_init', 'change_mce_options');  
add_filter('tiny_mce_before_init', 'change_mce_options_2'); 

// add excerpt support
add_action('init', 'my_custom_init');
function my_custom_init() {
    add_post_type_support( 'page', 'excerpt' );
}

// hide admin bar from front end
function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

function my_wpcf7_form_elements($html) {
  function ov3rfly_replace_include_blank($name, $text, &$html) {
    $matches = false;
    preg_match('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $html, $matches);
    if ($matches) {
      $select = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $matches[0]);
      $html = preg_replace('/<select name="' . $name . '"[^>]*>(.*)<\/select>/iU', $select, $html);
    }
  }
  ov3rfly_replace_include_blank('title', '* SALUTATION', $html);
  ov3rfly_replace_include_blank('country', '* CHOOSE YOUR COUNTRY', $html);
  return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');

// remove post from admin sidebar menu

function remove_from_menu()      //creating functions remove_from_menu for removing menu item
{ 
   remove_menu_page('edit.php');
   remove_menu_page( 'edit-comments.php' );
}

add_action('admin_menu', 'remove_from_menu');
?>