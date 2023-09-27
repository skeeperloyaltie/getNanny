<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueue script and styles */
/*-----------------------------------------------------------------------------------*/

function fashion_designer_mart_enqueue_google_fonts() {

	require_once get_theme_file_path( 'core/includes/wptt-webfont-loader.php' );

	wp_enqueue_style( 'google-fonts-dm-serif-display', 'https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap' );

	wp_enqueue_style( 'google-fonts-nunito-sans', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap' );
}
add_action( 'wp_enqueue_scripts', 'fashion_designer_mart_enqueue_google_fonts' );

if (!function_exists('fashion_designer_mart_enqueue_scripts')) {

	function fashion_designer_mart_enqueue_scripts() {

		wp_enqueue_style(
			'bootstrap-css',get_template_directory_uri() . '/css/bootstrap.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'fontawesome-css',get_template_directory_uri() . '/css/fontawesome-all.css',
			array(),'4.5.0'
		);

		wp_enqueue_style(
			'owl.carousel-css',get_template_directory_uri() . '/css/owl.carousel.css',
			array(),'2.3.4'
		);

		wp_enqueue_style('fashion-designer-mart-style', get_stylesheet_uri(), array() );

		wp_enqueue_style(
			'fashion-designer-mart-media-css',get_template_directory_uri() . '/css/media.css',
			array(),'2.3.4'
		);

		wp_enqueue_style(
			'fashion-designer-mart-woocommerce-css',get_template_directory_uri() . '/css/woocommerce.css',
			array(),'2.3.4'
		);

		wp_enqueue_script(
			'fashion-designer-mart-navigation',get_template_directory_uri() . '/js/navigation.js',
			FALSE,
			'1.0',
			TRUE
		);

		wp_enqueue_script(
			'owl.carousel-js',get_template_directory_uri() . '/js/owl.carousel.js',
			array('jquery'),
			'2.3.4',
			TRUE
		);

		wp_enqueue_script(
			'fashion-designer-mart-script',get_template_directory_uri() . '/js/script.js',
			array('jquery'),
			'1.0',
			TRUE
		);

		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		$fashion_designer_mart_css = '';

		if ( get_header_image() ) :

			$fashion_designer_mart_css .=  '
				.header{
					background-image: url('.esc_url(get_header_image()).');
					-webkit-background-size: cover !important;
					-moz-background-size: cover !important;
					-o-background-size: cover !important;
					background-size: cover !important;
				}';

		endif;

		wp_add_inline_style( 'fashion-designer-mart-style', $fashion_designer_mart_css );

		// Theme Customize CSS.
		require get_template_directory(). '/core/includes/inline.php';
		wp_add_inline_style( 'fashion-designer-mart-style',$fashion_designer_mart_custom_css );

	}

	add_action( 'wp_enqueue_scripts', 'fashion_designer_mart_enqueue_scripts' );

}

/*-----------------------------------------------------------------------------------*/
/* Setup theme */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fashion_designer_mart_after_setup_theme')) {

	function fashion_designer_mart_after_setup_theme() {

		if ( ! isset( $fashion_designer_mart_content_width ) ) $fashion_designer_mart_content_width = 900;

		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'fashion-designer-mart' ),
		));

		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'align-wide' );
		add_theme_support('title-tag');
		add_theme_support('automatic-feed-links');
		add_theme_support( 'wp-block-styles' );
		add_theme_support('post-thumbnails');
		add_theme_support( 'custom-background', array(
		  'default-color' => 'f3f3f3'
		));

		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
			'flex-height' => true,
			'flex-width'  => true,
		) );

		add_theme_support( 'custom-header', array(
			'header-text' => false,
			'width' => 1920,
			'height' => 100,
			'flex-height' => true,
			'flex-width' => true,
		));

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_editor_style( array( '/css/editor-style.css' ) );
	}

	add_action( 'after_setup_theme', 'fashion_designer_mart_after_setup_theme', 999 );

}

require get_template_directory() .'/core/includes/main.php';
require get_template_directory() .'/core/includes/tgm.php';
require get_template_directory() . '/core/includes/customizer.php';
load_template( trailingslashit( get_template_directory() ) . '/core/includes/class-upgrade-pro.php' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue theme logo style */
/*-----------------------------------------------------------------------------------*/
function fashion_designer_mart_logo_resizer() {

    $fashion_designer_mart_theme_logo_size_css = '';
    $fashion_designer_mart_logo_resizer = get_theme_mod('fashion_designer_mart_logo_resizer');

	$fashion_designer_mart_theme_logo_size_css = '
		.custom-logo{
			height: '.esc_attr($fashion_designer_mart_logo_resizer).'px !important;
			width: '.esc_attr($fashion_designer_mart_logo_resizer).'px !important;
		}
	';
    wp_add_inline_style( 'fashion-designer-mart-style',$fashion_designer_mart_theme_logo_size_css );

}
add_action( 'wp_enqueue_scripts', 'fashion_designer_mart_logo_resizer' );

/*-----------------------------------------------------------------------------------*/
/* Get post comments */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('fashion_designer_mart_comment')) :
    /**
     * Template for comments and pingbacks.
     *
     * Used as a callback by wp_list_comments() for displaying the comments.
     */
    function fashion_designer_mart_comment($comment, $fashion_designer_mart_args, $depth){

        if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) : ?>

            <li id="comment-<?php comment_ID(); ?>" <?php comment_class('media'); ?>>
            <div class="comment-body">
                <?php esc_html_e('Pingback:', 'fashion-designer-mart');
                comment_author_link(); ?><?php edit_comment_link(__('Edit', 'fashion-designer-mart'), '<span class="edit-link">', '</span>'); ?>
            </div>

        <?php else : ?>

        <li id="comment-<?php comment_ID(); ?>" <?php comment_class(empty($fashion_designer_mart_args['has_children']) ? '' : 'parent'); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body media mb-4">
                <a class="pull-left" href="#">
                    <?php if (0 != $fashion_designer_mart_args['avatar_size']) echo get_avatar($comment, $fashion_designer_mart_args['avatar_size']); ?>
                </a>
                <div class="media-body">
                    <div class="media-body-wrap card">
                        <div class="card-header">
                            <h5 class="mt-0"><?php /* translators: %s: author */ printf('<cite class="fn">%s</cite>', get_comment_author_link() ); ?></h5>
                            <div class="comment-meta">
                                <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                                    <time datetime="<?php comment_time('c'); ?>">
                                        <?php /* translators: %s: Date */ printf( esc_attr('%1$s at %2$s', '1: date, 2: time', 'fashion-designer-mart'), esc_attr( get_comment_date() ), esc_attr( get_comment_time() ) ); ?>
                                    </time>
                                </a>
                                <?php edit_comment_link( __( 'Edit', 'fashion-designer-mart' ), '<span class="edit-link">', '</span>' ); ?>
                            </div>
                        </div>

                        <?php if ('0' == $comment->comment_approved) : ?>
                            <p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'fashion-designer-mart'); ?></p>
                        <?php endif; ?>

                        <div class="comment-content card-block">
                            <?php comment_text(); ?>
                        </div>

                        <?php comment_reply_link(
                            array_merge(
                                $fashion_designer_mart_args, array(
                                    'add_below' => 'div-comment',
                                    'depth' => $depth,
                                    'max_depth' => $fashion_designer_mart_args['max_depth'],
                                    'before' => '<footer class="reply comment-reply card-footer">',
                                    'after' => '</footer><!-- .reply -->'
                                )
                            )
                        ); ?>
                    </div>
                </div>
            </article>

            <?php
        endif;
    }
endif; // ends check for fashion_designer_mart_comment()

if (!function_exists('fashion_designer_mart_widgets_init')) {

	function fashion_designer_mart_widgets_init() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar','fashion-designer-mart'),
			'id'   => 'fashion-designer-mart-sidebar',
			'description'   => esc_html__('This sidebar will be shown next to the content.', 'fashion-designer-mart'),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

		register_sidebar(array(

			'name' => esc_html__('Footer sidebar','fashion-designer-mart'),
			'id'   => 'fashion-designer-mart-footer-sidebar',
			'description'   => esc_html__('This sidebar will be shown next at the bottom of your content.', 'fashion-designer-mart'),
			'before_widget' => '<div id="%1$s" class="col-lg-3 col-md-3 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'

		));

	}

	add_action( 'widgets_init', 'fashion_designer_mart_widgets_init' );

}

function fashion_designer_mart_get_categories_select() {
	$fashion_designer_mart_teh_cats = get_categories();
	$results;
	$fashion_designer_mart_count = count($fashion_designer_mart_teh_cats);
	for ($i=0; $i < $fashion_designer_mart_count; $i++) {
	if (isset($fashion_designer_mart_teh_cats[$i]))
  		$results[$fashion_designer_mart_teh_cats[$i]->slug] = $fashion_designer_mart_teh_cats[$i]->name;
	else
  		$fashion_designer_mart_count++;
	}
	return $results;
}

function fashion_designer_mart_sanitize_select( $input, $setting ) {
	// Ensure input is a slug
	$input = sanitize_key( $input );

	// Get list of choices from the control
	// associated with the setting
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it;
	// otherwise, return the default
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'fashion_designer_mart_loop_columns');
if (!function_exists('fashion_designer_mart_loop_columns')) {
	function fashion_designer_mart_loop_columns() {
		$columns = get_theme_mod( 'fashion_designer_mart_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'fashion_designer_mart_per_page', 20 );
function fashion_designer_mart_per_page( $cols ) {
  	$cols = get_theme_mod( 'fashion_designer_mart_product_per_page', 9 );
	return $cols;
}

//redirect
function fashion_designer_mart_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
   		wp_safe_redirect( admin_url("themes.php?page=fashion-designer-mart-guide-page") );
   	}
}
add_action('after_setup_theme', 'fashion_designer_mart_notice');

?>
