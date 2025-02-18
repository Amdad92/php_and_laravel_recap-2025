<?php
/*
চ্যালেঞ্জ: ব্যাংক অ্যাকাউন্ট সিমুলেশন (PHP OOP)

✅ নিয়মাবলী:

    - BankAccount নামে একটি ক্লাস তৈরি করো।
    - ক্লাসের মধ্যে নিম্নলিখিত প্রোপার্টিগুলো থাকবে—
        $accountHolder (পাবলিক)
        $balance (প্রাইভেট)

    - ক্লাসের মধ্যে নিচের মেথডগুলো থাকবে—

        __construct($name, $balance) → অ্যাকাউন্ট হোল্ডার সেট করবে এবং ব্যালেন্স ইনিশিয়াল করবে।
        deposit($amount) → নির্দিষ্ট পরিমাণ টাকা জমা করবে (ব্যালেন্স আপডেট করবে)।
        withdraw($amount) → নির্দিষ্ট পরিমাণ টাকা উত্তোলন করবে, তবে যথেষ্ট টাকা না থাকলে "অপর্যাপ্ত ব্যালেন্স" মেসেজ দেখাবে।
        getBalance() → অ্যাকাউন্টের বর্তমান ব্যালেন্স রিটার্ন করবে।

*/
class BankAccount{
    public $accountHolder;
    private $balance;

   function __construct($name, $balance){
        $this->accountHolder=$name;
        $this->balance=$balance;
    }

    function deposit($amount){
        $this->balance +=$amount;
    }

    function withdraw($amount){
        
       if($amount>$this->balance){
        echo "Insufficient money\n";
        return false;
       }
        $this->balance -=$amount;
        return true;

    }

    function getBalance(){
        return $this->balance;
    }
}
// টেস্ট করা যাক!
$account = new BankAccount("John Doe", 1000);
$account->deposit(500);
echo "Current Balance: " . $account->getBalance() . PHP_EOL;

$account->withdraw(2000); // অপর্যাপ্ত ব্যালেন্স মেসেজ দেখাবে
echo "Current Balance: " . $account->getBalance() .  PHP_EOL;

$account->withdraw(1000); // সফলভাবে উত্তোলন করবে
echo "Current Balance: " . $account->getBalance() .  PHP_EOL;