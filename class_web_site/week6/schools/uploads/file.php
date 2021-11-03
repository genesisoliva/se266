<?php

$file = fopen ('schools.csv', 'rb');
$i = 0;
while (!feof($file) && $i<10) {
   $school = fgetcsv($file);
   echo ($school[1]) . "<br />";
   $i++;
}

?>