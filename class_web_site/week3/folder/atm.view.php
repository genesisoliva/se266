 <h3 class="title">ATM</h3>

            <hr>
            
            
            <div id="form_container">

                <div id="checking">

                    <h2>Checking Account:</h2>
                    <br>

                    <?php

                        if($error == ""){

                            echo $checking->getAccountDetails();

                        }
                    ?>
                    

                    <div id="checking_form">
                        <form action="atm.php" method="post">

                            <input type="text" name="chWithdrawal" value="<?=$chWithdraw?>"/>
                            <input type="submit" name="checkWithdraw" value="Withdraw"/>

                            <br>
                            <input type="text" name="chDepo" value="<?=$chDeposit?>"/>
                            <input type="submit" name="checkDeposit" value="Deposit"/>

                            <br>
                            <br>
                            <input type="submit" name="checkBalance" value="Check Balance"/>
                        
                        </form>
                    </div><!--/#checking_form-->

                </div><!--/#checking-->

                <div id=savings>

                    <h2>Savings Account:</h2>
                    <br>

                    <?php
                        if($error == ""){

                            echo $savings -> getAccountDetails();

                        }

                    ?>

                    <div id=savings_form>
                        <form method="post">

                            <input type="text" name="saveWithdrawal" value="<?=$saveWithdraw?>"/>
                            <input type="submit" name="saveWithdraw" value="Withdraw"/>

                            <br>
                            <input type="text" name="saveDepo" value="<?=$saveDeposit?>"/>
                            <input type="submit" name="saveDeposit" value="Deposit"/>

                            <br>
                            <br>
                            <input type="submit" name="saveBalance" value="Check Balance"/>

                        </form>
                    </div><!--/#savings_form-->

                </div><!--/#savings-->

                <hr>

                <php
                    
                    if($error != ""):
                ?>

                <h4 style="color:white;"><b><?=$error?></b></h4>


            </div><!--/#form_container-->
        </div>
