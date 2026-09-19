<?php
namespace App\Controllers\Admin;

use App\Core\Controller;

class EnquiryLogController extends Controller {
    public function index(): void {
        $this->view('admin/enquiries/index');
    }
}
