<?php 
    /*session_start();
    
    if(!isset($_SESSION['use'])) 
       {
           header('Location: login.php');  
       }
          echo $_SESSION['use'];
          echo " Login Success";
          echo "<a href='logout.php'> Logout</a> ";
    if (isset($_POST["import"]))
    {
        $deleterecords = "TRUNCATE TABLE schools"; 
        mysql_query($deleterecords);
        
        $tmp_name = $_FILES['file1']['tmp_name'];
        
        if ($_FILES['file1']['size'] > 0) 
        {
            $file = fopen ('schools.csv', 'rb');
            
            while(($column = fgetcsv($file, 10000, ",")) !== FALSE)
            {
                $sqlInsert = "INSERT into schools (id, schoolName, schoolCity, schoolState) values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "')";
                $results = mysqli_query($conn, $sqlInsert);
                
                if (! empty($results))
                {
                    $type = "success";
                    $message = "CSV Imported";
                    header('Location: search.php');
                }
                
                else
                {
                    $type = "error";
                    $message = "CSV Not Imported";
                }
                
            }
        }
    }*/
?>


<form action="import.php" method="post" enctype="multipart/form-data">
<input type="file" name="file1">
<input type="submit" value="Import">
<?php 
if (isset ($_FILES['file1'])) {
    echo "File uploaded";
    header('Location: search.php');
}

?>

</form>