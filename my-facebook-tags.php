<?php
/**
 * Plugin Name: My Facebook Tags
 * Plugin URI: http://danielpataki.com
 * Description: This plugin adds some Facebook Open Graph tags to our single posts.
 * Version: 1.0.0
 * Author: Daniel Pataki
 * Author URI: http://danielpataki.com
 * License: GPL2
 */

/**
 *  hook to the head
 */
add_action( 'wp_head', 'my_facebook_tags' );
function my_facebook_tags(){
    echo 'hi form the home page';
}