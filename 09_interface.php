<?php 
/*
    ইন্টারফেস কি?

        ইন্টারফেস হল একটি ব্লুপ্রিন্ট বা টেমপ্লেট যা নির্দিষ্ট করে দেয় একটি ক্লাসে কোন মেথডগুলি থাকতে হবে। 
        ইন্টারফেস শুধু মেথডের সিগনেচার (নাম এবং প্যারামিটার) নির্দেশ করে, কিন্তু মেথডের বডি (কোড) থাকে না। 
        একটি ক্লাস একাধিক ইন্টারফেস ইমপ্লিমেন্ট করতে পারে।

    কেন ইন্টারফেস ব্যবহার করব?

        -  কোডের কনসিসটেন্সি বজায় রাখা।

        -  একাধিক ক্লাসে একই মেথড স্ট্রাকচার বজায় রাখা।

        -  পলিমরফিজম (Polymorphism) ইমপ্লিমেন্ট করা।
*/

// একটি ইন্টারফেস ডিফাইন করা

interface Animal {
    public function makeSound();
}

// ক্লাস যা ইন্টারফেস ইমপ্লিমেন্ট করে
class Dog implements Animal {
    public function makeSound() {
        echo "Bark Bark!";
    }
}

class Cat implements Animal {
    public function makeSound() {
        echo "Meow Meow!";
    }
}


$dog = new Dog();
$dog->makeSound(); 

$cat = new Cat();
$cat->makeSound(); 