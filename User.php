<?php 

class User {
    
    public $name;

    public $lastname;

    public $email;

    // Setto la variabile 'cart' protected cosi non rischio che da fuori vengano passati e inseriti valori errati
    // In questo modo rendo la variabile visibile sono nella classe padre e in quelle figlie (che estendono User)
    protected $cart = [];

    public function __construct($_name, $_lastname, $_email) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
    }

    // Metodo che ritorna nome e cognome completi dell'utente
    public function getUserFullName() {
        return $this->name . ' ' . $this->lastname;
    }


    // Metodo per aggiungere un prodotto al carrello dell'utente
    public function addItem($item) {
        $this->cart[] = $item;
    }


    // Metodo che restituisce il carrello con i prodotti aggiunti dall'utente
    public function getCart() {
        return $this->cart;
    }
    
}
?>