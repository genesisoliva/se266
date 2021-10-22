<?php

error_reporting(E_ALL ^ E_WARNING); 

//---------------------------------------------------------- Account -------------------------------------
    abstract class Account {
        
        protected $accountId, $balance, $startDate;
        
        public function __construct ($id, $b, $sd) {
           $this->accountId = $id;
           $this->balance = $b;
           $this->startDate = $sd;
        }

        public function deposit ($amount) {

            $this->balance = $this->balance + $amount;
            
        }

        abstract public function withdrawal($amount);
        
           
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
            $str = " ";
            $str .= $this->getAccountId();
            $str .= $this->getBalance();
            $str .= $this->getStartDate();

            return $str;
        }
    }


    
//---------------------------------------------------------- Checking Account -------------------------------------
    class CheckingAccount extends Account {
        const OVERDRAW_LIMIT = -200;

        public function withdrawal($amount) {
            
            if (($this->balance - $amount) >= self::OVERDRAW_LIMIT){
                
                $this->balance = $this->balance - $amount;

            }else{

                echo "Error: Exceeded withdrawl amount limit.";
             
            }
        }
          
        public function getAccountDetails() {
            $str = "<h2>Checking Account</h2>";
            $str .= parent::getAccountDetails();
            
            return $str;
        }
    }

    
//---------------------------------------------------------- Savings Account -------------------------------------
    class SavingsAccount extends Account {

        public function withdrawal($amount) {
            
            if (($this->balance - $amount) >= 0){
                
                $this->balance = $this->balance - $amount;

            }else{

                echo "Error: Exceeded withdrawl amount limit.";
             
            }
        }

        public function getAccountDetails() {
          
           $str = "<h2>Savings Account</h2>";
           $str .= parent::getAccountDetails();

           
           return $str;
            
        }
    }
    

    $checking = new CheckingAccount ('C123', 1300, '12-20-2019');
    $savings = new SavingsAccount('S123', 5000, '03-20-2020');
    $checkingBalance = $savingBalance = $checkingAccountID =  $checkingStartDate = $savingAccountID = $savingStartDate = "";

    





    //Testing purpose ################
    $checking->withdrawal(200);
    $checking->deposit(500);
    
    $savings->deposit(500);
    $savings->withdrawal(2000);
    
    echo $checking->getAccountDetails();
    echo $savings->getAccountDetails();
    
    
?>
