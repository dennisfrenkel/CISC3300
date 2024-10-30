<?php
class UserController {
    public function getHtmlPage() {
        include 'views/Users.html';
    }

    public function getJsonData() {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();
        header('Content-Type: application/json');
        echo json_encode($users);
    }
}
?>
