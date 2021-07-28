<?php

/**
 * virtus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package virtus
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('virtus_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function virtus_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on virtus, use a find and replace
		 * to change 'virtus' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('virtus', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'virtus'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'virtus_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'virtus_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function virtus_content_width()
{
	$GLOBALS['content_width'] = apply_filters('virtus_content_width', 640);
}
add_action('after_setup_theme', 'virtus_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function virtus_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'virtus'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'virtus'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Header', 'virtus'),
			'id' => 'header-1',
			'description' => esc_html__('Header redes sociales', 'virtus'),
			'before_widget' => '<div id="%1$s" class="widget-redes-item %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Telefono', 'virtus'),
			'id' => 'telefono-1',
			'description' => esc_html__('Appears on the static front page template', 'virtus'),
			'before_widget' => '<div id="%1$s" class="widget-phone %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name' => esc_html__('Correo', 'virtus'),
			'id' => 'correo-1',
			'description' => esc_html__('Appears on the static front page template', 'virtus'),
			'before_widget' => '<div id="%1$s" class="widget-email %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('footer logo', 'virtus'),
			'id'            => 'footer-logo',
			'description'   => esc_html__('Widget para mostrar el logo en el footer', 'virtus'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('footer info', 'virtus'),
			'id'            => 'footer-info',
			'description'   => esc_html__('Poner la información del footer', 'virtus'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__('footer dejar datos', 'virtus'),
			'id'            => 'footer-datos',
			'description'   => esc_html__('widget para poner los datos', 'virtus'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('footer redes sociales', 'virtus'),
			'id'            => 'footer-redes',
			'description'   => esc_html__('Widget para las redes sociales del footer', 'virtus'),
			'before_widget' => '<section id="%1$s" class="widget-redes-item  %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'virtus_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function virtus_scripts()
{
	wp_enqueue_style('virtus-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('virtus-style', 'rtl', 'replace');

	wp_enqueue_script('virtus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'virtus_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}



// WIDGET REDSE HEADER

// Creating the widget 
class redes_widget extends WP_Widget
{

	// The construct part  
	function __construct()
	{
		parent::__construct(

			// Base ID of your widget
			'redes_widget',

			// Widget name will appear in UI
			__('SN header Widget', 'redes_widget_domain'),

			// Widget description
			array('description' => __(
				'widget de redes sociales para el header',
				'redes_widget_domain'
			),)
		);
	}


	// Creating widget front-end
	public function widget($args, $instance)
	{
		$link = apply_filters('widget_title', $instance['link']);
		$social =  $instance['social'];
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if (
			!empty($link)
		)

			$icon = $this->get_social_icon($social);
		echo "<a href='$link'>$icon</a>";

		// This is where you run the code and display the output

		echo $args['after_widget'];
	}

	// Widget Backend 
	public function form($instance)
	{
		if (isset($instance['link'])) {
			$link = $instance['link'];
		} else {
			$link = __('#', 'wpb_widget_domain');
		}

		if (isset($instance['social'])) {
			$social = $instance['social'];
		} else {
			$social = __('facebook', 'wpb_widget_domain');
		}
		// Widget admin form
?>
<p>
    <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Link:'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>"
        name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo esc_attr($link); ?>" />

    <label for="<?php echo $this->get_field_id('social'); ?>"><?php _e('Red social:'); ?></label>
    <select class="widefat" id="<?php echo $this->get_field_id('social'); ?>"
        name="<?php echo $this->get_field_name('social'); ?>">
        <option value="<?php _e($social) ?>"><?php _e($social) ?></option>
        <option value="instagram">instagram</option>
        <option value="youtube">youtube</option>
    </select>
</p>
<?php
	}

	// Updating widget replacing old instances with new
	// Updating widget replacing old instances with new
	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['link'] = (!empty($new_instance['link'])) ? strip_tags($new_instance['link']) : '';
		$instance['social'] = (!empty($new_instance['social'])) ? strip_tags($new_instance['social']) : '';
		return $instance;
	}

	// Class wpb_widget ends here

	public function get_social_icon($red)
	{
		$icon = '';

		switch ($red) {
			case 'facebook':
				$icon = "<svg id='Bold' enable-background='new 0 0 24 24' height='512' viewBox='0 0 24 24'
                                        width='512' xmlns='http://www.w3.org/2000/svg' class='svg-redes'>
                                        <path
                                            d='m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z' />
                                    </svg>";
				break;
			case 'youtube':
				$icon = "<svg version='1.1' id='Capa_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
	 			viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;' xml:space='preserve' class='svg-redes'>
					<g>
						<g>
							<path d='M490.24,113.92c-13.888-24.704-28.96-29.248-59.648-30.976C399.936,80.864,322.848,80,256.064,80
								c-66.912,0-144.032,0.864-174.656,2.912c-30.624,1.76-45.728,6.272-59.744,31.008C7.36,138.592,0,181.088,0,255.904
								C0,255.968,0,256,0,256c0,0.064,0,0.096,0,0.096v0.064c0,74.496,7.36,117.312,21.664,141.728
								c14.016,24.704,29.088,29.184,59.712,31.264C112.032,430.944,189.152,432,256.064,432c66.784,0,143.872-1.056,174.56-2.816
								c30.688-2.08,45.76-6.56,59.648-31.264C504.704,373.504,512,330.688,512,256.192c0,0,0-0.096,0-0.16c0,0,0-0.064,0-0.096
								C512,181.088,504.704,138.592,490.24,113.92z M192,352V160l160,96L192,352z'/>
						</g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					<g>
					</g>
					</svg>
					";
				break;
			case 'instagram':
				$icon = "<svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
					width='169.063px' height='169.063px' viewBox='0 0 169.063 169.063' style='enable-background:new 0 0 169.063 169.063;'
					xml:space='preserve' class='svg-redes'>
				<g>
					<path d='M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
						c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
						c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
						c17.455,0,31.656,14.201,31.656,31.655V122.407z'/>
					<path d='M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
						C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
						c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z'/>
					<path d='M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
						c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
						C135.661,29.421,132.821,28.251,129.921,28.251z'/>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				<g>
				</g>
				</svg>
				";
				break;

			default:
				# code...
				break;
		}

		return $icon;
	}
}


// Creating the widget 
class telefono_widget extends WP_Widget
{

	// The construct part  
	function __construct()
	{
		parent::__construct(

			// Base ID of your widget
			'telefono_widget',

			// Widget name will appear in UI
			__('Widget para poner el telefono', 'redes_widget_domain'),

			// Widget description
			array('description' => __(
				'widget de redes sociales para el header',
				'redes_widget_domain'
			),)
		);
	}


	// Creating widget front-end
	public function widget($args, $instance)
	{
		$telefono = apply_filters('widget_title', $instance['telefono']);

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if (
			!empty($telefono)
		)
			echo "  <svg
                version='1.1'
                id='Capa_1'
                xmlns='http://www.w3.org/2000/svg'
                xmlns:xlink='http://www.w3.org/1999/xlink'
                x='0px'
                y='0px'
                viewBox='0 0 31.685 31.685'
                style='enable-background: new 0 0 31.685 31.685'
                xml:space='preserve'
              >
                <g>
                  <path
                    d='M22.507,0H9.175C7.9,0,6.87,1.034,6.87,2.309v27.07c0,1.271,1.03,2.306,2.305,2.306h13.332
		c1.273,0,2.307-1.034,2.307-2.306V2.309C24.813,1.034,23.78,0,22.507,0z M23.085,25.672H8.599V3.895h14.486V25.672z M18.932,2.343
		h-6.181V1.669h6.182L18.932,2.343L18.932,2.343z M21.577,2.035c0,0.326-0.266,0.59-0.591,0.59c-0.326,0-0.591-0.265-0.591-0.59
		s0.265-0.59,0.591-0.59C21.312,1.444,21.577,1.709,21.577,2.035z M18.655,29.225h-5.629v-1.732h5.629V29.225z'
                  />
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
              </svg>";


		echo "<p>$telefono</p>";

		// This is where you run the code and display the output

		echo $args['after_widget'];
	}

	// Widget Backend 
	public function form($instance)
	{
		if (isset($instance['telefono'])) {
			$telefono = $instance['telefono'];
		} else {
			$telefono = __('500 000 0000', 'wpb_widget_domain');
		}


		// Widget admin form
	?>
<p>
    <label for="<?php echo $this->get_field_id('telefono'); ?>"><?php _e('Teléfono:'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('telefono'); ?>"
        name="<?php echo $this->get_field_name('telefono'); ?>" type="text"
        value="<?php echo esc_attr($telefono); ?>" />
</p>
<?php
	}

	// Updating widget replacing old instances with new
	// Updating widget replacing old instances with new
	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['telefono'] = (!empty($new_instance['telefono'])) ? strip_tags($new_instance['telefono']) : '';
		return $instance;
	}

	// Class wpb_widget ends her
}

function wpb_load_widget()
{
	register_widget('redes_widget');
	register_widget('telefono_widget');
}
add_action('widgets_init', 'wpb_load_widget');


function get_main_menu()
{
	wp_nav_menu(
		array(
			'menu_id'        => 'primary-menu',
			'menu_class'	=> 'menu',
			'container'         => 'div',
			'container_class' => 'menu-desktop'
		)
	);
}



function transform_title($title)
{

	if (!isset($title)) {
		return '';
	}
	$innerHTMLTitle = '';
	$titleArray = explode(' ', $title);

	if (count($titleArray) == 1) {

		return $title;
	}
	$lastElementTitle = array_pop($titleArray);
	$spanTitle = "<span>$lastElementTitle</span>";
	array_push($titleArray, $spanTitle);

	foreach ($titleArray as $value) {
		$innerHTMLTitle .= $value . " ";
	}

	return $innerHTMLTitle;
}


add_action('init', 'sliders_category_taxonomy', 0);
function sliders_category_taxonomy()
{
	$labels
		= array(
			'name' => _x('Locations', 'taxonomy general name'),
			'singular_name' => _x('Location', 'taxonomy singular name'),
			'search_items' =>  __('Search Location'),
			'all_items' => __('All Locations'),
			'parent_item' => __('Parent Subject'),
			'parent_item_colon' => __('Parent Locations:'),
			'edit_item' => __('Edit Location'),
			'update_item' => __('Update Location'),
			'add_new_item' => __('Add New Location'),
			'new_item_name' => __('New Location Name'),
			'menu_name' => __('Locations'),
		);

	register_taxonomy('Locations', array('sliders'), array(
		'labels' => $labels,
		'hierarchical' => true,
		'show_ui' => true,
		'query_var' => true,
	));
}

add_action('init', 'slider_cpt_create');


function slider_cpt_create()
{
	$labels = array(
		'name' => __('sliders'),
		'singular_name' => __('slider'),
		'add_new' => _x('Añadir nuevo', 'slider'),
		'add_new_item' => __('Añadir nuevo slider'),
		'edit_item' => __('Editar slider'),
		'new_item' => __('Nuevo slider'),
		'view_item' => __('Ver slider'),
		'search_items' => __('Buscar slider'),
		'not_found' =>  __('No se ha encontrado ningún producto'),
		'not_found_in_trash' => __('No se han encontrado productos en la papelera'),
		'parent_item_colon' => ''
	);

	// Creamos un array para $args
	$args = array(
		'label' => __('sliders'),
		'labels' => $labels,
		'public' => true,
		'can_export' => true,
		'show_ui' => true,
		'_builtin' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array("slug" => "slider", 'with_front' => true),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'show_in_nav_menus' => true,
		'taxonomies' => array('category'),
		'menu_icon' => 'dashicons-admin-appearance',
		'map_meta_cap' => true
	);

	register_post_type('sliders', $args); /* Registramos y a funcionar */
}




/*
* Define a constant path to our single template folder
*/

 
/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');
 
/**
* Single template function which will choose our template
*/
function my_single_template($single) {
	global $wp_query, $post;
	$SINGLE_PATH =  TEMPLATEPATH . '/single';
	/**
	* Checks for single template by category
	* Check by category slug and ID
	*/
	foreach((array)get_the_category() as $cat) {
		
		if(file_exists($SINGLE_PATH . '/single-cat-' . $cat->slug . '.php')){
			return $SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';
		}
		elseif(file_exists($SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php')){
			return $SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';
		}
		else{
			return ;
		}
	}
}