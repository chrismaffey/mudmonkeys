<?php
declare(strict_types=1);

$requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$requestPath = is_string($requestPath) ? rawurldecode($requestPath) : '/';
$requestPath = '/' . ltrim($requestPath, '/');
$requestPath = $requestPath === '/' ? '/' : rtrim($requestPath, '/');

$routes = [
    '/' => __DIR__ . '/../controllers/index.php',
    '/calendar' => __DIR__ . '/../controllers/calendar.php',
    '/about' => __DIR__ . '/../controllers/about.php',
];

$controller = $routes[$requestPath] ?? __DIR__ . '/../controllers/404.php';

if (!isset($routes[$requestPath])) {
    http_response_code(404);
}

$page = require $controller;

if (!is_array($page) || !isset($page['renderContent']) || !is_callable($page['renderContent'])) {
    throw new RuntimeException('The page controller did not return a valid page definition.');
}

require __DIR__ . '/../includes/template.php';
