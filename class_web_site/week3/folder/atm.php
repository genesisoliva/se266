<?php


    $chWithdraw = "";
    $chDeposit = "";
    $saveWithdraw = "";
    $saveDeposit = "";
    $error = "";


    require('account.php');
    
    $checking = new CheckingAccount ('C123', 1000, '12-20-2019');
    $savings = new SavingsAccount('S123', 5000, '03-20-2020');
    

    if(isset($_POST["checkWithdraw"])){

        $chWithdraw = filter_input(INPUT_POST, 'chWithdrawal', FILTER_VALIDATE_FLOAT);

        if($chWithdraw == ""){

            $error = "INVALID WITHDRAWAL AMOUNT ENTERED. TRY AGAIN. EX: 3.43";

        } else{

            if(!$checking->withdrawal($chWithdraw)){

                $error = "INSUFFICIENT FUNDS. CHECK BALANCE AND TRY AGAIN.";

            } else {
                $checking->setBalance($checking->balance - $chWithdraw);
            } 

        }

    } elseif(isset($_POST["checkDeposit"])){

        $chDeposit = filter_input(INPUT_POST, 'chDepo', FILTER_VALIDATE_FLOAT);

        if($chDeposit == ""){

            $error = "INVALID DEPOSIT AMOUNT ENTERED. TRY AGAIN. EX:433.44";

        } else {

            $checking->deposit($chDeposit);

        }

    } elseif(isset($_POST["saveWithdraw"])){

        $saveWithdraw = filter_input(INPUT_POST, 'saveWithdrawal', FILTER_VALIDATE_FLOAT);

        if($saveWithdraw == ""){

            $error = "INVALID WITHDRAWAL AMOUNT ENTERED. TRY AGAIN. EX:65.32";

        } else{

            if(!$savings->withdrawal($saveWithdraw)) {

                $error = "INSUFFICIENT FUNDS. CHECK BALANCE AND TRY AGAIN.";
            }
            

        }

    } elseif(isset($_POST["saveDeposit"])){

        $saveDeposit = filter_input(INPUT_POST, 'saveDepo', FILTER_VALIDATE_FLOAT);

        if($saveDeposit == ""){

            $error = "INVALID DEPOSIT AMOUNT ENTERED. TRY AGAIN. EX:98.34";

        } else{

            $savings->deposit($saveDeposit);

        }

    }


    //require('header.php');
    require('atm.view.php');
   // require('footer.php');
