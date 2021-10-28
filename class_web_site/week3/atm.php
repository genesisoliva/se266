<style>
    .account {
    border: 1px solid black;
    padding: 10px;
    }
    .wrapper{
        display: grid;
    grid-template-columns: 300px 300px;
    }
    .error{
        color:red;
    }
}
</style>
<?php 
include __DIR__ . '/../include/header.php';
require 'functions.php';
?>

<form method="post">
<h1>ATM</h1>

<?php 
require 'account.php';
?>

   <div class="wrapper">
           
           <div class="account">
           <?php
                echo $checking->getAccountDetails();
                echo '<br>';
            ?>
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
           <?php
                echo $savings->getAccountDetails();
                echo '<br>';
            ?>

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
