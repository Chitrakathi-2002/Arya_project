<?php
namespace App\Controllers;

use App\Core\Controller;

class ServiceController extends Controller {
    public function index(): void {
        $this->view('services/list');
    }

    public function show(string $slug): void {
        $this->view('services/detail', ['slug' => $slug]);
    }
}
