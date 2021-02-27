<?php

abstract class Product { 
    
    const PROFIT_PERCENT = 10; 
    
    abstract public function totalCost(); 
    
    abstract public function profitCalc();  
} 


class ProductDigital extends Product {
    
    const PRICE = 100;	
    private $amount;

    public function __construct($amount)
    {
        self::setAmount($amount);
    }
    
    public function getPrice() {
        return PRICE;
    }
    
    public function getAmount() {
        return $this->amount;
    }
    
    public function setAmount($amount=0)
    {
        $this->amount = $amount;
    }
    
    public function totalCost()
    {
        return self::PRICE * $this->amount;
    }

    public function profitCalc()
    {
        return  $this->totalCost() / 100 * parent::PROFIT_PERCENT;
    }

}


class ProductReal extends ProductDigital {
    
    public function getPrice() {
        return parent::PRICE * 2;
    }
    
    public function totalCost()
    {
        return $this->getPrice() * parent::getAmount();
    }
    
    public function profitCalc()
    {
        return $this->getPrice() * parent::getAmount() / 100 * parent::PROFIT_PERCENT;
    }

}


class ProductWeight extends Product {
    
    private $price;
    private $wieght;
    
    public function __construct($price, $wieght)
    {
        self::setPrice($price);
        self::setWieght($wieght);
    }
    
    public function setPrice($price=0)
    {
        $this->price = $price;
    }
    
    public function setWieght($wieght=0)
    {
        $this->wieght = $wieght;
    }
    
    public function totalCost()
    {
        return $this->price * $this->wieght;
    }
    
    public function profitCalc()
    {
        return $this->price * $this->wieght / 100 * parent::PROFIT_PERCENT;
    }
}


$obj_digital = new ProductDigital(3);
echo $obj_digital->profitCalc();

$obj_real = new ProductReal(3);
echo $obj_real->profitCalc();

$obj_weight = new ProductWeight(3, 300);
echo $obj_weight->profitCalc();

?>