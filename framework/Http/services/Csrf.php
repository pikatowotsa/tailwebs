<?php
namespace Teacherportal\Framework\Http\Services;

class Csrf
{
    public function __construct() {
        // Start the session if not already started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Function to generate a CSRF token
    public function generateToken() {
        // Generate a random token and store it in the session
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    }

    // Function to get the CSRF token
    public function getToken() {
        return $_SESSION['csrf_token'] ?? '';
    }

    // Function to verify the CSRF token
    public function verifyToken($token) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }

    // Middleware handler to verify the CSRF token for POST requests
    public function handle() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_POST['csrf_token']) || !$this->verifyToken($_POST['csrf_token'])) {
                die('CSRF token validation failed');
            }
        }
    }
}