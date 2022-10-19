<?php
class fund{
    private $fund;
    function __construct($initialFund){
        $this->fund = $initialFund;
    }
   
    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }
    
    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
$ourFund -> getTotal();
$ourFund -> addFund(10);
$ourFund -> deductFund(5);
$ourFund -> getTotal();