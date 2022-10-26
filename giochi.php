<?php

require_once __DIR__ . '/caratteristiche_comuni.php';

class Toys extends Product{
    public $material;
    public $age;

    function __construct($_material,$_age,$_price, $_code, $_reparto){
    parent::__construct($_price, $_code, $_reparto);
    $this-> material = $_material;
    $this-> age = $_age;
 }
}


?>