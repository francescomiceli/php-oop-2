<?php

class Product{
    public $price;
    public $code;
    public $repart;

    function __construct($_price,$_code,$_reparto){
    $this-> price = $_price;
    $this-> code = $_code;
    $this-> repart = $_reparto;
 }
}


?>