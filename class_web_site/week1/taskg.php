<?php
function fizzbuzz($num)
{
    $result = "";
    $result .= ($num % 2 == 0) ? "Fizz" : "";
    $result .= ($num % 3 == 0) ? "Buzz" : "";
    if($result == "")
    {
        $result = $num; 
    }
    return $result;
}

require 'taskg.view.php';
?>