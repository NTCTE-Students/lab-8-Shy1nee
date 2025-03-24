<?php

class Material {
    public $title;
    public $author;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getInfo() {
        return "{$this->title} by {$this->author}";
    }
}

class Book extends Material {
    public $pages;

    public function __construct($title, $author, $pages) {
        parent::__construct($title, $author);
        $this->pages = $pages;
    }

    public function getBookInfo() {
        return $this->getInfo() . " - Pages: {$this->pages}";
    }
}

class Article extends Material {
    public function getArticleInfo() {
        return $this->getInfo();
    }
}

class Video extends Material {
    public $duration;

    public function __construct($title, $author, $duration) {
        parent::__construct($title, $author);
        $this->duration = $duration;
    }

    public function getVideoInfo() {
        return $this->getInfo() . " - Duration: {$this->duration} minutes";
    }
}

// Пример создания объектов
$book = new Book("PHP for Beginners", "John Doe", 300);
$article = new Article("How to Learn PHP", "Jane Smith");
$video = new Video("PHP Tutorial", "Alice", 45);

echo $book->getBookInfo() . "<br>";
echo $article->getArticleInfo() . "<br>";
echo $video->getVideoInfo() . "<br>";

