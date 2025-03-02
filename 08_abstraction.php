<?php 
/*

Abstraction হল একটি প্রক্রিয়া যেখানে class-এর ভিতরে কিছু মেথড তৈরি করা হয়, তবে সেগুলোর implementation subclass-এ দেওয়া হয়। অর্থাৎ, কী করতে হবে তা নির্ধারিত থাকে, কিন্তু কীভাবে করতে হবে তা subclass-এ নির্ধারিত হয়।

    - এবস্ট্রাক্ট ক্লাস তৈরি করা হয় abstract কীওয়ার্ড দিয়ে।

    - এটি সরাসরি অবজেক্ট তৈরি করতে পারে না।

    - এটি এক বা একাধিক এবস্ট্রাক্ট মেথড ধারণ করতে পারে (মেথডের বডি নেই)।

    - এবস্ট্রাক্ট ক্লাসের সাধারণ মেথডও থাকতে পারে (কনক্রিট মেথড)।

নিয়ম:

    - এবস্ট্রাক্ট মেথড চাইল্ড ক্লাসে অবশ্যই ইমপ্লিমেন্ট করতে হবে।

    - এবস্ট্রাক্ট মেথডের ভিসিবিলিটি (যেমন public) চাইল্ড ক্লাসেও একই থাকতে হবে।


এবস্ট্রাকশনের সুবিধা:

    - জটিলতা লুকানো: ইউজার শুধু ইন্টারফেস জানে, ভিতরের লজিক না।

    - কোড রিইউজেবিলিটি: কমন ফিচার এবস্ট্রাক্ট ক্লাসে লিখে চাইল্ড ক্লাসে ব্যবহার।

    - ইনহেরিট্যান্স নিয়ন্ত্রণ: চাইল্ড ক্লাসে নির্দিষ্ট মেথড ইমপ্লিমেন্ট বাধ্যতামূলক করা।

সিনট্যাক্স:

abstract class ClassName {
    এবস্ট্রাক্ট মেথড
    abstract public function methodName();

    সাধারণ মেথড
    public function regularMethod() {
        কোড
    }
}

*/
abstract class Vehicle{
    abstract public function start();
    public function stop(){
        echo "Stop Engine\n";
    }
}
class Car extends Vehicle{
    public function start(){
        echo "Car start by key\n";
    }
}
$myCar= new Car();
$myCar->start();
$myCar->stop();