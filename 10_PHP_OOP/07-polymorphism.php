<?php
/*

পলিমরফিজম কী?

পলিমরফিজম হলো অবজেক্ট ওরিয়েন্টেড প্রোগ্রামিং (OOP) এর একটি মূলনীতি, যার অর্থ "একাধিক রূপ"। 
এটি একটি ক্লাসের মেথডকে অন্য ক্লাসে ভিন্নভাবে ইম্পলিমেন্ট করার ক্ষমতা দেয়। সহজ ভাষায়, 
একই মেথডের নাম ব্যবহার করে ভিন্ন ভিন্ন কাজ করা যায়।

PHP-তে পলিমরফিজম প্রধানত দুইভাবে বাস্তবায়ন করা যায়:

- ইনহেরিটেন্সের মাধ্যমে মেথড ওভাররাইডিং (Runtime Polymorphism)

- ইন্টারফেস ব্যবহার করে (Interface Polymorphism)

*/

//ইনহেরিটেন্সের মাধ্যমে মেথড ওভাররাইডিং

class Animal {
    public function sound() {
        return "কোনো আওয়াজ নেই!";
    }
}

class Dog extends Animal {
    public function sound() { // প্যারেন্ট ক্লাসের মেথড ওভাররাইড
        return "ঘেউ ঘেউ!";
    }
}

class Cat extends Animal {
    public function sound() { // প্যারেন্ট ক্লাসের মেথড ওভাররাইড
        return "মিউ মিউ!";
    }
}

$dog = new Dog();
echo $dog->sound().PHP_EOL; 

$cat = new Cat();
echo $cat->sound();

echo "\n*************************\n";

/*

ইন্টারফেস ব্যবহার করে পলিমরফিজম:

    ইন্টারফেস হলো একটি কন্ট্র্যাক্ট (চুক্তি) যেখানে সকল মেথডকে ইম্পলিমেন্ট করতে হয়।

*/
interface Shape {
    public function area(); // ইন্টারফেসে মেথডের শুধু সিগনেচার
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() { // ইন্টারফেস মেথড ইম্পলিমেন্ট
        return 3.1416 * $this->radius * $this->radius;
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() { // ইন্টারফেস মেথড ইম্পলিমেন্ট
        return $this->side * $this->side;
    }
}
$circle = new Circle(5);
echo $circle->area().PHP_EOL; 

$square = new Square(4);
echo $square->area(); 

/*
ব্যাখ্যা:

    - Shape ইন্টারফেসে area() মেথডের সিগনেচার দেওয়া আছে।

    - প্রতিটি ক্লাস (Circle, Square) নিজের হিসাব অনুযায়ী area() ইম্পলিমেন্ট করেছে।

    - একই মেথড নাম, কিন্তু ভিন্ন কাজ!

*/

/*
পলিমরফিজমের সুবিধা:

    - কোড রিইউজেবিলিটি: একই মেথড নাম দিয়ে ভিন্ন কাজ করা যায়।

    - ফ্লেক্সিবিলিটি: নতুন ক্লাস যোগ করা সহজ (যেমন নতুন Shape যোগ)।

    - ক্লিন কোড: লজিক আলাদা থাকে, কোড সংগঠিত হয়।


*/