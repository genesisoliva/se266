<?php

include (__DIR__ . '/db.php');
error_reporting(E_ALL ^ E_WARNING); 

//------------------------------------------- LOGIN --------------------------------//
function checkLogin ($username, $password) {
    global $db;
    $stmt = $db->prepare('SELECT id FROM customers WHERE customerUsername =:userName AND customerPassword = :password');

    $stmt->bindValue(':userName', $username);
    $stmt->bindValue(':password', sha1($password));
    
    $stmt->execute ();
   
    return( $stmt->rowCount() > 0);
    
}


//---------------------------------- SIGN UP/ADD CUSTOMER -----------------------------//
 function addCustomer ($fName, $lName, $username, $password, $email, $birthday) {
    global $db;
    $results = "Not added";

    $stmt = $db->prepare("INSERT INTO customers SET customerFirstName = :FirstName, customerLastName = :LastName, customerUsername = :username,  customerPassword = :password, customerEmail = :email, customerBirthDate = :birthday");

    $stmt->bindValue(':FirstName', $fName);
    $stmt->bindValue(':LastName', $lName);
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':birthday', $birthday);  
    
  

    if ($stmt->execute() && $stmt->rowCount() > 0) 
        {
            $results = 'Data Added';
        } 
        
        return ($results);

    }



//-------------------------------------- REWARD COUNT ------------------------------//
function getRewardCount() {
    global $db;

    $stmt = $db->query("SELECT COUNT(*) AS customerReward FROM customerOrders");
    $results = $stmt->fetch(PDO::FETCH_ASSOC);   
    return($results['customerReward']);
}

//---------------------------------- REWARDS HISTORY ------------------------------//
function getRewards ($customerId) {
    global $db;
    
    $results = [];
    $stmt = $db->prepare("SELECT customerOrderId, customerId, customerOrderDate, customerOrderItem, customerCharge, customerReward FROM customerOrders  WHERE customerId=:customerId");

    $stmt->bindValue(':customerId', $customerId);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
    }

    return ($results);
    }
    //$customer = getRewards();


//------------------------------ ORDERING ITEMS -------------------------------//

//function add item
function addItem ($itemDesc, $itemPrice, $itemSize) {
    global $db;
    $results = "Not added";


    $stmt = $db->prepare("INSERT INTO orderItems SET itemDesc = :itemDesc, itemPrice = :itemPrice, itemSize = :itemSize");

    $binds = array(
        //":itemId" => $itemId,
        ":itemDesc" => $itemDesc,
        ":itemPrice" => $itemPrice,
        ":itemSize" => $itemSize,
        
    );

       // var_dump($binds);
       // exit;

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = 'Item Added';
    }
    
    return ($results);
}

 /*$results = addItem ('Bagel', '2', 'Small');
  var_dump ($results);*/


//------------------------------------ GET ORDER ---------------------
function getOrder ($orderItemId) {
    global $db;
    
    $results = [];
    $stmt = $db->prepare("SELECT itemDesc, itemPrice, itemSize FROM orderItems  WHERE orderItemId=:orderItemId");

    $stmt->bindValue(':orderItemId', $orderItemId);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
    }

    return ($results);
    }
    
  /*$result = getOrder(154);
  var_dump($result);
  exit;*/

//------------------------------ GRAB ALL ITEMS ------------------//
function getOrderItems () {
    global $db;
    
    $results = [];
    $stmt = $db->prepare("SELECT orderItemId, itemDesc, itemPrice, itemSize FROM  orderItems"); //WHERE itemId=:customerOrderId");


    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   
    }
    
    return ($results);
   }

   /* $results = getOrderItems();
    var_dump($results);
    exit;*/



//---------------------------------------- DELETE ITEM --------------------------//

function deleteOrder ($orderItemId) {
    global $db;
    
    $results = "Item was not deleted";
    $stmt = $db->prepare("DELETE FROM orderItems  WHERE orderItemId=:orderItemId");
    
    $stmt->bindValue(':orderItemId', $orderItemId);
        
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = 'Item Deleted';
    }
    
    return ($results);
}

/*$result = deleteOrder(156);
  var_dump($result);
  exit;*/


//------------------------------------- GET CUSTOM ORDER ------------------// 
/*function getCustomOrder() {
    global $db;
    
    $results = [];
    $stmt = $db->prepare("SELECT customerOrderId, customerId, customerOrderDate, customerOrderQty FROM  customerOrders WHERE customerOrderId=:customerOrderId");
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                   
    }
    
    return ($results);
   }*/





//---------------------------------------------- FINALIZE ORDER ----------------------------------//
//function checkOut 

//function total price