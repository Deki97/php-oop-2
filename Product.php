<?php 

require_once __DIR__ . '/PurchasedProductDetails.php';

class Product {

    // Tramite la keyword 'use' importo la trait, in modo che ora la classe Product includerà le caratteristiche della classe PurchasedProductDetails,
    // e in questo modo automaticamente le classi figlie che estendono la classe Product erediteranno le medesime caratteristiche
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