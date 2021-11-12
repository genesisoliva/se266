<?php

error_reporting(E_ALL ^ E_WARNING);

    session_start();
    
    include_once __DIR__ . "/model/model_customers.php";
    include_once __DIR__ . "/include/functions.php";
    
    $images = filter_input ( INPUT_GET , 'image' );
    if (isset($images) && !empty($images)) {
        echo '<img src="images/'.$images.'.png">';
    }

    $fName = filter_input(INPUT_GET, 'FirstName');


    /*if (isPostRequest() && $action == "add") {
       
        $result = //addFunction ($ , $ , $ , $);  
        header('Location: checkOut.php');
        
    } elseif (isPostRequest() && $action == "update") {
        
        $result = //updateFunction ($ , $ , $);
        header('Location: checkOut.php');
        }
     else if (isset($_POST['delete'])){
        //deleteFunction($);
        header('Location: checkOut.php');
    }*/



?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>G & K Cafe | Check Out</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<body>

<!-- Main Container Div -->
<div id="container">

<!-- Header Div -->      
<div class="header"> 
<h2>Your Order</h2>
</div><!-- End Header Div -->


<!--Navigation Bar-->
    <div class="nav">	  
        <a class="btns" href="https://se266gam.herokuapp.com/">All Signments</a>          
        <a class="btns" href="gitRepo.php">My GitHub Repo</a>  
        <a class="btns" href="menu.php">Menu</a> 
        <a class="btns" href="signoff.php">Sign Out</a>  

    </div><!-- end botton-container -->	   
       
 <!-- Container Div -->
<div class="container" style="text-align:center;">  


<form method="post" action="checkOrder.php">
          
    <div class="reward">
        <div class="rewardBtn"></div>
        <img src="images/reward<?php echo $images; ?>.png" style="height:50px;"><br>
     </div>


    <table class="center" style="text-align:center">

    <?php
    
    //include __DIR__ . '/model/model_customers.php';
    include __DIR__ . '/functions.php';

    $getOrder =  getOrderItems ();
    //$getOrder = getCustomerOrder($customerId);
    
?>
            <thead>
            <tr>
                <th>Item Description</th>
                <th>Item Price</th>
                <th>Item Size</th>

            </tr>
            </thread>
            <tbody>

            <?php foreach ($getOrder as $row): ?>
            <tr>
            <form action="menu.php?action=add&orderItemId=<?php $orderItemId ?>"  method="post">
                <td><?php echo $row["itemDesc"]; ?></td>
                <td><?php echo itemPrice($row["itemPrice"]); ?></td>
                <td><?php echo itemSize($row["itemSize"]); ?></td>
            </form> 

            </tr>
                <?php endforeach; ?>
            
            </tbody>
            

            </table>
    </form>

</div> <!-- End Container Div -->



<!-- Footer -->
<footer class="footer">
  <p>This document was last modified <span id="lastMod"></span>.</p>
  <p class="crName">&#169; Gina Martin SE266</p>
</footer>
<!-- End Footer Div -->



<script>
document.getElementById("lastMod").innerHTML = document.lastModified;
</script>

</body>
</html>