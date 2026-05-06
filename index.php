<?php
/**
 * MOBO-V1-V Bot - Webhook Entry Point
 * Railway Deployment Version
 */

// Define root directory
define('ROOT_DIR', __DIR__);

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration
require_once ROOT_DIR . '/config/config.php';
require_once ROOT_DIR . '/config/variables.php';
require_once ROOT_DIR . '/functions/bot.php';
require_once ROOT_DIR . '/functions/functions.php';
require_once ROOT_DIR . '/functions/db.php';

// Set timezone
date_default_timezone_set($config['timeZone'] ?? 'UTC');

// Load all modules
$modules = [
    'modules/admin.php',
    'modules/skcheck.php',
    'modules/binlookup.php',
    'modules/iban.php',
    'modules/stats.php',
    'modules/me.php',
    'modules/apikey.php',
    'modules/checker/ss.php',
    'modules/checker/schk.php',
    'modules/checker/sm.php'
];

foreach ($modules as $module) {
    $module_path = ROOT_DIR . '/' . $module;
    if (file_exists($module_path)) {
        require_once $module_path;
    }
}

// Include main bot logic
require_once ROOT_DIR . '/main.php';

// Always return 200 OK for webhook
http_response_code(200);
?>
