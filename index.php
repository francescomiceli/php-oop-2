<?php

require_once __DIR__ . '/user.php';
require_once __DIR__ . '/caratteristiche_comuni.php';
require_once __DIR__ . '/giochi.php';
require_once __DIR__ . '/cibo.php';
require_once __DIR__ . '/cucce.php';

$utente = new User ('Marco','Rossi',true,'64654',2023);

echo "<pre>";
var_dump($utente);
echo "</pre>";

$dog_bed = new Toys('Plastica','2020','30 €',00002345,'Giochi');
echo "<pre>";
var_dump($dog_bed);
echo "</pre>";

$utente-> AddToCart($dog_bed);

echo "<pre>";
var_dump($utente);
echo "</pre>";

$utente->chechRegister();

?>