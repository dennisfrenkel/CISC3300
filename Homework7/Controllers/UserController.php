<?php
require_once '/Users/dennisf/Desktop/Homework7/Models/UserModel.php';

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function getUsersHtml()
    {
        header('Location: Views/Users.html');
        exit();
    }

    public function getUsersJson()
    {
        header('Content-Type: application/json');
        echo json_encode($this->userModel->getAllUsers());
    }
}
