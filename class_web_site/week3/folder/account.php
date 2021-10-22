<?php
    abstract class Account {
        protected $accountId, $balance, $startDate;
        
        public function __construct ($id, $b, $sd) {
           $this->accountId = $id;
           $this->balance = $b;
           $this->startDate = $sd;
        }
        public function deposit ($amount) {
            // write code here
            $this->balance += $amount;
        }

        abstract public function withdrawal($amount);
        // this is an abstract method. This method must be defined in all classes
        // that inherit from this class
        public function getStartDate() {
            return $this->startDate;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function getAccountId() {
            return $this->accountId;
        }

        protected function getAccountDetails() {
            // populate $str with the account details
            $str = "";
            $str .= "Account ID:" . " "  . $this->accountId . "<br>";
            $str .= "Balance:" . " "  . $this->balance . "<br>";
            $str .= "Account Opened:" . " "  . $this->startDate . "<br>";
            
            return $str;
        }
    }

    class CheckingAccount extends Account {
        const OVERDRAW_LIMIT = -200;

        public function withdrawal($amount) {
            // write code here. Return true if withdrawal goes through; false otherwise           
            
            if($this->balance - $amount > self::OVERDRAW_LIMIT){
                $withdraw = true;
                $this->balance-=$amount; 
            }
            else{
                $withdraw = false;                
            }
            
            return $withdraw;
        }

        //freebie. I am giving you this code.
        public function getAccountDetails() {
            $str = "<h2>Checking Account</h2>";
            $str .= parent::getAccountDetails();
            
            return $str;
        }
    }

    class SavingsAccount extends Account {

        public function withdrawal($amount) {
            // write code here. Return true if withdrawal goes through; false otherwise
            if($this->balance - $amount > 0){
                $withdraw = true;
                $this->balance-=$amount; 
            }
            else{
                $withdraw = false;                
            }
            
            return $withdraw;
        }

        public function getAccountDetails() {
            $str = "<h2>Savings Account</h2>";
            $str .= parent::getAccountDetails();
            
            return $str;
        }
    }
    
    
/*
    $checking = new CheckingAccount ('C123', 1000, '12-20-2019');
    $savings = new SavingsAccount('S123', 5000, '03-20-2020');
    $checkingBalance = $savingBalance =
    $checkingAccountID =  $checkingStartDate = $savingAccountID = $savingStartDate = "";
*/
    





    /* Testing purpose ################
    $checking->withdrawal(200);
    $checking->deposit(500);
    
    $savings->deposit(500);
    $savings->withdrawal(2000);
    
    echo $checking->getAccountDetails();
    echo $savings->getAccountDetails(); */
    
    
?>
