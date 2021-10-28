<?php
        include __DIR__ . '/../include/header.php';
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        $patients = getPatients();
?>
        <div>
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

            <a href="addPatient.php">Add Patient</a>
            
        </div>

<?php
    include __DIR__ . '/../include/footer.php';;
?>
