
<?php
      //include __DIR__ . '/../include/header.php';
      include __DIR__ . '/model/model_patients.php';
      include __DIR__ . '/functions.php';
      $patients = getPatients();
      
      if (isPostRequest()) 
      {
        $id = filter_input(INPUT_POST, 'patientID');
        deletePatient ($id);
    }
?>

<table class="table table-striped" border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthdate</th>
                    <th>Age</th>
                    <th>Married</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($patients as $row): ?>
                    <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['patientFirstName']?></td>
                        <td><?= $row['patientLastName'];?></td>
                        <td><?= $row['patientBirthDate'];?></td>
                        <td><?= calcAge($row['patientBirthDate'])->format("%y Years");?></td>
                        <td><?= $row['patientMarried']==1?"Yes":"No";?></td>
                        <!--<td>
                            <?php 
                               /* if($row['patientMarried'] == 1)
                                {
                                    $status = "Yes";
                                    echo $status;
                                }
                                else
                                {
                                    $status = "No";
                                    echo $status; 
                                }*/ 
                            ?>
                        </td>-->
                        <td>
                            <a class="editLink" href="addPatient.php?id=<?=$row['id']?>&action=update">
                                <i class="icon-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="viewPatients.php" method="post">
                            <input type="hidden" name="patientID" value="<?php echo $row['id'];?>">
                            <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br />
            <a href="addPatient.php?action=add" id="addBtn">Add Patient</a>

<?php 
      //include __DIR__ . '/../include/footer.php'; 
?>
