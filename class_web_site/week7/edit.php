
<?php
    session_start();
    if($_SESSION['Login'] == false)
    {
        header("location: login.php");
	    exit;
    }
      include __DIR__ . '/models/model_patients.php';
      include __DIR__ . '/includes/functions.php'; 
?>

<head>
    <title><?=ucWords($action);?> Patient</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<div class="container">
    
    <form class="form-horizontal" action="edit.php" method="post">
        <h2><?=ucWords($action);?> Patient</h2>
        <input type="text" name="action" value="<?=$action;?>" hidden>
        <input type="text" name="id" value="<?=$id;?>" hidden> 

        <div class="form-group">
            <label class="control-label col-sm-2" for="firstName">First Name:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="firstName" placeholder="" name="firstName" value="<?=$fName;?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="lastname">Middle Name:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="middleName" placeholder="" name="middleName" value="<?=$mName;?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="last name">Last Name:</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="lastName" placeholder="" name="lastName" value="<?=$lName;?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="last name">Married:</label>
            <div class="col-sm-10">
            <?php
                if($action == "update")
               {
            ?>
                <input type="radio" name="married" value="1" <?=$married==1?"checked":"";?>>Yes
                <input type="radio" name="married" value="0" <?=$married==0?"checked":"";?>>No
            <?php
               } 
               else 
               {
            ?>
                <input type="radio" name="married" value="1" <?=$married==1?"":"";?>>Yes
                <input type="radio" name="married" value="0" <?=$married==0?"":"";?>>No
            <?php
              }
            ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="dob">Birth Date:</label>
            <div class="col-sm-10">
                <input class="form-control" id="birthDate" type="date" name="birthDate" value="<?=$bDay;?>"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="btnSubmit" class="btn btn-default"><?=ucWords($action);?> Patient</button>

                <?php
                    if($action == "update")
                    {
                ?>
                    <button type="submit" name="btnDelete" class="btn btn-default" <?=$action=="update"?"":"hidden";?>>Delete Patient</button>
                <?php
                    }

                if (isPostRequest()) 
                {
                   echo "<h1>".$results."</h1>";
                }
                ?>
            </div>
        </div>

    </form>

    <div class="col-sm-offset-2 col-sm-10"><a href="./search.php">View Patients</a></div>


</div>