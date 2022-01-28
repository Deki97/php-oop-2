<?php 

require_once __DIR__ . '/Product.php';

class Laptop extends Product {
    public $processor;

    public $video_card;

    public function __construct($_name, $_price, $_category, $_processor, $_video_card) {
        parent::__construct($_name, $_price, $_category);
        $this->processor = $_processor;
        $this->video_card = $_video_card;
    }
}
?>