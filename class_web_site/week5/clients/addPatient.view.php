<?php

include __DIR__ . '/model/model_patients.php';
include __DIR__ . '/functions.php';

if(isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id');
    $action = filter_input(INPUT_GET, 'action');
    $row = getPatient($id);
    $fName = $row[0]['patientFirstName'];
    $lName = $row[0]['patientLastName'];
    $married = $row[0]['patientMarried'];
    $bDay = $row[0]['patientBirthDate'];
    $measurements = getPatientMeasurements($id);
}
else {
    $id = "";
    $action = filter_input(INPUT_GET, 'action');
    $fName = "";
    $lName = "";
    $married = 0;
    $bDay = "";
}

if(isset($_POST['action'])){
    $action = filter_input(INPUT_POST, 'action');
    $type = filter_input(INPUT_POST, 'type');
    if(isPostRequest() && $type == "patient")
    {
        $fName = filter_input(INPUT_POST, 'firstName');
        $lName = filter_input(INPUT_POST, 'lastName');
        $married = filter_input(INPUT_POST, 'married');
        $bDay = filter_input(INPUT_POST, 'birthDate');

        if($action == "add")
        {
            $results = addPatient($fName, $lName, $married, $bDay);
        }
        else if($action == "edit")
        {
            $id = filter_input(INPUT_POST, 'id');

            if(isset($_POST['btnDelete']))
                $results = deletePatient($id);
            else if(isset($_POST['btnSubmit']))
                $results = updatePatient($id, $fName, $lName, $married, $bDay);
        }
    }
    else if(isPostRequest() && $type == "measurement")
    {
        if($action == "edit")
        {
            if(isset($_POST['btnAddMeasure']))
            {
                $id = filter_input(INPUT_POST, 'id');
                $weight = filter_input(INPUT_POST, 'weight');
                $height = filter_input(INPUT_POST, 'height');
                $systolicBP = filter_input(INPUT_POST, 'systolicBP');
                $diastolicBP = filter_input(INPUT_POST, 'diastolicBP');
                $temp = filter_input(INPUT_POST, 'temp');
                $results = addResults($id, $weight, $height, $systolicBP, $diastolicBP, $temp);
            }
            else if(isset($_POST['deleteMeasurement']))
            {
                $measureId = filter_input(INPUT_POST, 'patientMeasurementId');
                $results = deleteMeasurement($measureId);
            }
        }
    }

}
if(isset($results))
    header("Location: ../week5/viewPatients.php");

?>
<html lang="en">

<head>
    <title><?=ucWords($action);?> Patient</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body id="addPatient">

    <ul>
        <li><a href="https://se266-oliva.herokuapp.com/">Home</a></li>
    </ul>

    <div class="container">
        <h2>
            <?=ucWords($action);?> Patient
        </h2>
        
        <form class="form-horizontal" action="addPatient.php?type=patient" method="post">
            <input type="text" name="action" value="<?=$action;?>" hidden>
            <input type="text" name="id" value="<?=$id;?>" hidden> 
            <input type="text" name="type" value="patient" hidden> 
            <div class="form-group">
                <label class="control-label col-sm-2" for="first name">First Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="firstName" placeholder="Enter patient first name" name="firstName" value="<?=$fName;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="last name">Last Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="lastName" placeholder="Enter patient last name" name="lastName" value="<?=$lName;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="last name">Married:</label>
                <div class="col-sm-10">
                    <input type="radio" name="married" value="1" <?=$married==1?"checked":"";?>>Yes
                    <input type="radio" name="married" value="0" <?=$married==0?"checked":"";?>>No
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="dob">Birth Date:</label>
                <div class="col-sm-10">
                    <input id="birthDate" type="date" name="birthDate" value="<?=$bDay;?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btnSubmit" class="btn btn-default"><?=ucWords($action);?> Patient</button>
                    <button type="submit" name="btnDelete" class="btn btn-default" <?=$action=="edit"?"":"hidden";?>>Delete Patient</button>
                    <?php
                    if (isPostRequest()) {
                        echo $results;
                    }
                    ?>
                </div>
            </div>
        </form>
        <br />
        <br />
        <form class="form-horizontal" action="addPatient.php?type=measurements" method="post" <?=$action=="edit"?"":"hidden";?>>
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
                <!--Was having way too many problems getting "/" to display in right place and its nonessential-->
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
                    if (isPostRequest()) {
                        echo $results;
                    }
                    ?>
                </div>
            </div>
        </form>
        <hr />

        <div class="col-sm-offset-2 col-sm-10"><a href="./viewPatients.php" id="viewPatientsBtn">View Patients</a></div>
        <br />
        <h2 <?=$action=="edit"?"":"hidden";?>>Past Measurements</h2>
        <table class="table table-striped" id="formerResults" <?=$action=="edit"?"":"hidden";?>>
            <thead>
                <tr>
                    <th>Measurement ID</th>
                    <th>Patient ID</th>
                    <th>Date Taken</th>
                    <th>Weight</th>
                    <th>Height</th>
                    <th>Blood Pressure</th>
                    <th>Temperature</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($measurements)) : ?>
                    <?php foreach ($measurements as $row): ?>
                        <tr>
                            <td><?= $row['patientMeasurementId'];?></td>
                            <td><?= $row['patientId'];?></td>
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

</body>

</html>
