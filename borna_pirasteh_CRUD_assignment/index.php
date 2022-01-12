<?php

use Vargha_Khallokhi_CRUD\Controller\PersonController;
use Vargha_Khallokhi_CRUD\Helper\DBConnector;

include("loader.php");
$connection = new DBConnector();
try {
    $connection->connect();
} catch (Exception $e) {
}

$controller = new PersonController();
try {
    $controller->switcher($_SERVER['REQUEST_URI'], $_REQUEST);
} catch (Exception $e) {
}