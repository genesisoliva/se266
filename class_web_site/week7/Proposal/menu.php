<?php


error_reporting(E_ALL ^ E_WARNING);

//CODE SESSION CORRECTLY
    session_start();
    
    include_once __DIR__ . "/model/model_customers.php";
    include_once __DIR__ . "/include/functions.php";
    

    $images = filter_input ( INPUT_GET , 'image' );
    if (isset($images) && !empty($images)) {
        echo '<img src="images/'.$images.'.png">';
    }


    if (isPostRequest()) {

          $itemDesc = filter_input(INPUT_POST, 'desc');
          $itemPrice = filter_input(INPUT_POST, 'price');
          $itemSize = filter_input(INPUT_POST, 'size');

          $result = addItem ($itemDesc, $itemPrice, $itemSize);
       
      };

  $action = "";
  if (isset($_GET['action']))  
               {
                   $action = filter_input(INPUT_GET, 'action'); 
                   $orderId = filter_input(INPUT_GET, 'orderItemId');
   
                       if ($action == "add") {

                        $getOrder = getOrder($orderItemId);
                       }
                       else{ 

                            $getOrder = []; 
                             
                        }
                    }




      if (isset($_POST['addOrderItem'])) {
                    
        $itemDesc = filter_input(INPUT_POST, 'desc');
        $itemPrice = filter_input(INPUT_POST, 'price');
        $itemSize = filter_input(INPUT_POST, 'size');
        
        $result = additem ($itemDesc, $itemPrice, $itemSize);
        $getOrder = getOrder ($itemDesc, $itemPrice, $itemSize);

      };
        

        if (isPostRequest() && $action == "add") {
       
            $result = addItem ();  //took out 3 variables
            header('Location: menu.php');
        };
        
        if (isset($_POST['delete'])){
 
                deleteOrder($orderItemId);
                header('Location: menu.php');
        
            };


  /*$total = 0;
  $items = [];
  $feedback = "";
  if( !empty( $_POST['choice'] ) && is_array( $_POST['choice'] ) )
{
    // loop all item choices
    foreach( $_POST['choice'] as $item )
    {
        // filter item info
        $name     = trim( $item['name'] );
        $price    = floatval( $item['price'] );
        $quantity = intval( $item['quantity'] );
        // only add if item was checked and quantity is more than 0
        if( isset( $item['checked'] ) && $quantity > 0 )
        {
            $items[] = $quantity .' '. $name;
            $total  += $price * $quantity;
        }
    }
    // update info if items were selected
    if( count( $items ) )
    {
        //output feedback/total
    }
  }*/
  
  


           
     
?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>G & K Cafe | Menu</title>
<!-- Link to external Stylesheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!-- Main Container Div -->
<div id="container"> 
<!-- Header Div  -->    
<div class="header"> 

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
    <h2>Menu</h2>
    </br>

    <form name="" method="post" action="menu.php" class="">
     

    <div class="orderItems">
                <div class="orderBtns"></div>

                <img src="images/muffin<?php echo $images; ?>.png" style="height:50px;"><img src="images/hotcoffee<?php echo $images; ?>.png" style="height:50px;"><img src="images/bagel<?php echo $images; ?>.png" style="height:50px;"><img src="images/icedcoffee<?php echo $images; ?>.png" style="height:50px;"><br><br>

                <select name="desc" id="desc"> 
                <option value="HC">Hot Coffee</option>
                <option value="IC">Iced Coffee</option><br>
                </select> 
 
                <br>
                <br>

    <label></label> 
                <input type="radio" id="size" name="size" value="0" >12oz</input>
                <input type="hidden" name="price" id="price" value ="0"/>
                 <input type="radio" id="size" name="size" value="1" >16oz</input>
                <input type="hidden" name="price" id="price" value ="1"/>
                <br>
    
    <div class="">
 
 
            
    </div> 
    </div> 
        
      <div class="">
      <button type="submit" name="additem" value="additem" class="">+</button>
      <?php
            if (isPostRequest()) {
                echo " ";
            }
        ?>
        </div>
   
     </form>

     <div class=""><a href="checkOrder.php?action=add" id="add">Place Order</a></div>

</div>
</div>  


  


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