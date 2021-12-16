<?php
/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

 //get ip address of client
function getIpAddress() {
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {

   echo $ip = $_SERVER['HTTP_CLIENT_IP'];

   } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

   echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

   } else {

   echo $ip = $_SERVER['REMOTE_ADDR'];

   }
   return $ip;
}

?>