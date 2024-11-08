<?php

//$data = json_decode(file_get_contents(__DIR__ . "/assets/datas/data.json"), true);

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'home':
        require_once __DIR__ . "/pages/home.php";
        break;
    case null:
        require_once __DIR__ . "/pages/home.php";
        break;
    default:
        require_once __DIR__ . "/pages/error.php";
        break;
}