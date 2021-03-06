<?php
/**
 * Bootstrap Basic theme
 *
 * @package pnd-bootstrap-basic
 */


/**
 * Required WordPress variable.
 */

if (!isset($content_width)) {
    $content_width = 1170;
}
if (!function_exists('bootstrapBasicFullPageSearchForm')) {
    /**
     * Display full page search form
     *
     * @return string the search form element
     */
    function bootstrapBasicFullPageSearchForm()
    {
        $output = '<form class="form-horizontal" method="get" action="' . esc_url(home_url('/')) . '" role="form">';
        $output .= '<div class="form-group">';
        $output .= '<div class="col-xs-8 col-md-10">';
        $output .= '<input type="text" name="s" value="' . esc_attr(get_search_query()) . '" placeholder="' . esc_attr_x('Search &hellip;', 'placeholder', 'pnd-bootstrap-basic') . '" title="' . esc_attr_x('Search &hellip;', 'label', 'pnd-bootstrap-basic') . '" class="form-control" />';
        $output .= '</div>';
        $output .= '<div class="col-xs-4 col-md-2">';
        $output .= '<button type="submit" class="btn btn-default">' . __('Search', 'pnd-bootstrap-basic') . '</button>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</form>';

        return $output;
    }// bootstrapBasicFullPageSearchForm
}

if (!function_exists('bootstrapBasicSetup')) {
    /**
     * Setup theme and register support wp features.
     */
    function bootstrapBasicSetup()
    {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         *
         * copy from underscores theme
         */
        load_theme_textdomain('pnd-bootstrap-basic', get_template_directory() . '/languages');

        // add theme support post and comment automatic feed links
        add_theme_support('automatic-feed-links');

        // enable support for post thumbnail or feature image on posts and pages
        add_theme_support('post-thumbnails');

        // allow the use of html5 markup
        // @link https://codex.wordpress.org/Theme_Markup
        add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

        // add support menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'pnd-bootstrap-basic'),
        ));

        // add post formats support
        add_theme_support('post-formats', array('aside'));

        // add support custom background
        add_theme_support(
            'custom-background',
            apply_filters(
                'bootstrap_basic_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => ''
                )
            )
        );
    }// bootstrapBasicSetup
}
add_action('after_setup_theme', 'bootstrapBasicSetup');


if (!function_exists('bootstrapBasicWidgetsInit')) {
    /**
     * Register widget areas
     */
    function bootstrapBasicWidgetsInit()
    {
        register_sidebar(array(
            'name' => __('Header right', 'pnd-bootstrap-basic'),
            'id' => 'header-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Navigation bar right', 'pnd-bootstrap-basic'),
            'id' => 'navbar-right',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));

        register_sidebar(array(
            'name' => __('Sidebar left', 'pnd-bootstrap-basic'),
            'id' => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Sidebar right', 'pnd-bootstrap-basic'),
            'id' => 'sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Footer left', 'pnd-bootstrap-basic'),
            'id' => 'footer-left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Footer right', 'pnd-bootstrap-basic'),
            'id' => 'footer-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));
    }// bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


if (!function_exists('bootstrapBasicEnqueueScripts')) {
    /**
     * Enqueue scripts & styles
     */
    function bootstrapBasicEnqueueScripts()
    {
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:400,700', array (), ''); 
        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6');
        //wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.6');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.5.0');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js', array(), '3.3.1');
        wp_enqueue_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js', array(), '1.4.2');
        wp_enqueue_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.min.js', array(), '3.7.3');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.3.6', true);
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
        wp_enqueue_style('pnd-bootstrap-basic-style', get_stylesheet_uri());
        
        
    }// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');


/**
 * admin page displaying help.
 */
if (is_admin()) {
    require get_template_directory() . '/inc/BootstrapBasicAdminHelp.php';
    $bbsc_adminhelp = new BootstrapBasicAdminHelp();
    add_action('admin_menu', array($bbsc_adminhelp, 'themeHelpMenu'));
    unset($bbsc_adminhelp);
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicSearchWidget.php';
require get_template_directory() . '/inc/template-widgets-hook.php';

/**
 * --------------------------------------------------------------
 * Marcus Misc
 * --------------------------------------------------------------
 */
pll_register_string('Text Knopf: mehr erfahren', 'Mehr erfahren');
pll_register_string('Text Knopf: Ansprechpartner', 'Ansprechpartner');
pll_register_string('weiterlesen', 'weiterlesen');
pll_register_string('Suchergebnis', 'Suchergebnis');
pll_register_string('Suchformular', 'Suchformular');
pll_register_string('Telefonnummer', 'Telefonnummer');
pll_register_string('Oeffnungszeiten', 'Oeffnungszeiten');
pll_register_string('Post Meta Datum', 'Post Meta Datum');


function showsinglepost($id)
{
        /*$post = get_post( $id );
        setup_postdata( $post );
        the_content( $more_link_text = null );
        wp_reset_postdata();*/

}

/***
 * @return array
 */
function get_slogan_info()
{
    $slogan_info = array();

        $frontpage_id = get_option('page_on_front');
        $slogan_info[ 'sloganbig' ] = get_field( 'sloganbig', $frontpage_id);
        $slogan_info[ 'slogansmall' ] = get_field( 'slogansmall', $frontpage_id);

    return $slogan_info;
}

/**
 * @return array
 */
function get_teaser_info()
{
    $teaser_info = array();
    
        $teaser_info[ 'teaser1' ] = get_field( 'teaser1');
        $teaser_info[ 'teaser2' ] = get_field( 'teaser2');
        $teaser_info[ 'teaser3' ] = get_field( 'teaser3');
        $teaser_info[ 'teaser4' ] = get_field( 'teaser4');
        $teaser_info[ 'teaser5' ] = get_field( 'teaser5');

        $teaser_info[ 'geschaftsfuhrer' ] = get_field( 'geschaftsfuhrer');
        $teaser_info[ 'vertriebsleiter' ] = get_field( 'vertriebsleiter');

        $teaser_info[ 'zitat_startseite' ] = get_field( 'zitat_startseite');

    return $teaser_info;
}

/**
 * @return bool|string
 */
function show_time() {

        $timestamp = time(); 
        $datum = date("d.M Y",$timestamp);
    
    return $datum;
}

/**
 * @return string
 */
function country_switch() {
    return get_permalink(get_option('page_on_front'));
}

function show_teaser( $name = null ) {
    
    do_action( 'show_teaser', $name );

    $templates = array();
    $name = (string) $name;
    if ( '' !== $name )
            $templates[] = "teaser-{$name}.php";

    $templates[] = 'teaser.php';

    locate_template( $templates, true, false );
    
}

/**
 * @return bool|mixed
 */
function get_newsbreak() {

    return get_field( 'newsbreak' , get_option( 'page_on_front' ) );
}


function get_the_excerpt_more_linked() {

    global $post;

    $excerpt = $post->post_excerpt;
    $excerpt .= '&nbsp;<a class="more-link" href="' .get_permalink(). '">' .'[' .pll__('weiterlesen'). ']' .'</a>';
    
    return apply_filters( 'the_excerpt' , $excerpt );
}

/**
 * @param $link
 * @return mixed
 */
function remove_more_link_scroll( $link ) {
    $link = preg_replace( '|#more-[0-9]+|', '', $link );
    return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );



/* Navigationspunkte aus dem WordPress-Dashboard entfernen */
function remove_menus () {
    global $menu;
    $restricted = array( __('Kommentare'), __('Werkzeuge'), __('Profil'), __('Design'), __('Formulare') );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');
