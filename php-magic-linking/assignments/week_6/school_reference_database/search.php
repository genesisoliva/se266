<?php
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";
   
    
     $schoolName = "";
    $city = "";
    $state = "";
    if (isPostRequest()) {
    // your search logic goes here. Call getSchools with the appropriate arguments
      
    }
    include_once __DIR__ . "/includes/header.php";
?>

            <h2>Search Schools</h2>
            <form method="post" action="search.php">
                <div class="rowContainer">
                   <div class="col1">School Name:</div>
                   <div class="col2"><input type="text" name="schoolName" value="<?php echo $schoolName; ?>"></div> 
               </div>
               <div class="rowContainer">
                   <div class="col1">City:</div>
                   <div class="col2"><input type="text" name="city" value="<?php echo $city; ?>"></div> 
               </div>
               <div class="rowContainer">
                   <div class="col1">State:</div>
                   <div class="col2"><input type="text" name="state" value="<?php echo $state; ?>"></div> 
               </div>
                 <div class="rowContainer">
                   <div class="col1">&nbsp;</div>
                   <div class="col2"><input type="submit" name="search" value="Search" class="btn btn-warning"></div> 
               </div>
            </form>
            
            <p>This is where your search results go</p>

<table class="table table-striped">
            <thead>
                <tr>
                    <th>School</th>
                    <th>City</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
            
            <?php foreach ($getSchools as $row): ?>
                <tr>
                    <td><?php echo $row['schoolName']; ?></td>
                    <td><?php echo $row['schoolCity']; ?></td>
                    <td><?php echo $row['schoolState']; ?></td>
                </tr>
            <?php endforeach; ?>
              
            </tbody>
        </table>

            <?php
            
                include_once __DIR__ . "/includes/footer.php";
            ?>
        
