<?php 

require_once __DIR__ . '/Product.php';

class Book extends Product {
    
    public $number_of_pages;

    public $genre;

    public $author;

    public function __construct($_name, $_price, $_category, $_genre, $_author) {
        parent::__construct($_name, $_price, $_category);
        $this->genre = $_genre;
        $this->author = $_author;
    }
}
?>