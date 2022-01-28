<?php 

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/Laptop.php';

// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
// Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
// Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente.

$iphone = new Smartphone('Apple iPhone 13', 1299, 'Electronic', 5.8, 8);
$iphone->delivery_time = '20 days';
var_dump($iphone);

$lenovo = new Laptop('Lenovo', 999, 'Electronic', 'Intel Core i7', 16);
$lenovo->delivery_time = '14 days';
var_dump($lenovo);
?>