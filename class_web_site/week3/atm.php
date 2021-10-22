<?php
    require 'account.php';

    //Copy-Pasted $checkingVal and $savingsVal definitions for second constructor argument
    $checkingAcc = new CheckingAccount("C123", filter_input (INPUT_POST, 'checkingHidden') != NULL ? filter_input (INPUT_POST, 'checkingHidden') : 1000.00 , "12-20-2019");
    $savingsAcc = new SavingsAccount("S123", filter_input (INPUT_POST, 'savingsHidden')  != NULL ? filter_input (INPUT_POST, 'savingsHidden') : 5000.00, "03-20-2020");

    if(count($_POST)!=0)
    {
        if(isset($_POST["chckWithdrawTxt"]) && $_POST["chckWithdrawTxt"] != "")
            $checkingAcc->withdraw($_POST["chckWithdrawTxt"]);
        if(isset($_POST["chckDepositTxt"])  && $_POST["chckDepositTxt"] != "")
            $checkingAcc->deposit($_POST["chckDepositTxt"]);
        if(isset($_POST["savingWithdrawTxt"]) && $_POST["savingWithdrawTxt"] != "")
            $savingsAcc->withdraw($_POST["savingWithdrawTxt"]);
        if(isset($_POST["savingDepositTxt"]) && $_POST["savingDepositTxt"] != "")
            $savingsAcc->deposit($_POST["savingDepositTxt"]);
    }
    require 'atm.view.php';
    
