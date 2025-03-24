<?php
// Trait Logger для логирования действий
trait Logger {
    public function log($message) {
        // Логирование сообщения (можно дополнительно выводить в файл или базу данных)
        echo "Лог: {$message}<br>";
    }
}

// Класс User, использующий Logger
class User {
    use Logger;

    public function createUser($name) {
        // Логика создания пользователя
        $this->log("Пользователь {$name} создан.");
    }

    public function updateUser($name) {
        // Логика обновления пользователя
        $this->log("Пользователь {$name} обновлен.");
    }
}

// Класс Order, использующий Logger
class Order {
    use Logger;

    public function createOrder($orderId) {
        // Логика создания заказа
        $this->log("Заказ с ID {$orderId} создан.");
    }

    public function updateOrder($orderId) {
        // Логика обновления заказа
        $this->log("Заказ с ID {$orderId} обновлен.");
    }
}

// Класс Product, использующий Logger
class Product {
    use Logger;

    public function createProduct($productName) {
        // Логика создания продукта
        $this->log("Продукт {$productName} создан.");
    }

    public function updateProduct($productName) {
        // Логика обновления продукта
        $this->log("Продукт {$productName} обновлен.");
    }
}

// Пример использования
$user = new User();
$user->createUser("John Doe");
$user->updateUser("John Doe");

$order = new Order();
$order->createOrder(12345);
$order->updateOrder(12345);

$product = new Product();
$product->createProduct("Laptop");
$product->updateProduct("Laptop");
