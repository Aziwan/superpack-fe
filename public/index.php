<?php


$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
        require_once __DIR__ . "/pages/home.php";
        break;
    case 'login':
        require_once __DIR__ . "/pages/login.php";
        break;
    case 'register':
        require_once __DIR__ . "/pages/register.php";
        break;
    case null:
        require_once __DIR__ . "/pages/home.php";
        break;
    default:
        require_once __DIR__ . "/pages/error.php";
        break;
}