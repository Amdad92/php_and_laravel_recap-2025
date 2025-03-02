<?php
/*
    ট্রেইটস কি?

        ট্রেইটস হল একধরনের কোড ব্লক যা একাধিক ক্লাসে রিইউজ করা যায়। ট্রেইটস ব্যবহার করে আমরা মাল্টিপল ইনহেরিটেন্সের সমস্যা এড়াতে পারি। 
        PHP তে একটি ক্লাস শুধু একটি ক্লাসই এক্সটেন্ড করতে পারে, কিন্তু একাধিক ট্রেইটস ব্যবহার করতে পারে।
    
    কেন ট্রেইটস ব্যবহার করব?

        - কোড রিইউজেবিলিটি বাড়ানো।

        - মাল্টিপল ইনহেরিটেন্সের সমস্যা সমাধান করা।

        - কোডকে মডুলার এবং সংগঠিত রাখা।
*/
trait Greeting {
    public function sayHello() {
        echo "Hello, World!\n";
    }
}
trait Farewell {
    public function sayGoodbye() {
        echo "Goodbye, World!\n";
    }
}
trait Introduce{
    public function intro(){
        echo "My name is Amdadul Islam, I am a learner.\n";
    }
}
class MyClass {
    use Greeting, Farewell, Introduce;
}
$obj = new MyClass();
$obj->sayHello(); 
$obj->sayGoodbye();
$obj->intro();