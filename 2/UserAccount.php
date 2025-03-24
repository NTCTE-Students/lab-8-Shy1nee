<?php

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->setPassword($password);
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function checkPassword($password) {
        return password_verify($password, $this->password);
    }
}

// Пример использования
$user = new User("john_doe", "securepassword");
echo $user->checkPassword("securepassword") ? "Password is correct" : "Password is incorrect";
