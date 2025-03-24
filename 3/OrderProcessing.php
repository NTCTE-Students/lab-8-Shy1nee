<?php

// Базовый класс для всех заказов
abstract class Order {
    abstract public function calculateTotal();
}

// Класс для обработки онлайн заказов
class OnlineOrder extends Order {
    public function calculateTotal() {
        echo "Обработка онлайн заказа с учетом скидки и налога.<br>";
    }
}

// Класс для обработки заказов в магазине
class StoreOrder extends Order {
    public function calculateTotal() {
        echo "Обработка заказа в магазине с учетом налога.<br>";
    }
}

// Класс для обработки заказов по телефону
class TelephoneOrder extends Order {
    public function calculateTotal() {
        echo "Обработка заказа по телефону с учетом скидки.<br>";
    }
}

// Тестирование
$onlineOrder = new OnlineOrder();
$storeOrder = new StoreOrder();
$telephoneOrder = new TelephoneOrder();

$onlineOrder->calculateTotal();
$storeOrder->calculateTotal();
$telephoneOrder->calculateTotal();
