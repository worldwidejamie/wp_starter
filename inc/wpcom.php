<?php

/**
 * WordPress.com-specific functions and definitions
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package _wp_default_starter
 */

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
function wp_starter_theme_wpcom_setup()
{
  global $themecolors;

  // Set theme colors for third party services.
  if (!isset($themecolors)) {
    // Whitelist wpcom specific variable intended to be overruled.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $themecolors = array(
      'bg'     => '',
      'border' => '',
      'text'   => '',
      'link'   => '',
      'url'    => '',
    );
  }
}
add_action('after_setup_theme', 'wp_default_starter_wpcom_setup');
