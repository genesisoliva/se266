<?php
        include __DIR__ . '/../include/header.php';
?>
    <div class="container">
        
    <div class="col-sm-offset-2 col-sm-10">
        <h1>Patients</h1>
    
    <?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';
        $patient = getPatients();
        
        if (isPostRequest()) {
            $id = filter_input(INPUT_POST, 'patientID');
            deletePatient ($id);

        }

        
    ?>
  
    <table>
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>Last Name</th>
                    <th>Birth Date</db>
                    <th>Age</db>
                    <th>Married</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($patient as $row): ?>
                <tr>
                    <td>
                        <form action="view.php" method="post">
                            <button class="btn glyphicon glyphicon-trash" type="submit">DELETE</button>
                        </form>
                    </td>

                    <td>
                        <!--<input type="" name="patientID" value="<?php echo $row['id'];?>">-->
                        <?php echo $row['id'];?>
                    </td>

                    <td>
                        <?php echo $row['patientFirstName']; ?>
                    </td>

                    <td>
                        <?php echo $row['patientLastName']; ?>
                    </td>

                    <td>
                        <?php echo $row['patientBirthDate']; ?>
                    </td>

                    <td>
                        <?php echo age($row['patientBirthDate']); ?>
                    </td>

                    <td>
                        <?php 
                            if($row['patientMarried'] == 1)
                            {
                                $status = "YES";
                                echo $status;
                            }
                            else
                            {
                                $status = "NO";
                                echo $status; 
                            } 
                        ?>
                    </td> 

                    <td>
                        <a href="editPatients.php?action=update&id=<?php echo $row['id']; ?>">Edit</a>
                    </td>           
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        
        <br />
        <a href="editPatients.php?action=add">Add Patient</a>
    </div>
    </div>
    <?php
        include __DIR__ . '/../include/footer.php';
?>
