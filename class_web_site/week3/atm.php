<?php 
include __DIR__ . '/../include/header.php';
?>


<form method="post">
<h1>ATM</h1>
<?php 
require 'account.php';
require 'functions.php';
?>

   <div class="wrapper">
           
           <div class="account">
          

           <h2>Checking Account</h2>
           <li>Account ID: C123</li>
           <li>Balance: $<?= $newcheckingvar ?></li>
           <li>Account Opened: 12-20-2019</li> 

                  <input type="hidden" id="test" name="checkingAccountId" value="C123" />
                  <input type="hidden" name="checkingDate" value="12-20-2019" />
                  <input type="hidden" name="checkingBalance" value="<?=$newcheckingvar?>" />
             
                   <div class="accountInner">
                       <input type="text" name="checkingWithdrawAmount" value="" />
                       <input type="submit" name="withdrawChecking" value="Withdraw" />
                   </div>
                   <div class="accountInner">
                       <input type="text" name="checkingDepositAmount" value="" />
                       <input type="submit" name="depositChecking" value="Deposit" />
                   </div>
           
           </div>

           <div class="account">
           
           
           <h2>Savings Account</h2>
           <li>Account ID: S123</li>
           <li>Balance: $<?= $newsavingvar ?></li>
           <li>Account Opened: 03-20-2020</li>  

                <input type="hidden" name="savingsAccountId" value="S123" />
                <input type="hidden" name="savingsDate" value="03-20-2020" />
                <input type="hidden" name="savingsBalance" value="<?=$newsavingvar?>" />
              
                   <div class="accountInner">
                       <input type="text" name="savingsWithdrawAmount" value="" />
                       <input type="submit"  name="withdrawSavings" value="Withdraw" />
                   </div>
                   <div class="accountInner">
                       <input type="text" name="savingsDepositAmount" value="" />
                       <input type="submit" name="depositSavings" value="Deposit" />
                   </div>
           
           </div>
           
       </div>



   </form>


<?php include __DIR__ . '/../include/footer.php'; ?>