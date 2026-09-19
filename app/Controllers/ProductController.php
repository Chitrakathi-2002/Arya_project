<?php
namespace App\Controllers;

use App\Core\Controller;

class ProductController extends Controller {
    public function index(): void {
        $this->view('products/list');
    }

    public function show(string $slug): void {
        $this->view('products/detail', ['slug' => $slug]);
    }
}
