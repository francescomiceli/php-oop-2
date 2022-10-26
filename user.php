<?php

class User{
    public $name;
    public $surname;
    protected $register;
    protected $credit_card;
    protected $expire_date;
    protected $discount;
    public $cart_shop = [];

    function __construct($_name,$_surname,$_register,$_credit_card,$_expire_date){
        $this-> name =$_name;
        $this-> surname =$_surname;
        $this-> register = $_register;
        $this-> credit_card =$_credit_card;
        $this-> expire_date =$_expire_date;
        $this-> checkRegister();

    }

    protected function checkRegister(){
        if($this->register === true && $this->expire_date >= 2022){
            $this-> discount = '20%';
        }else{
            echo 'Not discount applied';
        }
    }

    function AddToCart($carrello){
        $this-> cart_shop = $carrello;
    }




}



?>