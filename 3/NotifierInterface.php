<?php

// Интерфейс для отправки уведомлений
interface Notifier {
    public function send($message);
}

// Класс для отправки email уведомлений
class EmailNotifier implements Notifier {
    public function send($message) {
        echo "Отправка email: {$message}<br>";
    }
}

// Класс для отправки SMS уведомлений
class SMSNotifier implements Notifier {
    public function send($message) {
        echo "Отправка SMS: {$message}<br>";
    }
}

// Класс для отправки push уведомлений
class PushNotifier implements Notifier {
    public function send($message) {
        echo "Отправка Push уведомления: {$message}<br>";
    }
}

// Тестирование
$emailNotifier = new EmailNotifier();
$smsNotifier = new SMSNotifier();
$pushNotifier = new PushNotifier();

$emailNotifier->send("Здравствуйте, у вас новое сообщение!");
$smsNotifier->send("Уведомление: новый заказ поступил.");
$pushNotifier->send("Привет! У вас новое уведомление.");
