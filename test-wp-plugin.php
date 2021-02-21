<?php

/**
 * Plugin Name:       GitHub Updater
 * Plugin URI:        https://github.com/Silicon-Vaalies/test-wp-plugin
 * Description:       My first GH WP Plugin
 * Version:           1.0.1
 * Author:            Andy Fragen
 * License:           GNU General Public License v2
 * License URI:       https://github.com/Silicon-Vaalies/test-wp-plugin
 * Domain Path:       /languages
 * Text Domain:       github-updater
 * GitHub Plugin URI: https://github.com/afragen/github-updater
 * GitHub Languages:  https://github.com/afragen/github-updater-translations
 */

add_action( 'wp_footer', 'my_function' );

function my_function() {
  echo 'hello world';
}

