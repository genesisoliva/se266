
    <h2>Patient Intake Form</h2>
    <form name="patient" method="post" id="inputForm">
        <div class="wrapper">
            <div class="label">
                <label>First Name:</label>
            </div>
            <div>
                <input type="text" name="first_name" value="<?= isset($_POST["first_name"]) ? $_POST["first_name"] : '' ; ?>">
            </div>
            <br />
            <div class="label">
                <label>Last Name:</label>
            </div>
            <div>
                <input type="text" name="last_name" value="<?= isset($_POST['last_name']) ? $_POST['last_name'] : '' ; ?>">
            </div>
            <br />
            <div class="label">
                <label>Married:</label>
            </div>
            <div>
                <input type="radio" name="married" value="yes" <?=(isset($_POST['married']) && $_POST['married'] == "yes") ? "checked" : ""; ?>>Yes
                <input type="radio" name="married" value="no" <?=(isset($_POST['married']) && $_POST['married'] == "no") ? "checked" : ""; ?>>No
            </div>
            <br />
            <div class="label">
                <label>Conditions:</label>
            </div>
            <div>
                <input type="checkbox" name="conditions[]" value="High Blood Pressure" <?=(isset($_POST['conditions']) && in_array("High Blood Pressure", $_POST['conditions'])) ? "checked" : ""; ?>>
                    High Blood Pressure
                <input type="checkbox" name="conditions[]" value="Diabetes" <?=(isset($_POST['conditions']) && in_array("Diabetes", $_POST['conditions'])) ? "checked" : ""; ?>>
                    Diabetes
                <input type="checkbox" name="conditions[]" value="Heart Condition" <?=(isset($_POST['conditions']) && in_array("Heart Condition", $_POST['conditions'])) ? "checked" : ""; ?>>
                    Heart Condition
            </div>
            <br />
            <div class="label">
                <label>Birth Date:</label>
            </div>
            <div>
                <input type="date" name="birth_date" value="<?= isset($_POST['birth_date']) ? $_POST['birth_date'] : '' ; ?>">
            </div>
            <br />
            <div class="label">
                <label>Height:</label>
            </div>
            <div>
            Feet: <input type="text" name="ft" value="<?= isset($_POST['ft']) ? $_POST['ft'] : '' ; ?>" style="width:40px;">
            Inches: <input type="text" name="inches" value="<?= isset($_POST['inches']) ? $_POST['inches'] : 0 ; ?>" style="width:40px;">
            </div>
            <br />
            <div class="label">
                <label>Weight (pounds):</label>
            </div>
            <div>
                <input type="text" name="weight" value="<?= isset($_POST['weight']) ? $_POST['weight'] : '' ; ?>" style="width:40px;">
            </div>
            <div>
                &nbsp;
            </div>
            <div>
                <input type="submit" name="storePatient" value="Store Patient Information">
            </div>
        </div>       
    </form>
    <?php
        if(isset($_POST['storePatient']))
            submitClick();
            ?>