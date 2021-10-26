<?php
        
        include __DIR__ . '/model/model_patients.php';
        include __DIR__ . '/functions.php';

       if (isPostRequest()) {
           $team = filter_input(INPUT_POST, 'team'); //id
           
           $division = filter_input(INPUT_POST, 'division'); //id
           
           $result = addPatient ($team, $division);
           
       }
    ?>
    

<html lang="en">
<head>
  <title>Add Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
   

    
<div class="container">
    
  <h2>Add Patient</h2>
  <form class="form-horizontal" action="addTeam.php" method="post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="team name">Team Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="team" placeholder="Enter team name" name="team">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Division:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="division" placeholder="Enter division" name="division">
      </div>
    </div>

    <hr>

    <div class="form-group">
      <label class="control-label col-sm-2" for="team name">First Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="team" placeholder="Enter team name" name="team">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="team name">Last Name:</label>

      <div class="col-sm-10">
        <input type="text" class="form-control" id="team" placeholder="Enter team name" name="team">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="team name">Married:</label>

    <div class="form-check-inline">
      <label class="form-check-label" for="radio1">
        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">Yes
      </label>
    </div>

    <div class="form-check-inline">
      <label class="form-check-label" for="radio2">
        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">No
      </label>
    </div>

    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="team name">Birth Date:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="team" placeholder="Enter team name" name="team">
      </div>
    </div>
    




    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Add Patient</button>
        <?php
            if (isPostRequest()) 
            {
                echo "Team added";
            }
        ?>
      </div>
    </div>

  </form>
  
  <div class="col-sm-offset-2 col-sm-10"><a href="./view.php">View All</a></div>
</div>

</body>
</html>