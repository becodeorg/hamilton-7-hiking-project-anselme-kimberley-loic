<?php

declare(strict_types=1);
session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '/' || $url === '') {
    $hikesController = new HikesController();
    $hikesController->showHome();
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
    $hikesController = new HikesController();
    $hikesController->index();
}

if ($url === 'singlehike') {
    $code = $_GET['code'];
    $hikesController = new HikesController();
    $hikesController->show($code);
}

if ($url === 'logout') {
    $authController  = new AuthController();
    $authController->logout();
}

if ($url === "addhike") {
    $hikesController = new HikesController();
    //$tagsController = new TagController();


    if ($method === 'GET') {
        $hikesController->showAddHike();
    }
    if ($method === 'POST') {
        $hikesController->addHike($_POST);
        //$hikesController->relationTag('25', $_POST['tid']);

    }
}

if ($url === "updatehike") {
    $code = $_GET['code'];
    $uid = $_SESSION['user']['uid'];
    $hikesController = new HikesController();

    if (!empty($uid)) {
        if ($method === 'GET') {
            $hikesController->showUpdateHike($code, $uid);
        }
        if ($method === 'POST') {
            $hikesController->updateHike($_POST);
        }
    }
    // if the user is not logged in
    else {
        echo "You are not logged in";
        // show 404 maybe ?
    }

}

if ($url === "deletehike") {
    $code = $_GET['code'];
    $uid = $_SESSION['user']['uid'];
    $hikesController = new HikesController();
    if (!empty($uid)) {
        $hikesController->showDeleteHike($code, $uid);
    }
    // if the user is not logged in
    else {
        echo "You are not logged in";
        // show 404 maybe ?
    }
}

if ($url === "deletinghike") {
    $code = $_GET['code'];
    $uid = $_SESSION['user']['uid'];
    if (!empty($uid)) {
        $hikesController = new HikesController();
        $hikesController->deleteHike($code, $uid);
    }
    // if the user is not logged in
    else {
        echo "You are not logged in";
        // show 404 maybe ?
    }
}

if ($url === "myhikes") {
    $uid = $_SESSION['user']['uid'];
    $hikesController = new HikesController();
    $hikesController->showMyHikes($uid);
}

if ($url === "profil") {
    $uid = $_SESSION['user']['uid'];
    $authController = new AuthController();
    $authController->showProfil($uid);
}

if ($url === "updateprofil") {
    $uid = $_SESSION['user']['uid'];

        $authController = new AuthController();
        if ($method === 'GET') {
            $authController->showUpdateProfil($uid);
        }
        if ($method === 'POST') {
            $authController->updateProfil($_POST);
        }
}