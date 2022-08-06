<?php
/**
 * Plugin Name:  Filename Randomizer
 * Description:  Filename Randomizer adds randomization to file names when uploading files into WordPress.
 * Plugin URI:   https://github.com/mohemiv/wp-filename-randomizer
 * Version:      1.0.2
 * Requires PHP: 7.0
 * License:      ISC License (ISC)
 * License URI:  https://opensource.org/licenses/ISC
 * Author:       Arseniy Sharoglazov
 * Author URI:   https://twitter.com/_mohemiv
 */

defined('ABSPATH') or die();

if (strtoupper(substr(PHP_OS, 0, 3)) == "WIN") {
    define("FILENAME_RANDOMIZER_RANDOMIZE_LEN", 16);
} else {
    define("FILENAME_RANDOMIZER_RANDOMIZE_LEN", 8);
}

function filename_randomizer__randomize_name($filename) {
    if (preg_match('/^[a-f0-9]{'. FILENAME_RANDOMIZER_RANDOMIZE_LEN . '}-.*/', $filename)) {
        return $filename;
    }

    $key = sha1(random_bytes(32));
    $key = substr($key, 0, FILENAME_RANDOMIZER_RANDOMIZE_LEN);

    return "$key-$filename";
}

add_filter('sanitize_file_name', 'filename_randomizer__randomize_name', 10);
