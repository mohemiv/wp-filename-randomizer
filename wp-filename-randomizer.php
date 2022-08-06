<?php
/**
 * Plugin Name:  WP Filename Randomizer
 * Description:  WP Filename Randomizer adds randomization to file names when uploading files into WordPress.
 * Version:      1.0.0
 * Requires PHP: 7.0
 * License:      ISC License (ISC)
 * License URI:  https://opensource.org/licenses/ISC
 * Author:       Arseniy Sharoglazov
 * Author URI:   https://twitter.com/_mohemiv
 */

defined('ABSPATH') or die();


function wp_filename_randomizer__randomize_name($filename) {
    $key = sha1(random_bytes(32));
    $key = substr($key, 0, 8);

    return "$key-$filename";
}

add_filter('sanitize_file_name', 'wp_filename_randomizer__randomize_name', 10);
