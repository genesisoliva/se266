<?php 
    session_start();
    //include("../../../non-pages/php-include/top.php"); ?>
	    <!--<h1 class="cent"><?php echo $pageTitle ?></h1>-->
<?php
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";

    if($_SESSION['Login'] == false)
    {
        header("location:loginpage.php");
	    exit;
    }

    if (isset ($_FILES['file1']))
    {
        //upload the file to uploads folder and then call insertSchoolsFromFile 
        $tmp_name = $_FILES['file1']['tmp_name'];
        $path = getcwd() .DIRECTORY_SEPARATOR . 'uploads';
        $new_name = $path . DIRECTORY_SEPARATOR . $_FILES['file1']['name'];
        move_uploaded_file($temp_name, $new_name);
        insertSchoolsFromFile($new_name);

        //redirect to search.php
        header('Location: search.php');
        exit; 
    } 

    include_once __DIR__ . "/includes/header.php";

    ?>

    <h2>Upload File</h2>
    <p>Please specify a file to upload and then be patient as the upload may take a while.</p>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file1">
        <input type="submit" value="Upload">

    </form>    

<?php
    include_once __DIR__ . "/includes/footer.php";
?>
<?php //include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
