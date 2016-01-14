<?php
/*
Plugin Name: Bootstrap For Wordpress
Plugin URI: http://getbootstrap.com/
Description: Include Bootstrap
Version: 1.0
Author: Nicolas BONNIOT
Author URI: http://devgiants.fr
Text Domain: bootstrap
*/


function bootstrap_scripts()
{
    wp_enqueue_style('bootstrap-core', plugins_url('css/bootstrap.min.css', __FILE__));
    wp_enqueue_script('bootstrap', plugins_url('js/bootstrap.min.js', __FILE__), array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );


function bootstrap_after_wp_head()
{
    echo <<<HTML
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
HTML;

}
add_action('after_wp_head', 'bootstrap_after_wp_head');





?>