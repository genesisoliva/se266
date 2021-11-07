<?php 

	ini_set('error_reporting', E_ALL);  //short version to show errors

    
    // PATH SETUP, (making sure it uses https)
    $domain = "http://";     //commenting out next 5 lines didn't work
    if (isset($_SERVER['HTTPS'])) {   //OLD WAY, DIDN'T USE
        if ($_SERVER['HTTPS']) {
            $domain = "https://";
        }
    }
    echo $domain."<br>"; //http://
    $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
    echo $server ."<br>"; //localhost
    $domain .= $server;     
    echo $domain ."<br>";

    $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");     
    echo  $phpSelf ."<br>";
    $path_parts = pathinfo($phpSelf);       //get an associative array of the url with dirname, basename, extension & filename
    
    
    $split_url = explode('/', $path_parts['dirname']);		//split dirname part of the array at each / character (creates array)

    print_r($split_url);        //print contets of the array. This shows you the folders in the URL

    //echo "<br>". $split_url[count($split_url) -1]." &nbsp;&nbsp;&nbsp;&nbsp;" .'Is the last folder in this array. It tells you what the value of $ROOT_DIRECTORY needs to be';

    echo "<table border=1>
    <tr>
    <th>[".$split_url[count($split_url) -1].']</th>
    <td>:is the last folder in this array. 
	It tells you what the value 
	of $ROOT_DIRECTORY needs to be
    </td>
    </tr>
</table>';
?>