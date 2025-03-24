<?php
// Trait для авторизации
trait Authenticatable {
    private $username;
    private $password;
    
    public function login($username, $password) {
        // Простой пример аутентификации (в реальных системах может быть проверка пароля в базе данных)
        $this->username = $username;
        $this->password = $password;
        echo "Пользователь {$username} вошел в систему.<br>";
    }

    public function logout() {
        $this->username = null;
        $this->password = null;
        echo "Пользователь вышел из системы.<br>";
    }
}

// Класс User с Trait для авторизации
class User {
    use Authenticatable;

    // Дополнительные методы могут быть добавлены здесь, например для получения данных о пользователе
}

// Пример использования
$user = new User();
$user->login("john_doe", "securepassword");
$user->logout();

