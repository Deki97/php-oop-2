<?php 

require_once __DIR__ . '/Product.php';

class Smartphone extends Product {
    public $screen_size;

    public $ram;

    public function __construct($_name, $_price, $_category, $_screen_size, $_ram) {
        parent::__construct($_name, $_price, $_category);
        $this->screen_size = $_screen_size;
        $this->ram = $_ram;
    }
}
?>