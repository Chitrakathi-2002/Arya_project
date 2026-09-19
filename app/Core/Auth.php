<?php
namespace App\Core;

class Auth {
    public static function check(): bool {
        return isset($_SESSION['admin_id']);
    }

    public static function id(): ?int {
        return $_SESSION['admin_id'] ?? null;
    }
}
