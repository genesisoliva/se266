<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>
<?php
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";

    session_start();
    if (isset ($_FILES['file1'])) {
        // upload the file to uploads folder and then call insertSchoolsFromFile 
        
        //redirect to search.php
    echo "File uploaded";
    header('Location: search.php');
}

    include_once __DIR__ . "/header.php";

?>  
    <h2>Upload File</h2>
    <p>
        Please specify a file to upload and then be patient as the upload may take a while.
    </p>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file1">
        <input type="submit" value="Upload">

    </form>    

<?php
    include_once __DIR__ . "/footer.php";
?>
<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
