<?php
      //include __DIR__ . '/../include/header.php';
      include __DIR__ . '/model/model_patient.php';
      include __DIR__ . '/functions.php'; 
       ?>

<div class="container">
    
        <form class="form-horizontal" action="addPatient.php?type=patient" method="post">
            <h2><?=ucWords($action);?> Patient</h2>
            <input type="text" name="action" value="<?=$action;?>" hidden>
            <input type="text" name="id" value="<?=$id;?>" hidden> 
            <input type="text" name="type" value="patient" hidden>

            <div class="form-group">
                <label class="control-label col-sm-2" for="firstName">First Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="firstName" placeholder="" name="firstName" value="<?=$fName;?>"required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="middleName">Middle Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="middleName" placeholder="" name="middleName" value="<?=$mName;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="last name">Last Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="lastName" placeholder="" name="lastName" value="<?=$lName;?>"required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="last name">Married:</label>
                <div class="col-sm-10">
                <?php
                    if($action == "update")
                   {
                ?>
                    <input type="radio" name="married" value="1" <?=$married==1?"checked":"";?>>Yes
                    <input type="radio" name="married" value="0" <?=$married==0?"checked":"";?>>No
                <?php
                   } 
                   else 
                   {
                ?>
                    <input type="radio" name="married" value="1" <?=$married==1?"":"";?>required>Yes
                    <input type="radio" name="married" value="0" <?=$married==0?"":"";?>required>No
                <?php
                  }
                ?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="dob">Birth Date:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="birthDate" type="date" name="birthDate" value="<?=$bDay;?>"required/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="btnSubmit" class="btn btn-default"><?=ucWords($action);?> Patient</button>

                    <?php
                        if($action == "update")
                        {
                    ?>
                        <button type="submit" name="btnDelete" class="btn btn-default" <?=$action=="update"?"":"hidden";?>>Delete Patient</button>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <?php
            if (isPostRequest()) 
            {
                echo "<div>".$results."</div>";
            }
            ?>
            </div>
            </div>
        </form>

        <div class="col-sm-offset-2 col-sm-10"><a href="./viewPatients.php" id="viewPatientsBtn">View Patients</a></div>
    </div>

<?php 
      //include __DIR__ . '/../include/footer.php'; 
?>
