<?php
/**
 * Plugin Name: MemberFun Backend
 * Plugin URI: https://example.com/memberfun
 * Description: A headless WordPress plugin that provides REST API endpoints for React frontend application. Handles member management, authentication, and custom functionality.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: memberfun-backend
 * Domain Path: /languages
 *
 * This plugin provides custom REST API endpoints for a headless WordPress setup
 * to be consumed by a React frontend application. Features include:
 * - Custom authentication endpoints using JWT
 * - Member management and roles
 * - Custom post types and taxonomies
 * - Secure API routes and endpoints
 * - Data validation and sanitization
 * 
 * Requires PHP: 7.4
 * Requires at least: 5.6
 */

// Prevent direct access to this file
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('MEMBERFUN_BACKEND_VERSION', '1.0.0');
define('MEMBERFUN_BACKEND_DIR', plugin_dir_path(__FILE__));
define('MEMBERFUN_BACKEND_URL', plugin_dir_url(__FILE__));

// Include required files
require_once MEMBERFUN_BACKEND_DIR . 'inc/helpers.php';
require_once MEMBERFUN_BACKEND_DIR . 'inc/api.php';
require_once MEMBERFUN_BACKEND_DIR . 'inc/social-auth.php';
require_once MEMBERFUN_BACKEND_DIR . 'inc/points-system/index.php';
require_once MEMBERFUN_BACKEND_DIR . 'inc/semina/index.php';
require_once MEMBERFUN_BACKEND_DIR . 'inc/comments/index.php';
