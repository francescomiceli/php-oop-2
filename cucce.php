<?php

require_once __DIR__ . '/caratteristiche_comuni.php';

class Dog_bed extends Product{   /* Con extend importa proprietà contenute in caratteristiche_comuni dentro calsse "Product"*/
    public $height;
    public $size;

    /* Proprietà cucce*/
    function __construct($_height,$_size,$_price, $_code, $_repart){
     /* Proprietà construct esportate da caratteristiche_comuni*/
    parent::__construct($_price, $_code, $_repart);
     /* Construct cucce*/
    $this-> height = $_height;
    $this-> size = $_size;
 }
}



?>