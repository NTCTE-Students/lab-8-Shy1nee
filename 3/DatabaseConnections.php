<?php

// Интерфейс для работы с базами данных
interface Database {
    public function connect();
    public function query($sql);
}

// Класс для подключения и работы с MySQL базой данных
class MySQLDatabase implements Database {
    public function connect() {
        echo "Подключение к MySQL базе данных.<br>";
    }
    
    public function query($sql) {
        echo "Выполнение SQL запроса в MySQL: {$sql}<br>";
    }
}

// Класс для подключения и работы с PostgreSQL базой данных
class PostgreSQLDatabase implements Database {
    public function connect() {
        echo "Подключение к PostgreSQL базе данных.<br>";
    }
    
    public function query($sql) {
        echo "Выполнение SQL запроса в PostgreSQL: {$sql}<br>";
    }
}

// Класс для подключения и работы с SQLite базой данных
class SQLiteDatabase implements Database {
    public function connect() {
        echo "Подключение к SQLite базе данных.<br>";
    }
    
    public function query($sql) {
        echo "Выполнение SQL запроса в SQLite: {$sql}<br>";
    }
}

// Тестирование
$mysqlDb = new MySQLDatabase();
$pgsqlDb = new PostgreSQLDatabase();
$sqliteDb = new SQLiteDatabase();

$mysqlDb->connect();
$mysqlDb->query("SELECT * FROM users");

$pgsqlDb->connect();
$pgsqlDb->query("SELECT * FROM products");

$sqliteDb->connect();
$sqliteDb->query("SELECT * FROM orders");
