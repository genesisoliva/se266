
    <?php
        include __DIR__ . '/../include/header.php'; 
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        $patient = getPatients();
        
        if (isPostRequest()) {
            $id = filter_input(INPUT_POST, 'patientID');
            deletePatient ($id);

        }

        
    ?>
  <h1>Patients</h1>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>Last Name</th>
                    <th>Birthdate</db>
                    <th>Age</db>
                    <th>Married</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
           
            
            <?php foreach ($patient as $row): ?>
         
                <tr>
                    <td><?= $row['id'];?></td>
                    <td><?php echo $row['patientFirstName']; ?></td>
                    <td><?php echo $row['patientLastName']; ?></td>
                    <td><?php echo $row['patientBirthDate']; ?></td>
                    <td><?= calcAge($row['patientBirthDate'])->format("%y Years");?></td>
                    
                    <td>
                        <?php 
                            if($row['patientMarried'] == 1){
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
                     
                   
                    <td>
                        <a href="editPatients.php?action=update&id=<?php echo $row['id']; ?>">
                        <i class="icon-pencil"></i>
                        </a>
                    </td>

                    <td>
                        <form action="view.php" method="post">
                        <input type="hidden" name="patientID" value="<?php echo $row['id'];?>">
                        <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                        </form>
                    </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editPatients.php?action=add">Add Patient</a>
</body>
</html>