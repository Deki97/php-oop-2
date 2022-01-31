<?php 

require_once __DIR__ . '/PurchasedProductDetails.php';

class Product {

    use PurchasedProductDetails;
    
    public $name;

    public $price;

    public $category;

    public $delivery_time;

    public function __construct($_name, $_price, $_category) {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
    }
}
?>