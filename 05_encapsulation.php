<?php 
/*
    এনক্যাপসুলেশন কি? (What is Encapsulation?)
        এনক্যাপসুলেশন হলো একটি প্রক্রিয়া যার মাধ্যমে ডেটা এবং মেথডকে একটি ক্লাসের মধ্যে আবদ্ধ করা হয়। 
        এটি ডেটা সুরক্ষা নিশ্চিত করে এবং ডেটা অ্যাক্সেস কন্ট্রোল করে। এনক্যাপসুলেশনের মাধ্যমে ডেটা সরাসরি অ্যাক্সেস করা যায় না, 
        বরং পাবলিক মেথডের মাধ্যমে অ্যাক্সেস করা হয়।

    এনক্যাপসুলেশনের প্রধান বৈশিষ্ট্য:

        ডেটা হাইডিং (Data Hiding): ডেটা সরাসরি অ্যাক্সেস করা যায় না।

        ডেটা সুরক্ষা (Data Security): ডেটা সুরক্ষিত থাকে।

        কোডের পুনর্ব্যবহারযোগ্যতা (Code Reusability): একই কোড বারবার ব্যবহার করা যায়।

*/

/*

Question: Implement a BankAccount Class Using Encapsulation in PHP
Problem Statement:

You are required to create a BankAccount class in PHP that demonstrates the concept of encapsulation. The class should have the following features:

01. A private property called $balance to store the account balance.

02. A constructor to initialize the account with an initial balance.

03. A public method called deposit($amount) to add funds to the account. This method should:

    - Check if the amount is valid (greater than 0).

    - Update the balance if the amount is valid.

    - Display a success message with the new balance.

    - Display an error message if the amount is invalid.

04. A public method called withdraw($amount) to deduct funds from the account. This method should:

    - Check if the amount is valid (greater than 0 and less than or equal to the current balance).

    - Update the balance if the amount is valid.

    - Display a success message with the new balance.

    - Display an error message if the amount is invalid or if there is insufficient balance.

05. A public method called checkBalance() to display the current balance.

Task:

Write the complete PHP code for the BankAccount class as described above. Then, create an object of the class with an initial balance of 1000. Perform the following operations:

    - Check the initial balance.

    - Deposit 500 into the account.

    - Withdraw 200 from the account.

    - Attempt to withdraw 2000 (this should fail due to insufficient balance).

Expected Output:

Current balance: 1000
Deposit successful! New balance: 1500
Withdrawal successful! New balance: 1300
Insufficient balance or invalid amount!

*/

class BankAccount {
    // Private property
    private $balance;

    // Constructor method
    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    // Public method: Deposit balance
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposit successful! New balance: " . $this->balance . "<br>";
        } else {
            echo "Invalid amount!<br>";
        }
    }

    // Public method: Withdraw balance
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawal successful! New balance: " . $this->balance . "<br>";
        } else {
            echo "Insufficient balance or invalid amount!<br>";
        }
    }

    // Public method: Check balance
    public function checkBalance() {
        echo "Current balance: " . $this->balance . "<br>";
    }
}

// Create an object
$account = new BankAccount(1000);

// Check balance
$account->checkBalance(); // Output: Current balance: 1000

// Deposit
$account->deposit(500); // Output: Deposit successful! New balance: 1500

// Withdraw
$account->withdraw(200); // Output: Withdrawal successful! New balance: 1300

// Invalid withdrawal
$account->withdraw(2000); // Output: Insufficient balance or invalid amount!