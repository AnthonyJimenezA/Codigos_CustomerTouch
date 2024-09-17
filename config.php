<?php
// Archivo: config.php

if (php_sapi_name() !== 'cli' && strpos($_SERVER['REQUEST_URI'], basename(__FILE__)) !== false) {
    die('No tienes acceso a este archivo.');
}

return [
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'password' => 'Customer.2024',
        'database' => 'error_codes'
    ]
];