<?php  
/*
    PHP Destructor: PHP Destructor method is used to destroy objects or release their acquired memory. 
    A destructor is called automatically when the object is created. Usually, it is called at end of the script. 

    __destruct() method does not take any parameter.
    __destruct() method will not have any return type.
    __This method works exactly the opposite of the __construct method in PHP.
    __destruct gets called automatically at the end of the script.
    __destruct() method starts with two underscores (__).
    __It is used to de-initialize existing objects.  
*/
 
class Fruit {
    public $name;
    public $color;
  
    function __construct($name) {
      $this->name = $name; 
    }
    function __destruct() {
      echo "The fruit is {$this->name}."; 
    }
  }
  
  $apple = new Fruit("Apple");
