
<?php
// Secure Session Cookie Configuration - MUST be before session_start()
session_set_cookie_params([
    'lifetime' => 3600,  // 1 hour
    'path' => '/',
    'domain' => '',
    'secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',  // HTTPS only in production
    'httponly' => true,   // Prevent JavaScript access
    'samesite' => 'Strict' // Prevent CSRF - only send cookie in same-site requests
]);

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

// Security: CSRF Protection Functions
if (!function_exists('generate_csrf_token')) {
    /**
     * Generate a CSRF token and store it in the session
     * @return string The generated CSRF token
     */
    function generate_csrf_token() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
}

if (!function_exists('validate_csrf_token')) {
    /**
     * Validate CSRF token using constant-time comparison
     * @param string $token The token to validate
     * @return bool True if valid, false otherwise
     */
    function validate_csrf_token($token) {
        if (empty($_SESSION['csrf_token']) || empty($token)) {
            return false;
        }
        return hash_equals($_SESSION['csrf_token'], $token);
    }
}

if (!function_exists('csrf_token_field')) {
    /**
     * Generate HTML hidden input field for CSRF token
     * @return string HTML input field
     */
    function csrf_token_field() {
        $token = generate_csrf_token();
        return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
    }
}