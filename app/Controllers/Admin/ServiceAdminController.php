<?php
namespace App\Controllers\Admin;

use App\Core\Controller;

class ServiceAdminController extends Controller {
    public function index(): void {
        $this->view('admin/services/index');
    }
}
