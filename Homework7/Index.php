<?php

require_once 'Controllers/UserController.php';

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/users') {
    $userController->getUsersJson();
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $userController->getUsersHtml();
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}
