<?php 
/*
    1. PHP Logical AND (&& or and): 

        - Description: The AND operator returns true if both conditions are true.
        
        Syntax:

        $condition1 && $condition2
    
    2.  PHP Logical OR (|| or or):

      - Description: The OR operator returns true if at least one of the conditions is true.
     

       Syntax:

       $condition1 || $condition2

    3.  PHP Logical XOR (xor):

      - Description: The XOR operator returns true if only one of the conditions is true, but not both.

       Syntax:
       $condition1 xor $condition2

    4.  PHP Logical NOT (!):

     -  The NOT operator reverses the truth value of a condition

        Syntax:
        !($condition)

*/


//  Example: PHP Logical AND (&& or and):
//  দুটি শর্ত দুইটাই সত্য হলে ফলাফল true দেয়।

        $age = 25;
        $hasID = true;

        if ($age >= 18 && $hasID) {
            echo "You are allowed to enter.";
        } else {
            echo "Access denied.";
        } 


//  Example: PHP Logical OR (|| or or):
//  দুটি শর্তের মধ্যে যেকোনো একটি সত্য হলে ফলাফল true দেয়।

        $isWeekend = true;
        $isHoliday = false;

        if ($isWeekend || $isHoliday) {
            echo "You can take a break.";
        } else {
            echo "It's a working day.";
        }


//  Example: PHP Logical XOR (xor):
//  দুটি শর্তের মধ্যে কেবল একটি সত্য হলে ফলাফল true দেয়। উভয় শর্ত সত্য বা উভয় শর্ত মিথ্যা হলে ফলাফল false হয়।

        $hasCoupon = true;
        $isMember = false;

        if ($hasCoupon xor $isMember) {
            echo "You get a special discount!";
        } else {
            echo "No discount for you.";
        }

//  Example: Logical NOT (!):
//  শর্তকে বিপরীত করে। যদি শর্ত true হয়, তাহলে false করে এবং উল্টোটা করে। কোনো শর্তকে অস্বীকার করতে এটি ব্যবহার করা হয়। 

        $isLoggedIn = false;

        if (!$isLoggedIn) {
            echo "Please log in to continue.";
        } else {
            echo "Welcome back!";
        }
?>