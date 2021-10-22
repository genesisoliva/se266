   <h1>ATM</h1>
    <form method="post">
        <table id="accounts">
            <tr>
                <td>
                    <h2>Checking Account</h2>
                    <ul>
                        <br />
                        <li>Account ID: <?=$checkingAcc->getID();?></li>
                        <br />
                        <li>Balance: $<?=number_format($checkingAcc->getBal() , 2);?></li>
                        <br />
                        <li>Account Opened: <?=$checkingAcc->getStartDay();?></li>
                    </ul>
                        <input type="text" id="chckWithdrawTxt" name="chckWithdrawTxt">
                        <input type="submit" value="Withdraw" id="chckWithdrawBtn">
                        <br />
                        <input type="text" id="chckDepositTxt" name="chckDepositTxt">
                        <input type="submit" value="Deposit" id="chckDepositBtn">
                </td>
                <td>
                    <h2>Savings Account</h2>
                    <ul>
                        <br />
                        <li>Account ID: <?=$savingsAcc->getID();?></li>
                        <br />
                        <li>Balance: $<?=number_format($savingsAcc->getBal() , 2);?></li>
                        <br />
                        <li>Account Opened: <?=$savingsAcc->getStartDay();?></li>
                    </ul>
                        <input type="text" id="savingWithdrawTxt" name="savingWithdrawTxt">
                        <input type="submit" value="Withdraw" id="savingWithdrawBtn">
                        <br />
                        <input type="text" id="savingDepositTxt" name="savingDepositTxt">
                        <input type="submit" value="Deposit" id="savingDepositBtn">
                </td>
            </tr>
        </table>
        <!--Put these in their own from because other options are put a copy in every form or pick one at random to put them in-->
            <!--Will hide these once everything is working-->
            <input type="text" id="checkingHidden" name="checkingHidden" value = "<?=$checkingAcc->getBal();?>" style = "display:none" />
            <input type="text" id="savingsHidden" name="savingsHidden" value ="<?=$savingsAcc->getBal();?>" style = "display:none" />
    </form>
