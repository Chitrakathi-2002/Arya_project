<?php
namespace App\Controllers\Admin;

use App\Core\Controller;

class ReviewModerationController extends Controller {
    public function index(): void {
        $this->view('admin/reviews/index');
    }
}
