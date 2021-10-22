<?php
    abstract class Account {
        protected $accountId, $balance, $startDate;
        
        public function __construct ($id, $b, $sd) {
           
            // write code here
            $this->accountId = $id;
            $this->balance = $b;
            $this->startDate = $sd;

        }
        public function deposit ($amount) {
            
            // write code here
            return $this->balance = $this->balance + $amount;

        }

        abstract public function withdrawal($amount);
        // this is an abstract method. This method must be defined in all classes
        // that inherit from this class
        public function getStartDate() {

            // write code here
            return $this->startDate;
        }

        public function getBalance() {

            // write code here
            return $this->balance;
        }

        public function getAccountId() {

            // write code here
            return $this->accountId;

        }

        protected function getAccountDetails() {
            // populate $str with the account details
            
            $str = "<b>Account ID:</b> " . self::getAccountId() . "<br><b>Balance:</b> " . self::getBalance() . "<br><b>Start Date:</b> " . self::getStartDate();
            return $str;
        }

        public function setBalance($b){

            $this->balance = $b;
        }
    }

    class CheckingAccount extends Account {
        const OVERDRAW_LIMIT = -200;

        public function withdrawal($amount) {
            // write code here. Return true if withdrawal goes through; false otherwise
            if(parent::getBalance() - $amount < self::OVERDRAW_LIMIT){

                return false;

            } else {

                parent::setBalance(parent::getBalance() - $amount);
                return true;
            }
        }

        //freebie. I am giving you this code.
        public function getAccountDetails() {
            //$str = "<h2>Checking Account</h2>";
            $str = parent::getAccountDetails();
            
            return $str;
        }
    }

    class SavingsAccount extends Account {

        public function withdrawal($amount) {
            // write code here. Return true if withdrawal goes through; false otherwise
            if(parent::getBalance() - $amount < 0){

                return false;

            } else {

                parent::deposit(-$amount);
                return true;

            }
        }

        public function getAccountDetails() {
           // look at how it's defined in other class. You should be able to figure this out ...
           //$str = "<h2>Savings Account</h2>";
           $str = parent::getAccountDetails();

           return $str;
        }
    }

    
    
    //$checking->withdrawal(200);
    //$checking->deposit(500);


    
    //echo $checking->getAccountDetails();
    //echo $savings->getAccountDetails();
    //echo $checking->getStartDate();
    
?>
