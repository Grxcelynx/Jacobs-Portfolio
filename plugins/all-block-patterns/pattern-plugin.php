<?php
/**
* Plugin Name:     Jacob Difede Site Custom Block Patterns
* Plugin URI:      https://webpage.com/
* Description:     This is a simple plugin with some common block patterns I’m using.
* Version:         1.0.0
* Author:          Grace Birnam
* Author URI:      https://grxcelyn.com/
* License:         GPL-3.0+
* License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
*
*/
 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}
/**
  * Currently plugin version.
  */
define( 'CUSTOM_BLOCK_PATTERNS_VERSION', '1.0.0' );
require_once ('inc/custom-patterns.php');