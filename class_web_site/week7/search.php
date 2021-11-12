<?php
    include_once __DIR__ . "/models/model_patients.php";
    include_once __DIR__ . "/includes/functions.php";
   
    session_start();

    if($_SESSION['Login'] == false)
    {
        header("location: login.php");
	    exit;
    }

    $firstName = "";
    $lastName = "";
    $married = "";
    
    $patientResults = [];

    if($_SESSION['Login'] == false)
    {
        header("location: login.php");
	    exit;
    }

    if (isPostRequest()) {

        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $married = filter_input(INPUT_POST, 'married');
    
        $patientResults = getPatientsSearch($firstName, $lastName, $married);

        $id = filter_input(INPUT_POST, 'patientID');
        deletePatient ($id);
         
    }  

    include_once __DIR__ . "/includes/header.php";
?>

<h2>Patient Search</h2>
            <form method="post" action="search.php">

                <div class="rowContainer">
                   <label class="col1">First Name:</label>
                   <div class="col2"><input type="text" name="firstName" value="<?php echo $firstName; ?>"></div> 
               </div>

               <div class="rowContainer">
                   <label class="col1">Last Name:</label>
                   <div class="col2"><input type="text" name="lastName" value="<?php echo $lastName; ?>"></div> 
               </div>

               <div class="rowContainer">
                   <label class="col1">Married:</label>
                   <div class="col2">
                        <input type="radio" name="married" value="1" <?=$married==1?"":"";?>><label>Yes</label>
                        <input type="radio" name="married" value="0" <?=$married==0?"":"";?>><label>No</label>
                    </div> 
               </div>

                 <div class="rowContainer">
                   <div class="col1">&nbsp;</div>
                   <div class="col2"><input type="submit" name="search" value="Search" class="btn btn-warning"></div> 
               </div>
            </form>
            
            <p>This is where your search results go</p>

            <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Marital Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            
            <?php foreach ($patientResults as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['patientFirstName']; ?></td>
                    <td><?php echo $row['patientLastName']; ?></td>
                    <td><?= $row['patientMarried']==1?"Yes":"No";?></td>

                    <td>
                        <a href="edit.php?id=<?=$row['id']?>&action=update">
                            <i class="icon-pencil">Button</i>
                        </a>
                    </td>
                    
                    <td>
                        <form action="search.php" method="post">
                            <input type="hidden" name="patientID" value="<?php echo $row['id'];?>">
                            <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

              
            </tbody>
        </table>

        <a href="edit.php?action=add" id="addBtn">Add Patient</a>