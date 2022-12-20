<?php

declare(strict_types=1);
session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '/' || $url === '') {
    $hikesController = new HikesController();
    $hikesController->index();
}

/*$routes = [
    'login' => [AuthController::class, 'showLoginForm()'],
    ...
];*/

if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
    var_dump($_POST);

}

if ($url === 'registration') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showRegistrationForm();
    }

    if ($method === 'POST') {
        $authController->register($_POST);
    }

}

if ($url === 'hikes') {
    $code = $_GET['code'];
    $hikesController = new HikesController();
    $hikesController->show($code);
}

if ($url === 'logout') {
    $authController  = new AuthController();
    $authController->logout();
}