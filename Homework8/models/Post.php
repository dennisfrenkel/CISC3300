<?php

namespace app\models;

class Post {
    public function getAllPostsByTitle($params) {

        $allPosts = [
            [
                'id' => '1',
                'title' => 'Dennis'
            ],
            [
                'id' => '2',
                'title' => 'Julia'
            ],
            [
                'id' => '3',
                'title' => 'Alex'
            ],
        ];

        if (!empty($params['name'])) {
            return array_filter($allPosts, function ($post) use ($params) {
                if ($user['title'] === $params['title']) {
                    return $user;
                };
                return null;
            });
        }

        return $allPosts;
    }

    public function savePosts() {
    }
}
