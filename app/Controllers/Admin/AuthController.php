<?php
namespace App\Controllers\Admin;

use App\Core\Controller;

class AuthController extends Controller {
    public function login(): void {
        $this->view('admin/login');
    }

    public function authenticate(): void {
        // Admin login logic
    }

    public function logout(): void {
        // Logout logic
    }
}
