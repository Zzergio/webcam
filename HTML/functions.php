<?php function enqueue_styles() {
	wp_enqueue_style( 'beeharvest', get_stylesheet_uri());
	wp_register_style('font-rubik', 'https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic');
    wp_register_style('normalize-style', '/css/normalize.css');
    wp_register_style('animation-style', '/css/animate.css');
	wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css');
	wp_register_style('media-style', '/css/media.css');
   	
	wp_enqueue_style( 'font-rubik');
	wp_enqueue_style( 'normalize-style-style');
    wp_enqueue_style( 'animation-style');
    wp_enqueue_style( 'font-awesome');
	wp_enqueue_style( 'media-style');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
    // отменяем зарегистрированный jQuery
    // вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
    wp_deregister_script( 'jquery-core' );
    wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.4.1.js');
    wp_enqueue_script( 'jquery' );
}

function enqueue_scripts () {
	
	wp_register_script('menu', '/script/menu.js');
	wp_enqueue_script('menu');

    wp_register_script('totop', '/script/totop.js');
    wp_enqueue_script('totop');

    wp_register_script('wow', '/script/wow.js');
    wp_enqueue_script('wow');

	wp_register_script('fade', '/script/fade.js');
	wp_enqueue_script('fade');

	wp_register_script('send-message', '/script/send.php');
	wp_enqueue_script('send-message');

    wp_register_script('callback', '/script/callback.php');
    wp_enqueue_script('callback');

    wp_register_script('viewportchecker', '/script/viewportchecker.js');
    wp_enqueue_script('viewportchecker');

}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

remove_filter('the_content', 'wpautop'); 

register_sidebar( array(
        'name' => __( 'EmailHeader', '' ),
        'id' => 'email-area',
        'description' => __( 'EmailHeader', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'PhoneArea', '' ),
        'id' => 'phone-area',
        'description' => __( 'PhoneArea', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'FlagsArea', '' ),
        'id' => 'flags-area',
        'description' => __( 'FlagsArea', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'AddressArea', '' ),
        'id' => 'address-area',
        'description' => __( 'AddressArea', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'PopUp', '' ),
        'id' => 'popup-area',
        'description' => __( 'PopUp', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'PopUp2', '' ),
        'id' => 'popup-area2',
        'description' => __( 'PopUp2', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'CallBack', '' ),
        'id' => 'callback',
        'description' => __( 'CallBack', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'ContactsSend', '' ),
        'id' => 'contacts-send',
        'description' => __( 'ContactsSend', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'Copy', '' ),
        'id' => 'copy-area',
        'description' => __( 'Copy', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'Button1', '' ),
        'id' => 'button1',
        'description' => __( 'Button1', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'Button2', '' ),
        'id' => 'button2',
        'description' => __( 'Button2', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

register_sidebar( array(
        'name' => __( 'Usage', '' ),
        'id' => 'usage-area',
        'description' => __( 'Usage', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => '',
    ) );

add_action('login_head', 'my_custom_login_logo');
function my_custom_login_logo(){
    echo '<style type="text/css">
    h1 a { background-image:url('.get_bloginfo('template_directory').'/img/logo-bh.png) !important; }
    </style>';
}

?>