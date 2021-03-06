 <?php
    include __DIR__ . '/../include/header.php';
    include __DIR__ . '/model/model_patients.php';
    include __DIR__ . '/functions.php';
    
if (isPostRequest()) {
    $first = filter_input(INPUT_POST, 'firstName');
    $last = filter_input(INPUT_POST, 'lastName');
    $married = filter_input(INPUT_POST, 'married');
    $bDay = filter_input(INPUT_POST, 'birthDate');

    $result = addPatient($first, $last, $married, $bDay);
}

?>
    <div class="container">
        <h2>Patient Intake Form</h2>
        <form class="form-horizontal" action="addPatient.php" method="post">

            <div class="form-group">
                <label class="control-label col-sm-2" for="first name">First Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName" placeholder="Enter patient first name" name="firstName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="last name">Last Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastName" placeholder="Enter patient last name" name="lastName">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="last name">Married:</label>
                <div class="col-sm-10">
                    <input type="radio" name="married" value="1">Yes
                    <input type="radio" name="married" value="0">No
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="dob">Birth Date:</label>
                <div class="col-sm-10">
                    <input id="birthDate" type="date" name="birthDate" />
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Add Patient</button>
                    <?php
                    if (isPostRequest()) {
                        echo "Patient added";
                    }
                    ?>
                </div>
            </div>

        </form>

        <div class="col-sm-offset-2 col-sm-10">
            <a href="./viewPatients.php" id="viewPatientsBtn">View Patients</a>
        </div>
    </div>

<?php
    include __DIR__ . '/../include/footer.php';;
?>

