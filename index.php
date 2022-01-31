<?php 

// require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/Laptop.php';
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/User.php';

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente.

// Oggi pomeriggio aggiungete un trait ed una exception (con relativa gestione) all'esercizio di venerdì.


// Creo un istanza della classe Smartphone
$iphone = new Smartphone('Apple iPhone 13', 1299, 'Electronic', 5.8, 8);
$iphone->delivery_time = '20 days';
// var_dump($iphone);


// Creo un istanza della classe Laptop
$lenovo = new Laptop('Lenovo', 999, 'Electronic', 'Intel Core i7', 'Intel Iris Xe');
$lenovo->delivery_time = '14 days';
// var_dump($lenovo);


// Creo un istanza della classe Book
$greenlights = new Book('Greenlights', 19.99, 'Books', 'Autobiography', 'Matthew McConaughey');
$greenlights->delivery_time = '5 days';
$greenlights->number_of_pages = 320;
// var_dump($greenlights);


// Creo un istanza della classe User
$dejan = new User('Dejan', 'Nikolic', 'dejan97@libero.it');
$dejan->addItem($iphone);
$dejan->addItem($lenovo);
$dejan->addItem($greenlights);
// var_dump($dejan);


// Creo una variabile che contiene il mio array di oggetti aggiunti al carrello in modo che poi tramite un ciclo foreach nell'html
// posso andare a stampare tutti gli elementi in pagina
$dejan_cart = $dejan->getCart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Shop Online</title>
</head>
<body>
    <div class="container">
    <h1>Cart of user <?php echo $dejan->getUserFullName(); ?></h1>

        <?php foreach($dejan_cart as $single_product) { ?>
            <div class="single-item">
                <div>Product name: <?php echo $single_product->name; ?></div>
                <div>Price: <?php echo $single_product->price ?></div>
                <div>Category: <?php echo $single_product->category; ?></div>
                <div>Expected delivery time: <?php echo $single_product->delivery_time; ?></div>


                <!-- Caratteristiche aggiuntive Smartphone -->
                <?php if(isset($single_product->screen_size)) { ?>
                    <div>Screen size: <?php echo $single_product->screen_size; ?></div>
                <?php } ?>

                <?php if(isset($single_product->ram)) { ?>
                    <div>Ram: <?php echo $single_product->ram; ?></div>
                <?php } ?>
                

                <!-- Caratteristiche aggiuntive Laptop -->
                <?php if(isset($single_product->processor)) { ?>
                    <div>Processor: <?php echo $single_product->processor; ?></div>
                <?php } ?>
                <?php if(isset($single_product->video_card)) { ?>
                    <div>Video Card: <?php echo $single_product->video_card; ?></div>
                <?php } ?>


                <!-- Caratteristiche aggiuntive Book -->
                <?php if(isset($single_product->number_of_pages)) { ?>
                    <div>Number of pages: <?php echo $single_product->number_of_pages; ?></div>
                <?php } ?>
                <?php if(isset($single_product->genre)) { ?>
                    <div>Genre: <?php echo $single_product->genre; ?></div>
                <?php } ?>
                <?php if(isset($single_product->author)) { ?>
                    <div>Author: <?php echo $single_product->author; ?></div>
                <?php } ?>
            </div>
        <?php } ?>

        <h2>Proceed to purchase -></h2>
    </div>
</body>
</html>