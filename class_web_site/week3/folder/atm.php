<?php //include __DIR__ . '/../Include/header.php'; ?>
<?php 

require 'account.php';

   $newcheckingvar = 1000;
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

<div class="container">  

<form method="post" style="text-align:center;">

<h1>ATM</h1>
       

   <div class="wrapper">
           
           <div class="atmAccount" style="border: 1px solid black;
            padding: 10px; margin:10px;">
          

           <h2>Checking Account</h2>
           <li>Account ID: C123</li>
           <li>Balance: $<?= $newcheckingvar ?></li>
           <li>Account Opened: 12-20-2019</li> 

                  <input type="hidden" id="test" name="checkingAccountId" value="C123" />
                  <input type="hidden" name="checkingDate" value="12-20-2019" />
                  <input type="hidden" name="checkingBalance" value="<?=$newcheckingvar?>" />
             
                   <div class="accountInner">
                       <input type="text" name="checkingWithdrawAmount" value="" />
                       <input type="submit" class="accBtns" name="withdrawChecking" value="Withdraw" />
                   </div>
                   <div class="accountInner">
                       <input type="text" name="checkingDepositAmount" value="" />
                       <input type="submit" class="accBtns" name="depositChecking" value="Deposit" /><br />
                   </div>
           
           </div>

           <div class="atmAccount" style="border: 1px solid black;
            padding: 10px; margin:10px;">
           
           
           <h2>Savings Account</h2>
           <li>Account ID: S123</li>
           <li>Balance: $<?= $newsavingvar ?></li>
           <li>Account Opened: 03-20-2020</li>  

                <input type="hidden" name="savingsAccountId" value="S123" />
                <input type="hidden" name="savingsDate" value="03-20-2020" />
                <input type="hidden" name="savingsBalance" value="<?=$newsavingvar?>" />
              
                   <div class="accountInner">
                       <input type="text" name="savingsWithdrawAmount" value="" />
                       <input type="submit" class="accBtns" name="withdrawSavings" value="Withdraw" /><br />
                   </div>
                   <div class="accountInner">
                       <input type="text" name="savingsDepositAmount" value="" />
                       <input type="submit" class="accBtns" name="depositSavings" value="Deposit" /><br />
                           
                   
                   </div>
           
           </div>
           
       </div>



   </form>

</div>

<?php //include __DIR__ . '/../include/footer.php'; ?>
