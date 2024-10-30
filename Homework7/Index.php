<?php
require_once 'Controllers/UserController.php';
require_once 'Models/UserModel.php';

$controller = new UserController();

if ($_SERVER['REQUEST_URI'] === '/Index.php/users' || $_SERVER['REQUEST_URI'] === '/users') {
    $controller->getJsonData();
} else {
    $controller->getHtmlPage();
}
?>
