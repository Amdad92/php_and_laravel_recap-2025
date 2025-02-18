<?php 
class Fruit{
    // Property
    public $name;
    public $color;
    public $price;

    //method
    function set_name($name){
        $this->name=$name;
    }
 
    function get_name(){
        return $this->name;
    }
}
$orange= new Fruit();
$banana= new Fruit();
$orange->set_name('Orange');
$banana->set_name('Banana');
echo $orange->get_name();
echo "<br>";
echo $banana->get_name();