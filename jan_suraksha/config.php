
<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database Configuration
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'jan_suraksha';

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
    die('Database Connection Error: ' . $mysqli->connect_error);
}

// Security: XSS Prevention Helper
if (!function_exists('e')) {
    function e($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}