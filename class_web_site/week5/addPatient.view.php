<head>
    <title><?=ucWords($action);?> Patient</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<?php
      include __DIR__ . '/model/model_patients.php';
      include __DIR__ . '/functions.php'; ?>

<div class="container">
    
        <form class="form-horizontal" action="addPatient.php?type=patient" method="post">
            <h2><?=ucWords($action);?> Patient</h2>
            <input type="text" name="action" value="<?=$action;?>" hidden>
            <input type="text" name="id" value="<?=$id;?>" hidden> 
            <input type="text" name="type" value="patient" hidden>

            <div class="form-group">
                <label class="control-label col-sm-2" for="firstName">First Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="firstName" placeholder="" name="firstName" value="<?=$fName;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="last name">Last Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="lastName" placeholder="" name="lastName" value="<?=$lName;?>">
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
                    <input type="radio" name="married" value="1" <?=$married==1?"":"";?>>Yes
                    <input type="radio" name="married" value="0" <?=$married==0?"":"";?>>No
                <?php
                  }
                ?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="dob">Birth Date:</label>
                <div class="col-sm-10">
                    <input class="form-control" id="birthDate" type="date" name="birthDate" value="<?=$bDay;?>"/>
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
 
                    if (isPostRequest()) 
                    {
                        echo "<h1>".$results."</h1>";
                    }
                    ?>
                </div>
            </div>
        </form>

        <form class="form-horizontal" action="addPatient.php?type=measurements" method="post" <?=$action=="update"?"":"hidden";?>>
        <h2>Patient Measurements</h2>
            <input type="text" name="action" value="<?=$action;?>" hidden>
            <input type="text" name="id" value="<?=$id;?>" hidden> 
            <input type="text" name="type" value="measurement" hidden>

            <div class="form-group">
                <label class="control-label col-sm-2" for="height">Height:</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="height" maxlength="6" placeholder="inches" name="height">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="weight">Weight:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="weight" maxlength="6" placeholder="Pounds" name="weight">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="systolicBP">Blood Pressure:</label>
                <div class="col-sm-1">
                    <input type="text" class="form-control" id="systolicBP" maxlength="3" placeholder="mmHg" name="systolicBP">
                </div>

                <div class="col-sm-1">
                    <input type="text" class="form-control" id="diastolicBP" maxlength="3" placeholder="mmHg" name="diastolicBP">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="temp">Temperature:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="temp" maxlength="6" placeholder="Farenheit" name="temp">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" name="btnAddMeasure">Add Measurements</button>
                    <?php
                        if (isPostRequest()) 
                    {
                        echo "<h1>".$results."</h1>";
                    }
?>
                </div>
            </div>
        </form>
        <hr />

        <div class="col-sm-offset-2 col-sm-10"><a href="./viewPatients.php" id="viewPatientsBtn">View Patients</a></div>
        <br />


        <h2 <?=$action=="update"?"":"hidden";?>>Past Measurements</h2>
        <table class="table table-striped" id="formerResults" <?=$action=="update"?"":"hidden";?> border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <!--<th>Patient ID</th>-->
                    <th>Date</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Blood Pressure</th>
                    <th>Temperature</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($measurements)) : ?>
                    <?php foreach ($measurements as $row): ?>
                        <tr>
                            <td><?= $row['patientMeasurementId'];?></td>
                            <!--<td><?//= $row['patientId'];?></td>-->
                            <td><?= $row['patientMeasurementDate'];?></td>
                            <td><?= $row['patientWeight'];?></td>
                            <td><?= $row['patientHeight'];?></td>
                            <td><?= $row['patientBPSystolic'];?>/<?= $row['patientBPDiastolic'];?></td>
                            <td><?= $row['patientTemperature'];?></td>
                            <td>
                                <form method="post" action="addPatient.php">
                                <input type="hidden" name="patientMeasurementId" value="<?=$row['patientMeasurementId'];?>" />
                                <input type="hidden" name="action" value="<?=$action;?>" />
                                <input type="hidden" name="type" value="measurement" />
                            
                                <button class="btn glyphicon glyphicon-trash" name="deleteMeasurement" type="submit"></button>
                            </form>  
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
            </tbody>
        </table>
    </div>
