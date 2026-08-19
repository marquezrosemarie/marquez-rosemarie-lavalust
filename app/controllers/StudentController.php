<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    private function studentData()
    {
        return [
            'student_id' => 'MCC2024-00161',
            'name' => 'Rosemarie Marquez',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3-F4',
            'email' => 'marquezrosemarie152@gmail.com',
            'address' => 'Bayanan 1 Calapan City Oriental Mindoro, Philippines',
            'contact' => '+63 977 650 7921',
            'skills' => ['Hindi mabilis magalit', 'May patience', 'Mabilis gumayak']
        ];
    }

    public function login()
    {
        $this->call->view('student_login', ['page_title' => 'Student Access']);
    }

    public function loginSubmit()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;
        header('Location: ' . site_url('student'), true, 302);
        exit;
    }

    public function index()
    {
        $this->call->view('student_home', [
            'page_title' => 'Student Home',
            'student' => $this->studentData()
        ]);
    }

    public function profile()
    {
        $this->call->view('student_profile', [
            'page_title' => 'Student Profile',
            'student' => $this->studentData()
        ]);
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_unset();
        session_destroy();
        header('Location: ' . site_url('student/login'), true, 302);
        exit;
    }
}
