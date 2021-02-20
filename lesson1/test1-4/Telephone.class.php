<?php
 
class Telephone {
    public $title;
    public $price;
    
    function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }
    function show() {
        echo $this->title." стоит ".$this->price."<hr>";
    }
}

$telephone1 = new Telephone("Xiaomi", 1000);
$telephone2 = new Telephone("Samsung", 2000);
$telephone3 = new Telephone("iPhone", 3000);

$telephones = [$telephone1, $telephone2, $telephone3];
foreach ($telephones as $telephone) {
    $telephone -> show();
}
