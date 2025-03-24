<?php

// Класс для управления сессиями
class SessionManager {
    // Стартуем сессию в конструкторе
    public function __construct() {
        session_start();
    }

    // Метод для установки данных в сессию
    public function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    // Метод для получения данных из сессии
    public function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Метод для проверки, существует ли сессия с данным ключом
    public function has($key) {
        return isset($_SESSION[$key]);
    }

    // Метод для удаления данных из сессии
    public function remove($key) {
        unset($_SESSION[$key]);
    }

    // Метод для очистки всех данных из сессии
    public function clear() {
        session_unset();
        session_destroy();
    }
}

// Тестирование
$session = new SessionManager();

// Установка данных в сессию
$session->set('username', 'john_doe');
$session->set('role', 'admin');

// Получение данных из сессии
echo "Username: " . $session->get('username') . "<br>";
echo "Role: " . $session->get('role') . "<br>";

// Проверка наличия данных
if ($session->has('username')) {
    echo "Username is set in session.<br>";
}

// Удаление данных из сессии
$session->remove('role');

// Очистка всей сессии
$session->clear();
