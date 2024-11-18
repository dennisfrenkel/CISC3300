<?php
class UserModel {
    public function getAllUsers() {
        return [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com'],
            ['id' => 3, 'name' => 'John Smith', 'email' => 'johns@example.com']
        ];
    }
}
?>
