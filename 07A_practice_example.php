<?php
/*
Question:
Implement a PHP program to demonstrate polymorphism using an interface. 
Create an interface called PaymentMethod with a method processPayment(). 
Then, create three classes (Bkash, Nagad, and CreditCard) that implement this interface. 
Each class should provide its own implementation of the processPayment() method, 
returning a message indicating the payment method used (e.g., "Payment successful with Bkash"). 
Finally, create objects of each class and call the processPayment() method to display the respective messages.

Additional Requirements:

    - Use type hinting in the processPayment() method to ensure the input parameter is a float (representing the payment amount) and the return type is a string.

    - Display the payment amount along with the success message (e.g., "Payment of 1000 BDT successful with Bkash").

Expected Output:

Payment of 1000 BDT successful with Bkash.
Payment of 500 BDT successful with Nagad.
Payment of 2000 BDT successful with Credit Card.

*/

interface PaymentMethod {
    public function processPayment(float $amount): string;
}

class Bkash implements PaymentMethod {
    public function processPayment(float $amount): string {
        return "Payment of $amount BDT successful with Bkash." . PHP_EOL;
    }
}

class Nagad implements PaymentMethod {
    public function processPayment(float $amount): string {
        return "Payment of $amount BDT successful with Nagad." . PHP_EOL;
    }
}

class CreditCard implements PaymentMethod {
    public function processPayment(float $amount): string {
        return "Payment of $amount BDT successful with Credit Card." . PHP_EOL;
    }
}

// Payment processing
$bkash = new Bkash();
echo $bkash->processPayment(1000.50); // Output: Payment of 1000 BDT successful with Bkash.

$nagad = new Nagad();
echo $nagad->processPayment(500.60); // Output: Payment of 500 BDT successful with Nagad.

$creditCard = new CreditCard();
echo $creditCard->processPayment(2000.60); // Output: Payment of 2000 BDT successful with Credit Card.