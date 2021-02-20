<?php

include "Telephone.class.php";
class PushButtonTelephone extends Telephone{
    public $button;
    function __construct($title, $price, $button)
    {
        parent::__construct($title, $price);
        $this->button = $button;
    }

    function show(){
        echo $this->title." имеет кнопок ".$this->button."<br>";
        parent::show();
    }
}

$pbt1 = new PushButtonTelephone("Sony",700,12);
$pbt1->show();
$pbt2 = new PushButtonTelephone("Nokia",600,14);
$pbt2->show();