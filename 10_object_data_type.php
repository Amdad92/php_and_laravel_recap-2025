<?php 
/*
    Objects in Programming:

    - Instances of user-defined classes holding values, functions, and data-processing logic.
    - Objects inherit properties and behaviors from their class but have unique property values.
    - Created explicitly using the new keyword.

    অবজেক্ট কী?

            অবজেক্ট হলো ইউজার-ডিফাইন্ড ক্লাসের উদাহরণ যা মান (value), ফাংশন, এবং ডেটা   প্রসেসিং লজিক ধারণ করে।    অবজেক্ট তার ক্লাস থেকে প্রোপার্টি এবং আচরণ (behavior) গ্রহণ করে, তবে প্রতিটি অবজেক্টের প্রোপার্টি মান আলাদা হয়। অবজেক্ট স্পষ্টভাবে new কীওয়ার্ড ব্যবহার করে তৈরি করা হয়।

    note:   প্রোপার্টি (Property) বলতে ক্লাসের ভেতরে ডিক্লেয়ার করা ভেরিয়েবলগুলোকে বোঝানো হয়। 
            এগুলো ক্লাসের অবজেক্টের ডেটা বা অবস্থা (state) ধরে রাখে।
*/

class Car {

//প্রোপার্টি-property:

    public $brand;
    public $color;

// মেথড (ফাংশন)

    public function displayInfo() {
        return "This car is a " . $this->color . " " . $this->brand . ".";
    }
}

// অবজেক্ট তৈরি

    $myCar = new Car();

// প্রোপার্টি সেট করা

    $myCar->brand = "Toyota";
    $myCar->color = "Red";

// মেথড কল করা এবং আউটপুট দেখানো

    echo $myCar->displayInfo();
?>
