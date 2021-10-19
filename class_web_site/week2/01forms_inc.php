<style type="text/css">
            .wrapper {
                display: grid;
                grid-template-columns: 180px 300px;
            }
            .label {
                text-align: right;
                padding-right: 10px;
                margin-bottom: 5px;
            }
            label {
            font-weight: bold;
            }
            input[type=text] {width: 80px;}
            .error {color: red;}
        </style>
    </head>
    <body>
        

        <form name="addNumbers" method="post" action="">
        <h2>Patient Intake Form</h2>

        <?php
            if ($error != ""):
        ?>
                
        <div class="error">
            <p>
                Please fix the following and resubmit
            </p>
            <?= $error; ?>
            
        </div>
        <?php
            endif;
        ?>

        <div class="wrapper">

            <div class="label">
                <label>First Name:</label>
            </div>
            <div>
                <input type="text" name="first_name" value="<?php echo $firstName; ?>">
            </div>
            <div class="label">
                <label>Last Name:</label>
            </div>
            <div>
                <input type="text" name="last_name" value="<?php echo $lastName; ?>">
            </div>
            <div class="label">
                <label>Married:</label>
            </div>
            <div>
                <input type="radio" name="married" value="yes" <?=(isset($_POST['married']) && $_POST['married'] == "yes") ? "checked" : ""; ?>>Yes
                <input type="radio" name="married" value="no" <?=(isset($_POST['married']) && $_POST['married'] == "no") ? "checked" : ""; ?>>No
            </div>

            <div class="label">
                <label>Birth Date:</label>
            </div>
            <div>
                <input type="date" name="birth_date" value="<?= $_POST['birth_date'] ?>">
            </div>

            <div class="label">
                <label>Height:</label>
            </div>
            <div>
            Feet: <input type="text" name="ft" value="<?php echo $ft; ?>" style="width:40px;">
            Inches: <input type="text" name="inches" value="<?php echo $inches; ?>" style="width:40px;">
            </div>

            <div class="label">
                <label>Weight (pounds):</label>
            </div>
            <div>
                <input type="text" name="weight" value="<?php echo $weight; ?>" style="width:40px;">
            </div>
            <input type="submit" name="add_numbers" value="Store Patient Information" />
            </div>

            <?php
                        if ($error == "") {
                            $tempBMI = round(bmi($ft, $inches, $weight), 2);
                            echo "
                            <h2>Summary</h2>
                         
                            <table border='1'>

                            <tr>
                            <th>First Name</th>
                            <td>" .$firstName ."</td>
                            </tr>

                            <tr>
                            <th>Last Name</th>
                            <td>" .$lastName ."</td>
                            </tr>

                            <tr>
                            <th>Conditions</th>
                            <td>" .$lastName ."</td>
                            </tr>

                            <tr>
                            <th>Status </th>
                            <td>" . ($married == "no" ? "Not " : "") . "Married</td>
                            </tr>

                            <tr>
                            <th>Date of Birth </th>
                            <td>" . $bDate . "</td>
                            </tr>

                            <tr>
                            <th>Age </th>
                            <td>" .age($bDate)." </td>
                            </tr>

                            <tr>
                            <th>Height</th>
                            <td>" .$ft. "ft " .$inches. " in</td>
                            </tr>

                            <tr>
                            <th>Weight</th>
                            <td>" .$weight." lbs </td>
                            </tr>

                            <tr>
                            <th>BMI</th>
                            <td>" . $tempBMI." </td>
                            </tr>

                            <tr>
                            <th>Description</th>
                            <td> " . bmiDescription($tempBMI)." </td>
                            </tr
                            
                            </table>";
                        }
                    ?>
        </form>