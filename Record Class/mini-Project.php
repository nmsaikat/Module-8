<?php
class BankAccount {
    public $name;       // ইউজারের নাম (public, সবার জন্য)
    private $balance;   // টাকা (private, direct access করা যাবে না)

    // Constructor দিয়ে name এবং initial balance সেট করা
    public function __construct($name, $balance = 0) {
        $this->name = $name;
        $this->balance = $balance;
    }

    // টাকা জমা দেওয়ার method
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "{$this->name} Deposited: $amount<br>";
        } else {
            echo "Invalid deposit amount!<br>";
        }
    }

    // টাকা তোলার method
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "{$this->name} Withdrawn: $amount<br>";
        } else {
            echo "Insufficient balance or invalid amount!<br>";
        }
    }

    // Balance দেখানোর method
    public function getBalance() {
        return "{$this->name}'s Current Balance: " . $this->balance . "<br>";
    }
}

// =============================
// Object তৈরি ও ব্যবহার
// =============================
$account1 = new BankAccount("NM Saikat", 1000);
$account2 = new BankAccount("Rahim", 500);

// Account 1 কাজ
$account1->deposit(500);
$account1->withdraw(300);
echo $account1->getBalance();

// Account 2 কাজ
$account2->deposit(200);
$account2->withdraw(100);
echo $account2->getBalance();

// Private property সরাসরি access করলে error আসবে
// echo $account1->balance; ❌
?>
