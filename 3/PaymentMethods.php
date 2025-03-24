<?php

// Базовый класс для всех типов платежей
abstract class Payment {
    abstract public function process();
}

// Класс для обработки платежей через кредитную карту
class CreditCardPayment extends Payment {
    public function process() {
        echo "Обработка платежа через кредитную карту.<br>";
    }
}

// Класс для обработки платежей через PayPal
class PayPalPayment extends Payment {
    public function process() {
        echo "Обработка платежа через PayPal.<br>";
    }
}

// Класс для обработки платежей через банковский перевод
class BankTransferPayment extends Payment {
    public function process() {
        echo "Обработка платежа через банковский перевод.<br>";
    }
}

// Тестирование
$payment1 = new CreditCardPayment();
$payment2 = new PayPalPayment();
$payment3 = new BankTransferPayment();

$payment1->process();
$payment2->process();
$payment3->process();
