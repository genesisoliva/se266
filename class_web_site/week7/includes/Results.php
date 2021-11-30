<table class="table table-striped" style="width:50%">
    <thead>
        <tr>
            <th>Patient #</th>
            <th>First Name</th>
			<th>M.</th>
			<th>Last Name</th>
<th>Married</th>
<th>Date of Birth</th>
<th></th>
<th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($patients as $row): ?>
            <tr>
     <td><?php echo $row['id']; ?></td>
     <td><?php echo $row['patientFirstName']; ?></td> 
<td><?php echo $row['patientMiddleName']; ?></td>				
<td><?php echo $row['patientLastName']; ?></td>
                          
<td><?php 
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
                            ?></td>
<td><?php echo $row['patientBirthDate']; ?></td>							
	<td><a href="patient.php?id=<?=$row['id']?>&action=update">edit
           <i class="icon-pencil"></i></a></td>
		   
<td><form action="" method="post">
                            <input type="hidden" name="patientID" value="<?php echo $row['id'];?>">
                            <button class="btn glyphicon glyphicon-trash" type="submit"></button>
                            </form></td>	

            </tr>
	
        <?php endforeach; ?>
    </tbody>
    </table>
	<br />
