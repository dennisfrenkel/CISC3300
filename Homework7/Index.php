<?php
require_once 'controllers/UserController.php';
require_once 'models/UserModel.php';

$userController = new UserController();

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController->getJsonData();
} else {
    $userController->getHtmlPage();
}
?>
