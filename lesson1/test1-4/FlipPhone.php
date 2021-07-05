<?php

include "Telephone.class.php";
class FlipPhone extends Telephone{
    public $button;
    public $touchscreen;
    function __construct($title, $price, $button, $touchscreen)
    {
        parent::__construct($title, $price);
        $this->button = $button;
        $this->button = $touchscreen;
    }

    function show(){
        echo $this->title." имеет кнопок ".$this->button." и ".$this->touchscreen."<br>";
        parent::show();
    }
}

$fp = new FlipPhone("Sony-Ericsson",900,12,1);
$fp->show();