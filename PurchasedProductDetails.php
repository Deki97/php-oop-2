<?php 

trait PurchasedProductDetails {
    
    public $order_number;

    // Passo una stringa fissa alla variabile dal momento che suppongo di utilizzare lo stesso indirizzo di spedizione per tutti i prodotti
    public $shipping_address = 'Via Giuseppe Verdi, 12, Malo, 36034, Italia';

    public $courier;
}

?>