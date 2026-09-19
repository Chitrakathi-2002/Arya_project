<?php
namespace App\Core;

use PDO;

abstract class Model {
    protected static ?PDO $db = null;

    protected static function getDB(): PDO {
        if (self::$db === null) {
            // Initialize PDO connection
        }
        return self::$db;
    }
}
