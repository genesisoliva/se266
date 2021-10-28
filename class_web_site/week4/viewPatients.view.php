<?php
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        $patients = getPatients();
?>
    <head>
        <title>Patients</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

        <div class="container">
            <div class="col-sm-offset-2 col-sm-10">
                <h1>Patients</h1>
                <a href="addPatient.php">Add Patient</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Married</th>
                    </tr>
            </thead>

            <tbody>
                <?php foreach ($patients as $row): ?>
                    <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['patientFirstName'];?></td>
                        <td><?= $row['patientLastName'];?></td>
                        <td><?= $row['patientBirthDate'];?></td>
                        <td><?= calcAge($row['patientBirthDate'])->format("%y Years");?></td>
                        <td><?= $row['patientMarried']==1?"Yes":"No";?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

            </table>

            <br />
            <a href="addPatient.php">Add Patient</a>
            
                </div>
            </div>
