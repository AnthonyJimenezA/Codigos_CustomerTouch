<?php

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../'); // Cargar el archivo .env
$dotenv->load();

// Retorna las variables de configuración
return [
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS'],
        'database' => $_ENV['DB_DATABASE'],
    ],
];