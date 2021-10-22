<?php include __DIR__ . '/../Include/header.php'; ?>
<?php

   require "account.php";

   $checkingDeposit = $checkingWithdraw = $savingsDeposit = $savingsWithdraw = 0 ;

  

   
   
   
    if (isset ($_POST['c_accountID']) || isset ($_POST['s_accountID']) )
    {
        
        $checkingAccountID = filter_input(INPUT_POST, "c_accountID");
        $checkingBalance = filter_input(INPUT_POST, "c_balance",FILTER_VALIDATE_FLOAT);
        $checkingStartDate = filter_input(INPUT_POST, "c_startDate");

        $savingAccountID = filter_input(INPUT_POST, "s_accountID");
        $savingBalance = filter_input(INPUT_POST, "s_balance",FILTER_VALIDATE_FLOAT);
        $savingStartDate = filter_input(INPUT_POST, "s_startDate");
    }
    else
    {
        $checkingAccountID = 'C123';
        $checkingBalance = 1000;
        $checkingStartDate = '12-20-2019';

        $savingAccountID = 'S123';
        $savingBalance = 5000;
        $savingStartDate = '03-20-2020';
    }

    
    /*$checking = new CheckingAccount ('C123', 1000, '12-20-2019');
    $savings = new SavingsAccount('S123', 5000, '03-20-2020');*/

    $checking = new CheckingAccount ($checkingAccountID, $checkingBalance, $checkingStartDate);
    $savings = new SavingsAccount($savingAccountID , $savingBalance, $savingStartDate);
    //CHECKING ACCOUNT
    if (isset($_POST["checkings_withdrawbtn"])) 
    {
        $checkingWithdraw = filter_input(INPUT_POST, "checkings_withdraw_amount", FILTER_VALIDATE_FLOAT);
        $checking->withdrawal($checkingWithdraw);

        
    }
    if (isset($_POST["checkings_depositbtn"]))
    {
        $checkingDeposit = filter_input(INPUT_POST, "checkings_deposit_amount", FILTER_VALIDATE_FLOAT);
        $checking->deposit($checkingDeposit);

       
    }

    //SAVINGS ACCOUNT
    if (isset($_POST["savings_withdrawbtn"]))
    {
        $savingsWithdraw = filter_input(INPUT_POST, "savings_withdraw_amount", FILTER_VALIDATE_FLOAT);
        $savings->withdrawal($savingsWithdraw);

    }
    if (isset($_POST["savings_depositbtn"]))
    {
        $savingsDeposit = filter_input(INPUT_POST, "savings_deposit_amount", FILTER_VALIDATE_FLOAT);
        $savings->deposit($savingsDeposit);

    }

   /* $checking = new CheckingAccount ($checkingAccountID, $checkingBalance, $checkingStartDate);
    $savings = new SavingsAccount($savingAccountID , $savingBalance, $savingStartDate);
*/
    


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM APPLICATION</title>
    <style>
        div.box{
            border: groove;
            margin-left: 120px;
            margin-top: 50px;
            background-color: lightgrey;
            width: 300px;
            border: 10px solid blue;
            padding: 50px;
            margin: 20px;
        }
        
     
        
        
    
    
        
    </style>
</head>
<body>
<div class="content">
<h1> ATM </h1>
<form method="post">

<div id="checkingswrapper" class="box">
<?= $checking->getAccountDetails(); ?>
<input type="hidden"  name="c_accountID" value="C123">
<input type="hidden" name="c_balance" value="<?= $checking->getBalance() ?>">
<input type="hidden" name="c_startDate" value="12-20-2019">
<br>

    <div class="withdraw">
        <input type="text" name="checkings_withdraw_amount" size="8px" value="" >
        <input type="submit" name="checkings_withdrawbtn" value="Withdraw">
    </div>

    <div class="deposit">
        <input type="text" name="checkings_deposit_amount" size="8px" value="" >
        <input type="submit" name="checkings_depositbtn" value="Deposit">
    </div>
</div>



<div id="savingswrapper" class="box">
<?= $savings->getAccountDetails(); ?>
<input type="hidden" name="s_accountID" value="S123">
<input type="hidden" name="s_balance" value="<?= $savings->getBalance() ?>">
<input type="hidden" name="s_startDate" value="03-20-2020">
<br>
    <div class="withdraw">
        <input type="text" name="savings_withdraw_amount" size="8px" value="" >
        <input type="submit" name="savings_withdrawbtn" value="Withdraw">
    </div>  

    <div class="deposit">
        <input type="text" name="savings_deposit_amount" size="8px" value="" >
        <input type="submit" name="savings_depositbtn" value="Deposit">
    </div>
</div>

</form>
</div>

<?php include __DIR__ . '/../include/footer.php'; ?>
