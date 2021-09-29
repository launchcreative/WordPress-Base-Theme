<?php
// Remove WordPress version from meta data
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Disable theme editor
define('DISALLOW_FILE_EDIT', true);