
<!DOCTYPE html>

<?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        $patients = getPatients();
?>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body id = "viewPatients">

        <ul>
            <li><a href="https://se266-oliva.herokuapp.com/">Home</a></li>
        </ul>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Married</th>
                    <th>Edit</th>
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

                        <td>
                            <!--<?= $row['patientMarried']==1?"Yes":"No";?>-->

                            <?php 
                            if($row['patientMarried'] == 1)
                            {
                                $status = "Yes";
                                echo $status;
                            }
                            else
                            {
                                $status = "No";
                                echo $status; 
                            } 
                            ?>

                        </td>

                        <td><a class="editLink" href="addPatient.php?id=<?=$row['id']?>&action=edit">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
            <a href="addPatient.php?action=add" id="addBtn">Add Patient</a>
    </body>
</html>