<?php 

class Product {
    public $name;

    public $price;

    public $category;

    public $delivery_time;

    public function __construct($_name, $_price, $_category, $_delivery_time) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->delivery_time = $_delivery_time;
    }
}
?>