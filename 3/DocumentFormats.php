<?php

// Базовый класс для всех документов
abstract class Document {
    abstract public function save();
}

// Класс для сохранения PDF документа
class PDFDocument extends Document {
    public function save() {
        echo "Сохранение в формате PDF.<br>";
    }
}

// Класс для сохранения Word документа
class WordDocument extends Document {
    public function save() {
        echo "Сохранение в формате Word.<br>";
    }
}

// Класс для сохранения Excel документа
class ExcelDocument extends Document {
    public function save() {
        echo "Сохранение в формате Excel.<br>";
    }
}

// Тестирование
$pdf = new PDFDocument();
$word = new WordDocument();
$excel = new ExcelDocument();

$pdf->save();
$word->save();
$excel->save();
