<?php

error_reporting(E_ALL ^ E_WARNING); 

    abstract class Account {
        
        protected $accountId, $balance, $startDate;
        
        public function __construct ($id, $b, $sd) {
            //write code here
           $this->accountId = $id;
           $this->balance = $b;
           $this->startDate = $sd;
        }

        public function deposit ($amount) {
            //write code here
            $this->balance = $this->balance + $amount;
        }

        abstract public function withdrawal($amount);
        //This is an abstract methoth
           
        public function getStartDate() {
            //write code here
            return $this->startDate;
        }

        public function getBalance() {
             //write code here
            return $this->balance;
        }

        public function getAccountId() {
             //write code here
            return $this->accountId;
        }

        protected function getAccountDetails() {
            //populate
            $str = " ";
            $str .= $this->getAccountId();
            $str .= $this->getBalance();
            $str .= $this->getStartDate();

            return $str;
        }
    }

    class CheckingAccount extends Account {
        const OVERDRAW_LIMIT = -200;

        public function withdrawal($amount) {
             //write code here
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


    
?>
