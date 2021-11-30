<?php
session_start();
    if($_SESSION['Login'] == false)
    {
        header("location: login.php");
	    exit;
    }
	include __DIR__ . '/models/model_patients.php';
	include __DIR__ . '/includes/functions.php';
  
	if (isPostRequest()) {
        $id = filter_input(INPUT_POST, 'patientID');
        deletePatient ($id);
         
    }
    $action = filter_input(INPUT_POST, 'action');
    $fieldName = filter_input(INPUT_POST, 'fieldName');
    $fieldValue = filter_input(INPUT_POST, 'fieldValue');
    if ( $action === 'sort' && $fieldName != '' ) {
            $patients = sortPatients ($fieldName, $fieldValue);   
    }
    else if ( $action === 'search' && $fieldName != '' ) {
            $patients = searchPatients ($fieldName, $fieldValue);
    } else {
        $patients = getPatients();  
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            <meta charset="UTF-8">
    <style type="text/css">
        body {margin-left: 20px;}
    </style>
        <title>Search and Sort</title>
    </head>
    <body>
	
        <?php
		include_once __DIR__ . "/includes/header.php";
		
		include __DIR__ . '/includes/searchForm.php';
            include __DIR__ . '/includes/sortForm.php';
            include __DIR__ . '/includes/Results.php';
			
			?>


            <a href="patient.php?action=add" id="addBtn">Add Patient</a>

		<?php
        include_once __DIR__ . "/includes/footer.php";
        ?>
    </body>
</html>
