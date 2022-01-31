<?php 

require_once __DIR__ . '/Product.php';

class Laptop extends Product {

    public $processor;

    public $video_card;

    public function __construct($_name, $_price, $_category, $_processor, $_video_card) {
        parent::__construct($_name, $_price, $_category);
        $this->processor = $_processor;
        
        if(is_string($_video_card)) {
            $this->video_card = $_video_card;
        } else {
            throw new Exception ('$_video_card deve essere una stringa');
        }
    }
}
?>