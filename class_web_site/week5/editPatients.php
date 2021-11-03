
<?php
        include __DIR__ . '/../include/header.php';
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
    
    if (isset($_POST['btnSubmit'])) {
        
      
        $temp = filter_input(INPUT_POST, 'temp');;
        $sysBP = filter_input(INPUT_POST, 'systolicBP');;
        $diaBP = filter_input(INPUT_POST, 'diastolicBP');;
        $feet = filter_input(INPUT_POST, 'feet');
        $inches = filter_input(INPUT_POST, 'inches');
        $weight = filter_input(INPUT_POST, 'weight');
    }
   
        if (isset($_GET['action'])) {
            $action = filter_input(INPUT_GET, 'action');
            $id = filter_input(INPUT_GET, 'id');
            if ($action == "update") {
                $row = getPatient($id);
                
                $firstName = $row['patientFirstName'];
                $lastName = $row['patientLastName'];
                $married = $row['patientMarried'];
                $birthDate = $row['patientBirthDate'];
            } else {
                $firstName = "";
                $lastName = "";
                $married = "";
                $birthDate = "";
            }
            
            
        } elseif (isset($_POST['action'])) {
            $action = filter_input(INPUT_POST, 'action');
            $id = filter_input(INPUT_POST, 'patientId');
            $firstName = filter_input(INPUT_POST, 'firstName');
            $lastName = filter_input(INPUT_POST, 'lastName');
            $married = filter_input(INPUT_POST, 'married');
            $birthDate = filter_input(INPUT_POST,'birthDate');
        } 
            
       
       if (isPostRequest() && $action == "add") {
       
           $result = addPatient ($firstName, $lastName,$married, $birthDate);
           header('Location: view.php');
           
       } elseif (isPostRequest() && $action == "update") {
            
         
           $result = updatePatient($firstName, $lastName,$married, $birthDate,$id);
           header('Location: view.php');
           
       }
    ?>

<div class="container">
<h2><?=ucWords($action);?> Patient</h2>
  <form class="form-horizontal" action="editPatients.php" method="post">
      <input type="text" name="action" value="<?php echo $action; ?>" hidden>
      <input type="text" name="patientId" value="<?php echo $id; ?>" hidden>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="first name">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" name="firstName" value="<?php echo $firstName; ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="last name">Last Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" name="lastName" value="<?php echo $lastName; ?>">
      </div>
    </div>

    <div class="form-group">
    <div style="margin-left:50px;">
    </div>
      <label class="control-label col-sm-2">Married:</label>
      <div class="col-sm-10">
        <?php
          if($married == 1)
          {
            echo "<input type='radio' name='arried' value='1'checked>Yes
            <input type='radio' name='married' value='0'>";
          }
          else
          {
            echo "<input type='radio' name='arried' value='1'>Yes
            <input type='radio' name='married' value='0' checked>No";
          }
      ?>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="birthdate">Birth Date:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="birthDate" value="<?php echo $birthDate; ?>"  name="birthDate">
      </div>
    </div>
    
    <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">

                    <button type="submit" name="btnSubmit" class="btn btn-default">
                        <?=ucWords($action);?> Patient
                    </button>

                    <?php
                    if (isPostRequest()) {
                        echo $results;
                    }
                    ?>
                </div>
            </div>
  </form>
  
</div>

<div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View patients</a></div>

<?php include __DIR__ . '/../include/footer.php'; ?>