<?php
namespace App\Controllers\Admin;

use App\Core\Controller;

class ProductAdminController extends Controller {
    public function index(): void {
        $this->view('admin/products/index');
    }
}
