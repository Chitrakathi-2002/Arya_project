<?php
namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index(): void {
        $this->view('home');
    }

    public function about(): void {
        $this->view('about');
    }

    public function contact(): void {
        $this->view('contact');
    }
}
