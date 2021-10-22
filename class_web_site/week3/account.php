<?php
    abstract class Account
    {
        protected $accountID;
        protected $startDate;
        protected $balance;

        function __construct($accountID, $balance, $startDate)
        {
            $this->accountID = $accountID;
            $this->balance = $balance;
            $this->startDate = $startDate;
        }

        function deposit($amount)
        {
            $this->balance += $amount; 
        }
        
        abstract function withdraw($amount);

        function getID(){return $this->accountID;}
        function getBal(){return $this->balance;}
        function getStartDay(){return $this->startDate;}

        function getAccDetails()
        {
            $returnStr = "";
            $returnStr += "\n" + $accountID;
            $returnStr += "\n" + $startDate;
            $returnStr += "\n" + $balance;
        }

    }
    
    class CheckingAccount extends Account
    {
        function __construct($accountID, $balance, $startDate)
        {
            parent::__construct($accountID, $balance, $startDate);
        }
        function withdraw($amount)
        {
            if($this->balance >= $amount)
            $this->balance -= $amount;
        }
        function getAccDetails()
        {
            return "Checking Account:" + parent::getAccDetails();
        }
    }
    
    class SavingsAccount extends Account
    {
        function __construct($accountID, $balance, $startDate)
        {
            parent::__construct($accountID, $balance, $startDate);
        }
        function withdraw($amount)
        {
            $this->balance -= $amount;
        }
        function getAccDetails()
        {
            return "Savings Account:" + parent::getAccDetails();
        }
    }
?>
