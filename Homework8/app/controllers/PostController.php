<?php

namespace app\controllers;
use app\models\Post;

class PostController
{
    public function getPosts() {
        $params = [
            'title' => $_GET['title'] ?: null,
        ];
        $userModel = new Post();
        $users = $userModel->getAllUsersByName($params);
        header("Content-Type: application/json");
        echo json_encode($posts);
        exit();
    }

    public function savePost() {
        $title = $_POST['title'] ?: null;
        $id = $_POST['id'] ?: null;
        $errors = [];

        if ($title) {
            $title = htmlspecialchars($title);


            if (strlen($title) < 2) {
                $errors['title'] = 'title is too short';
            }
        } else {
            $errors['title'] = 'title is required';
        }

        //numbers
        if ($age) {
            if ($age < 0 || $age > 120 || !intval($age)) {
                $errors['id'] = 'id is invalid';
            }
        } else {
            $errors['id'] = 'id is required';
        }

        if ($email) {
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            if (!preg_match($regex, $email)) {
                $errors['email'] = 'email is invalid';
            }
        } else {
            $errors['email'] = 'email is required';
        }

        //if we have errors
        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }

        $returnData = [
            'title' => $title,
            'id' => $id,
        ];
        echo json_encode($returnData);
        exit();

    }

}
