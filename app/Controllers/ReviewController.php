<?php
namespace App\Controllers;

use App\Core\Controller;

class ReviewController extends Controller {
    public function store(): void {
        // CSRF + validation + spam/rate limit -> Review Model (status = pending)
    }
}
