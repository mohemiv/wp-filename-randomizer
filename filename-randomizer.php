<?php
/**
 * Plugin Name:  Filename Randomizer
 * Description:  Filename Randomizer adds randomization to file names when uploading files into WordPress.
 * Plugin URI:   https://github.com/mohemiv/wp-filename-randomizer
 * Version:      1.0.0
 * Requires PHP: 7.0
 * License:      ISC License (ISC)
 * License URI:  https://opensource.org/licenses/ISC
 * Author:       Arseniy Sharoglazov
 * Author URI:   https://twitter.com/_mohemiv
 */

defined('ABSPATH') or die();


function filename_randomizer__randomize_name($filename) {
    $key = sha1(random_bytes(32));
    $key = substr($key, 0, 8);

    return "$key-$filename";
}

add_filter('sanitize_file_name', 'filename_randomizer__randomize_name', 10);
