<?php

/*ইনহেরিটেন্স কি? (What is Inheritance?):

ইনহেরিটেন্স হল একটি ক্লাসের প্রোপার্টি এবং মেথড অন্য একটি ক্লাসে ব্যবহার করার প্রক্রিয়া। এটি কোড রিইউজেবিলিটি (Code Reusability) বাড়ায় এবং কোডের ডুপ্লিকেশন কমায়।

    - প্যারেন্ট ক্লাস (Parent Class): যে ক্লাসের প্রোপার্টি এবং মেথড ইনহেরিট করা হয়।

    - চাইল্ড ক্লাস (Child Class): যে ক্লাস প্যারেন্ট ক্লাসের প্রোপার্টি এবং মেথড ইনহেরিট করে।

ইনহেরিটেন্সের সিনট্যাক্স (Syntax of Inheritance):
    PHP-তে ইনহেরিটেন্স ইমপ্লিমেন্ট করতে extends কীওয়ার্ড ব্যবহার করা হয়।

    class ParentClass {
        // Properties and Methods
    }

    class ChildClass extends ParentClass {
        // ChildClass can use properties and methods of ParentClass
*/
class Animal{
    public $name;

    function __construct($name)
    {
        $this->name=$name;
    }
    public function makeSound(){
        return "Some generic sound";
    }
}

class Dog extends Animal{
    public function makeSound()
    {
        return "Woof! Woof!";
    }
}

Class Cat extends Animal{
    public function makeSound()
    {
        return "Meow! Meow!";
    }
}

$dog= new Dog("Buddy");
echo $dog->name. " Says: ". $dog->makeSound().PHP_EOL;

$cat=new Cat("Whiskers");
echo $cat->name. " Says: ". $cat->makeSound();


/*

ব্যাখ্যা:

    Animal ক্লাস হল প্যারেন্ট ক্লাস। এটিতে একটি প্রোপার্টি ($name) এবং একটি মেথড (makeSound) আছে।

    Dog এবং Cat ক্লাস হল চাইল্ড ক্লাস। তারা Animal ক্লাসকে ইনহেরিট করে এবং makeSound মেথডকে ওভাররাইড করে নিজেদের সাউন্ড রিটার্ন করে।

    Dog এবং Cat ক্লাসের অবজেক্ট তৈরি করে তাদের সাউন্ড প্রিন্ট করা হয়েছে।

*/


echo "\n*************************************\n";


/*

মেথড ওভাররাইডিং (Method Overriding)
চাইল্ড ক্লাসে প্যারেন্ট ক্লাসের মেথডকে রিডিফাইন করা যায়। একে মেথড ওভাররাইডিং বলে। উপরের উদাহরণে Dog এবং Cat ক্লাসে makeSound মেথড ওভাররাইড করা হয়েছে।

*/


/*

parent কীওয়ার্ড ব্যবহার (Using parent Keyword)
চাইল্ড ক্লাসে প্যারেন্ট ক্লাসের মেথড অ্যাক্সেস করতে parent কীওয়ার্ড ব্যবহার করা হয়।

*/

class Vehicle {
    public function makeSound() {
        return "Some vehicle sound";
    }
}

class Car extends Vehicle {
    public function makeSound() {
        $parentSound = parent::makeSound(); // প্যারেন্ট ক্লাসের মেথড কল
        return $parentSound . " Peep! Peep!";
    }
}

$car = new Car();
echo $car->makeSound(); // Output: Some vehicle sound Peep! Peep!

/*

প্রোটেক্টেড মেথড এবং প্রোপার্টি (Protected Methods and Properties)
protected ভিজিবিলিটি ব্যবহার করে প্যারেন্ট ক্লাসের প্রোপার্টি এবং মেথড শুধুমাত্র চাইল্ড ক্লাসে অ্যাক্সেস করা যায়।

*/

echo "\n*************************************\n";

class Bike {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    protected function getName() {
        return $this->name;
    }
}

class Skotty extends Bike {
    public function makeSound() {
        return $this->getName() . "Boom Boom!"; // প্রোটেক্টেড মেথড অ্যাক্সেস
    }
}

$bike = new Skotty("Honda ");
echo $bike->makeSound(); 

/*

ইনহেরিটেন্সের সুবিধা (Advantages of Inheritance):

    - কোড রিইউজেবিলিটি: একই কোড বারবার লিখতে হয় না।

    - কোড অর্গানাইজেশন: কোডকে লজিক্যাল ভাগে ভাগ করা যায়।

    - এক্সটেনসিবিলিটি: নতুন ফিচার যোগ করা সহজ হয়।

ইনহেরিটেন্সের সীমাবদ্ধতা (Limitations of Inheritance:

    - ক্লাস হায়ারার্কি জটিলতা: অনেক লেভেলের ইনহেরিটেন্স কোডকে জটিল করে তুলতে পারে।

    - টাইট কাপলিং: চাইল্ড ক্লাস প্যারেন্ট ক্লাসের উপর নির্ভরশীল হয়।

*/