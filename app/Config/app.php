<?php
// Application global configuration
return [
    'name' => $_ENV['APP_NAME'] ?? 'Arya Enterprises',
    'env' => $_ENV['APP_ENV'] ?? 'development',
    'debug' => filter_var($_ENV['APP_DEBUG'] ?? true, FILTER_VALIDATE_BOOLEAN),
    'url' => $_ENV['APP_URL'] ?? 'http://localhost',
    'whatsapp_phone' => $_ENV['WHATSAPP_PHONE'] ?? '',
];
