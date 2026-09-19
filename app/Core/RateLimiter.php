<?php
namespace App\Core;

class RateLimiter {
    public static function check(string $key, int $maxAttempts = 5, int $decaySeconds = 60): bool {
        // Rate limiting logic
        return true;
    }
}
