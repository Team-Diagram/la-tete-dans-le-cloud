<?php

use App\Route\Route;

require_once '../vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    die;
}

require_once "../router.php";