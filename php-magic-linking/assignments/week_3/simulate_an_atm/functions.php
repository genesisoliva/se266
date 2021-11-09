<?php 
$newcheckingvar = 1300;
   $newsavingvar = 5000;

    if(isset($_POST['checkingBalance'])){
        $newcheckingvar = $_POST['checkingBalance'];
    }

    if(isset($_POST['savingsBalance'])){
        $newsavingvar = $_POST['savingsBalance'];
    }

  $savings = new SavingsAccount('S123', $newsavingvar , '03-20-2020');
   $checking = new CheckingAccount ('C123', $newcheckingvar, '12-20-2019');

       if (isset ($_POST['withdrawChecking'])) {
            $checking->withdrawal(filter_input(INPUT_POST, 'checkingWithdrawAmount'));
            $newcheckingvar = $checking->getBalance();
            
        } else if (isset ($_POST['depositChecking'])) {
            $checking->deposit(filter_input(INPUT_POST, 'checkingDepositAmount'));
            $newcheckingvar = $checking->getBalance();

        } else if (isset ($_POST['withdrawSavings'])) {
            $savings->withdrawal(filter_input(INPUT_POST, 'savingsWithdrawAmount'));
            $newsavingvar = $savings->getBalance();

        } else if (isset ($_POST['depositSavings'])) {
            $savings->deposit(filter_input(INPUT_POST, 'savingsDepositAmount'));
            $newsavingvar = $savings->getBalance();
        }

    
?>