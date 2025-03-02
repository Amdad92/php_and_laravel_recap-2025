<?php 

class Fund{
    private $fund;
    function __construct($initialFund=0){
        $this->fund=$initialFund;
    }
    public function addFund($money){
        $this->fund +=$money;
    }
    public function deductFund($money){
        $this->fund -=$money;
    }
    public function getTotal(){
        echo "Total fund is {$this->fund}TK\n";
    }
}
$myFund= new Fund(500);
//$myFund->fund=75;
$myFund->addFund(100);
$myFund->deductFund(45);
$myFund->getTotal();

//ক্লাসের যেসব প্রোপারটি বাইরে থেকে এক্সেস করার দরকার নাই সেগুলো private রাখা বেস্ট।