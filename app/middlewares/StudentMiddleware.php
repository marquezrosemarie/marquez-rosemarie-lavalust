<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (empty($_SESSION['student_access'])) {
            redirect('student/login');
            return;
        }

        $request_path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '';
        $protection_enabled = !empty($_SESSION['middleware_protection_enabled']);

        if ($protection_enabled && preg_match('#/student/profile/?$#', $request_path)) {
            redirect('student?middleware_blocked=1');
            return;
        }

        return $next();
    }
}
