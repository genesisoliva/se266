<?php
    require_once "layouts/header.php";    
?>
<?php if (isset($_SESSION['error'])) { ?>
    <div class="alert alert-danger">
        <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        ?>
    </div>
<?php } ?>
<?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
        <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        ?>
    </div>
<?php } ?>

<?php

if (isset($_GET['manage']) && $_GET['manage'] == 'view') {

/***************************************************************
* VIEW PATIENTS
***************************************************************/

?>

<div class="panel panel-default patient-panel">
    <div class="panel-heading">
    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
        <?php echo language("patient-heading", $_SESSION['lang']); ?>
    </div>
    <div class="panel-body">
        <table class="table table-striped table-responsive table-hover text-center">
            <thead>
                <tr>
                    <th><?php echo language('id', $_SESSION['lang']); ?></th>
                    <!--<th><?php echo language('patients-firstName', $_SESSION['lang']); ?></th>
                    <th><?php echo language('patients-middleName', $_SESSION['lang']); ?></th>
                    <th><?php echo language('patients-lastName', $_SESSION['lang']); ?></th>-->
                    <th><?php echo language('patients-name', $_SESSION['lang']); ?></th>
                    <th><?php echo language('patients-dob', $_SESSION['lang']); ?></th>
                    <th><?php echo language('patients-creationTime', $_SESSION['lang']); ?></th>
                    <th><?php echo language('patients-gender', $_SESSION['lang']); ?></th>
                    <th><?php echo language('patients-nationality', $_SESSION['lang']); ?></th>
                    <th><?php echo language('patients-manage', $_SESSION['lang']); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM patients";
                $stmt = Connection::conn()->prepare($query);
                $stmt->execute();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    extract($row);
                    ?>
                    <tr>
                        <td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?manage=show&lang=<?php echo $selectedLang; ?>&id=<?php echo $id; ?>"><?php echo $id; ?></a></td>
                        <!--<td><?php echo $firstName; ?></td>
                        <td><?php echo $middleName; ?></td>
                        <td><?php echo $lastName; ?></td>-->
                        <td><?php echo "{$firstName} {$middleName} {$lastName}";?></td>
                        <td><?php echo $dob; ?></td>
                        <td><?php echo $creationTime; ?></td>
                        <td>
                            <?php
                            $subQuery = "SELECT gender FROM genders WHERE id = :gender_id";
                            $subStmt = Connection::conn()->prepare($subQuery);
                            $subStmt->bindParam(':gender_id', $gender_id, PDO::PARAM_INT);
                            $subStmt->execute();
                            extract($subStmt->fetch(PDO::FETCH_ASSOC));
                            echo $gender;
                            ?>
                        </td>
                        <td>
                            <?php
                            $subQuery = "SELECT nationality FROM nationalities WHERE id = :nationality_id";
                            $subStmt = Connection::conn()->prepare($subQuery);
                            $subStmt->bindParam(':nationality_id', $nationality_id, PDO::PARAM_INT);
                            $subStmt->execute();
                            extract($subStmt->fetch(PDO::FETCH_ASSOC));
                            echo $nationality;
                            ?>
                        </td>
                        <td>
                            <a href="patients.php?lang=<?php echo $selectedLang; ?>&manage=edit&id=<?php echo $id; ?>">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                <?php echo language('patient-edit', $_SESSION['lang']); ?>
                            </a>
                            <form action="patients.php?lang=<?php echo $selectedLang; ?>&manage=delete" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <span class="glyphicon glyphicon-trash"></span> <?php echo language("delete", $_SESSION['lang']); ?>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <a href="patients.php?lang=<?php echo $selectedLang; ?>&manage=add" class="btn btn-primary btn-lg">
            <i class="fa fa-user-plus fa-1x" aria-hidden="true"></i>
            <?php echo language('patients-add', $_SESSION['lang']); ?>
        </a>
    </div>
</div>

<?php } elseif (isset($_GET['manage']) && $_GET['manage'] == 'add') {

/***************************************************************
* ADD PATIENTS
***************************************************************/

?>
    <!-- ADDING PATIENT -->
    <div>
        <div class="alert alert-warning">
            <?php echo language('patients-fill-in-alert', $_SESSION['lang']); ?><br/><br/>
            <ul class="">
                <li class=""><?php echo language("patient-gender-fill-in-msg", $_SESSION['lang']); ?></li>
                <li class=""><?php echo language("patient-nationality-fill-in-msg", $_SESSION['lang']); ?></li>
                <li class=""><?php echo language("patient-natioinality-type-fill-in-msg", $_SESSION['lang']); ?></li>
            </ul>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
        <i class="fa fa-users fa-2x" aria-hidden="true"></i>
            <?php echo language('patients-add', $_SESSION['lang']); ?>
        </div>
        <div class="panel-body">
            <form action="patients.php?manage=store" method="POST" data-parsley-validate="" enctype="multipart/form-data">
                <div class="form-group">
                    <?php 
                        // $result;
                        //$today = date("m-d-Y H:i:s");
                        // echo $today; 
                    ?>
                        <label for="creationTime"><?php echo language('employees-creation', $_SESSION['lang']); ?></label>
                        <input type="datetime-local" id="dt" value="<?php echo isset($_SESSION['creationTime']) ? $_SESSION['creationTime'] : ''; ?>" class="form-control" name="creationTime" disabled/>
                            <script>
                                var now = new Date();
                                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                                document.getElementById('dt').value = now.toISOString().slice(0,16);
                            </script>

                </div>
                <div class="form-group">
                    <label for="firstName"><?php echo language('patients-firstName', $_SESSION['lang']); ?></label>
                    <input type="text" placeholder="<?php echo language('patients-firstName', $_SESSION['lang']); ?>"
                        value="<?php echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : ''; ?>" required=""
                        class="form-control" name="firstName" data-parsley-required="true" data-parsley-length="[1, 30]"
                    />
                </div>
                <div class="form-group">
                    <label for="middleName"><?php echo language("patients-middleName", $_SESSION['lang']); ?></label>
                    <input type="text" placeholder="<?php echo language('patients-middleName', $_SESSION['lang']); ?>"
                        value="<?php echo isset($_SESSION['middleName']) ? $_SESSION['middleName'] : ''; ?>"
                        class="form-control" name="middleName"
                    />
                </div>
                <div class="form-group">
                    <label for="lastName"><?php echo language("patients-lastName", $_SESSION['lang']); ?></label>
                    <input type="text" placeholder="<?php echo language('patients-lastName', $_SESSION['lang']); ?>"
                        value="<?php echo isset($_SESSION['lastName']) ? $_SESSION['lastName'] : ''; ?>" required=""
                        class="form-control" name="lastName" data-parsley-required="true" data-parsley-length="[1, 30]"
                    />
                </div>
                <div class="form-group">
                    <label for="passport_number"><?php echo language("patients-passport_#", $_SESSION['lang']); ?></label>
                    <input type="text" placeholder="<?php echo language('patients-passport_#', $_SESSION['lang']); ?>"
                        value="<?php echo isset($_SESSION['passport_number']) ? $_SESSION['passport_number'] : ''; ?>" required=""
                        class="form-control" name="passport_number" data-parsley-type="digits"
                        data-parsley-minlength="8" data-pasley-maxlength="9"
                    />
                </div>
                <div class="form-group">
                    <label for="dob"><?php echo language("patients-dob", $_SESSION['lang']); ?></label>
                    <input type="date" placeholder="<?php echo language('patients-dob', $_SESSION['lang']); ?>"
                        value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''; ?>" required=""
                        class="form-control" name="dob"/>
                </div>
                <div class="form-group">
                    <label for="image"><?php echo language("patients-image", $_SESSION['lang']); ?></label>
                    <input type="file" value="<?php echo isset($_SESSION['image']) ? $_SESSION['image'] : ''; ?>" 
                        name="image"
                    />
                </div>
                <div class="form-group">
                    <label for="notes"><?php echo language("patients-notes", $_SESSION['lang']); ?></label>
                    <input type="text" placeholder="<?php echo language('patients-notes', $_SESSION['lang']); ?>"
                        value="<?php echo isset($_SESSION['notes']) ? $_SESSION['notes'] : ''; ?>" 
                        class="form-control" name="notes"
                    />
                    <textarea placeholder="<?php echo language('patients-notes', $_SESSION['lang']); ?>" 
                    value="<?php echo isset($_SESSION['notes']) ? $_SESSION['notes'] : ''; ?>"  
                    class="form-control" name="notes" >
                    </textarea> 
                </div>
                <div class="form-group">
                    <label for="gender_id"><?php echo language("patients-gender", $_SESSION['lang']); ?></label>
                    <select name="gender_id" class="form-control" required="" data-parsley-required="true">
                    <option value=""></option>
                        <?php
                        $query = "SELECT * FROM genders ORDER BY id ASC";
                        $stmt = Connection::conn()->prepare($query);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $gender; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nationality_id"><?php echo language("patients-nationality", $_SESSION['lang']); ?></label>
                    <select name="nationality_id" class="form-control" required="" data-parsley-required="true">
                        <option value=""></option>
                        <?php
                        $query = "SELECT * FROM nationalities ORDER BY id ASC";
                        $stmt = Connection::conn()->prepare($query);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $nationality; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nationalityType_id"><?php echo language("patients-nationalityType", $_SESSION['lang']); ?></label>
                    <select name="nationalityType_id" class="form-control" required="" data-parsley-required="true">
                        <option value=""></option>
                        <?php
                        $query = "SELECT * FROM nationalityTypes ORDER BY id ASC";
                        $stmt = Connection::conn()->prepare($query);
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            extract($row);
                        ?>
                        <option value="<?php echo $id; ?>"><?php echo $type; ?></option>
                        <?php } ?>
                    </select>
                </div>
        </div>
        <div class="panel-footer">
                <input type="submit" value="<?php echo language('add', $_SESSION['lang']); ?>"
                    class="btn btn-primary btn-lg"/>
            </form>
        </div>
    </div>

<?php } elseif (isset($_GET['manage']) && $_GET['manage'] == 'store') {

/***************************************************************
* STORE PATIENT
***************************************************************/
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['creationTime']) && isset($_POST['firstName']) && isset($_POST['middleName']) && isset($_POST['lastName']) && isset($_POST['dob'])) {
            $creationTime = $_POST['creationTime'];
            
            $firstName = filter_var(testInput($_POST['firstName']), FILTER_SANITIZE_STRING);

            $middleName = filter_var(testInput($_POST['middleName']), FILTER_SANITIZE_STRING);

            $lastName = filter_var(testInput($_POST['lastName']), FILTER_SANITIZE_STRING);

            $passport_number = filter_var(testInput($_POST['passport_number']), FILTER_VALIDATE_INT);

            $passport_number = intval($passport_number);
            // image Validation
            $imageName = $_FILES['image']['name'];
            $imageSize = $_FILES['image']['size'];
            $imageTmp = $_FILES['image']['tmp_name'];
            $imageType = $_FILES['image']['type'];
            $imageAllowedExtensions = array('jpeg', 'jpg', 'png');
            $imageExtension = strtolower(end(explode('.', $imageName)));
            if (empty($imageName)) {
                $image = "no_image.png";
            }
            else {
                if (!in_array($imageExtension, $imageAllowedExtensions)) {
                    $_SESSION['error'] = language("image-extension-error", $_SESSION['lang']);
                    header('Location: patients.php?manage=add&lang='.$selectedLang);
                    die();
                }
                if ($imageSize > 4194304) {
                    $_SESSION['error'] = language("image-size-error", $_SESSION['lang']);
                    header('Location: patients.php?manage=add&lang='.$selectedLang);
                    die();
                }
                $image = time().'_'.$imageName;
                move_uploaded_file($imageTmp, "public/patients_thumbnails/".$image);
            }
            // notes Validation
            $notes = filter_var(testInput($_POST['notes']), FILTER_SANITIZE_STRING);
            // dob Validation
            $dob = testInput($_POST['dob']);
            if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dob)) {
                $_SESSION['error'] = language('dob-wrong-format-error', $_SESSION['lang']);
                header('Location: patients.php?manage=add&lang='.$selectedLang);
                die();
            }
            // Getting last data
            $gender_id = $_POST['gender_id'];
            $nationality_id = $_POST['nationality_id'];
            $nationalityType_id = $_POST['nationalityType_id'];
            try {
                $query = "INSERT INTO patients (firstName, middleName, lastName,
                    passport_number, dob, creationTime, image, notes, gender_id, nationality_id,
                    nationalityType_id)
                    VALUES (:firstName, :middleName, :lastName, :passport_number, :creationTime, :dob, :image,
                    :notes, :gender_id, :nationality_id, :nationalityType_id)";
                $stmt = Connection::conn()->prepare($query);
                $stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
                $stmt->bindParam(':middleName', $middleName, PDO::PARAM_STR);
                $stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
                $stmt->bindParam(':passport_number', $passport_number, PDO::PARAM_INT);
                $stmt->bindParam(':dob', $dob);
                $stmt->bindParam(':creationTime', $creationTime);
                $stmt->bindParam(':image', $image, PDO::PARAM_STR);
                $stmt->bindParam(':notes', $notes);
                $stmt->bindParam(':gender_id', $gender_id, PDO::PARAM_INT);
                $stmt->bindParam(':nationality_id', $nationality_id, PDO::PARAM_INT);
                $stmt->bindParam(':nationalityType_id', $nationalityType_id, PDO::PARAM_INT);
                $stmt->execute();
            } catch(PDOException $e) {
                dbError($stmt, 'patients.php?manage=add&lang='.$selectedLang);
                die();
            }
            $_SESSION['success'] = language('patients-add-success', $_SESSION['lang']);
            header('Location: patients.php?manage=view&lang='.$selectedLang);
            die();
        }
        else {
            $_SESSION['error'] = language('patients-required-fields', $_SESSION['lang']);
            header('Location: patients.php?manage=add&lang='.$selectedLang);
            die();
        }
    }
    else {
        $_SESSION['error'] = language('method_not_allowed_error', $_SESSION['lang']);
        header('Location: patients.php?manage=add&lang='.$selectedLang);
        die();
    }
    
} elseif (isset($_GET['manage']) && $_GET['manage'] == 'edit') {

/***************************************************************
* EDIT PATIENT
***************************************************************/

?>
    <?php
    if (isset($_GET['id'])) {
        $id = filter_var(testInput($_GET['id']), FILTER_VALIDATE_INT);
        $query = "SELECT * FROM patients WHERE id = :id";
        $stmt = Connection::conn()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount()) {
            extract($stmt->fetch(PDO::FETCH_ASSOC));
        ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                    <?php echo language('patient-edit', $_SESSION['lang']); ?>
                </div>
                <div class="panel-body">
                    <form action="patients.php?manage=update" method="POST" data-parsley-validate="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="patient_id">employee_id</label>
                            <input type="text" name="patient_id" class="form-control" placeholder="patient_id" value="<?php echo $_GET['id']; ?>"/>
                            <label for="oldimage">oldimage</label>
                            <input type="text" name="oldimage" class="form-control" placeholder="oldimage" value="<?php echo $image; ?>"/>
                        </div>

                        <div class="form-group">
                            <?php 
                                    $result;
                                    $string = date("Y-m-d H:i:s");//$today = date("m-d-Y H:i:s");
                                    echo "<br>\$string: {$string}";
                                    $dt = date('Y-m-d\TH:i', strtotime($string));
                                    echo "<br>\$dt: {$dt}<br>";?> <!--<input type="datetime-local" id="" value="<?php //echo $dt; ?>" class="form-control" name="" disabled/>-->

                                    <?php
                                if($creationTime) {
                                        echo "<br>\$creationTime: {$creationTime}<br>";
                                        $date = date('Y-m-d\TH:i', strtotime($creationTime));
                                        echo "\$creationTime: {$date}<br>";
                            ?>
                                <label for="creationTime"><?php echo language('employees-creation', $_SESSION['lang']); ?></label>
                                <input type="datetime-local" value="<?php echo $date; ?>" class="form-control" name="creationTime" disabled/>
                                <?php $date = $creationTime; 
                            echo "\$creationTime: {$creationTime}<br>";}?>
                        </div>
                        <div class="form-group">
                            <label for="modificationTime"><?php echo language('employees-modification', $_SESSION['lang']); ?></label>
                            <input type="datetime-local" id="dt" value="<?php echo $modificationTime; ?>" class="form-control" name="modificationTime" readonly="readonly"/>
                            <script>
                                var now = new Date();
                                now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
                                document.getElementById('dt').value = now.toISOString().slice(0,16);
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="firstName"><?php echo language('patients-firstName', $_SESSION['lang']); ?></label>
                            <input type="text" placeholder="<?php echo language('patients-firstName', $_SESSION['lang']); ?>"
                                value="<?php echo $firstName; ?>" required="" class="form-control"
                                name="firstName" data-parsley-required="true" data-parsley-length="[1, 30]"
                            />
                        </div>
                        <div class="form-group">
                            <label for="middleName"><?php echo language("patients-middleName", $_SESSION['lang']); ?></label>
                            <input type="text" placeholder="<?php echo language('patients-middleName', $_SESSION['lang']); ?>"
                                value="<?php echo $middleName; ?>" class="form-control" name="middleName"
                            />
                        </div>
                        <div class="form-group">
                            <label for="lastName"><?php echo language("patients-lastName", $_SESSION['lang']); ?></label>
                            <input type="text" placeholder="<?php echo language('patients-lastName', $_SESSION['lang']); ?>"
                                value="<?php echo $lastName; ?>" required=""
                                class="form-control" name="lastName" data-parsley-required="true" data-parsley-length="[1, 30]"
                            />
                        </div>
                        <div class="form-group">
                            <label for="passport_number"><?php echo language("patients-passport_number", $_SESSION['lang']); ?></label>
                            <input type="text" placeholder="<?php echo language('patients-passport_number', $_SESSION['lang']); ?>"
                                value="<?php echo $passport_number; ?>" required=""
                                class="form-control" name="passport_number" data-parsley-type="digits"
                                data-parsley-minlength="8" data-pasley-maxlength="9"
                            />
                        </div>
                        <div class="form-group">
                            <label for="dob"><?php echo language("patients-dob", $_SESSION['lang']); ?></label>
                            <input type="date" placeholder="<?php echo language('patients-dob', $_SESSION['lang']); ?>"
                            value="<?php echo $dob; ?>" required=""
                            class="form-control" name="dob"/>
                        </div>
                        <!--<div class="bootstrap-iso">
                            <div class="form-group">
                                <label for="dob"><?php //echo language("patients-dob", $_SESSION['lang']); ?></label>
                                <div class='input-group date' id='datetimepickerpatdob'>
                                    <input type='text' required="" data-parsley-required="true" name="dob" value="<?php //echo $dob; ?>"/>
                                    <span class="input-group-addon pull-left">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label for="image"><?php echo language("patients-image", $_SESSION['lang']); ?></lable>
                            <input type="file" name="image"/>
                        </div>
                        <div class="form-group">
                            <label for="notes"><?php echo language("patients-notes", $_SESSION['lang']); ?></label>
                            <input type="text" placeholder="<?php echo language('patients-notes', $_SESSION['lang']); ?>"value="<?php echo $notes; ?>" class="form-control" name="notes"/>
                            <textarea placeholder="<?php echo language('patients-notes', $_SESSION['lang']); ?>" 
                            value="<?php echo $notes; ?>"class="form-control" name="notes" >
                            </textarea> 
                        </div>
                        <div class="form-group">
                            <label for="gender_id"><?php echo language("patients-gender", $_SESSION['lang']); ?></label>
                            <select name="gender_id" class="form-control" required="" data-parsley-required="true">
                                <?php
                                $subQuery = "SELECT * FROM genders WHERE id = :id";
                                $subStmt = Connection::conn()->prepare($subQuery);
                                $subStmt->bindParam(':id', $gender_id, PDO::PARAM_INT);
                                $subStmt->execute();
                                $subRow = $subStmt->fetch(PDO::FETCH_ASSOC);
                                extract($subRow);
                                ?>
                                <option value="<?php echo $id; ?>"><?php echo $gender; ?></option>
                                <?php
                                $subQuery = "SELECT * FROM genders WHERE id != :id";
                                $subStmt = Connection::conn()->prepare($subQuery);
                                $subStmt->bindParam(':id', $gender_id, PDO::PARAM_INT);
                                $subStmt->execute();
                                while($subRow = $subStmt->fetch(PDO::FETCH_ASSOC)) {
                                    extract($subRow);
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $gender; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nationality_id"><?php echo language("patients-nationality", $_SESSION['lang']); ?></label>
                            <select name="nationality_id" class="form-control" required="" data-parsley-required="true">
                                <?php
                                $query = "SELECT * FROM nationalities ORDER BY id ASC";
                                $stmt = Connection::conn()->prepare($query);
                                $stmt->execute();
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row);
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $nationality; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nationalityType_id"><?php echo language("patients-nationalityType", $_SESSION['lang']); ?></label>
                            <select name="nationalityType_id" class="form-control" required="" data-parsley-required="true">
                                <?php
                                /*$subQuery = "SELECT * FROM nationalityTypes WHERE id = :id";
                                $subStmt = Connection::conn()->prepare($subQuery);
                                $subStmt->bindParam(':id', $nationality_id, PDO::PARAM_INT);
                                $subStmt->execute();
                                $subRow = $subStmt->fetch(PDO::FETCH_ASSOC);
                                extract($subRow);*/
                                ?>
                                <!--<option value="<?php //echo $id; ?>"><?php //echo $type; ?></option>-->
                                <?php
                                /*$subQuery = "SELECT * FROM nationalityTypes WHERE id != :id";
                                $subStmt = Connection::conn()->prepare($subQuery);
                                $subStmt->bindParam(':id', $nationalityType_id, PDO::PARAM_INT);
                                $subStmt->execute();
                                while ($subRow = $subStmt->fetch(PDO::FETCH_ASSOC)) {
                                    extract($subRow);
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $type; ?></option>
                                <?php } */?>
                                <?php
                                $query = "SELECT * FROM nationalityTypes ORDER BY id ASC";
                                $stmt = Connection::conn()->prepare($query);
                                $stmt->execute();
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    extract($row);
                                    ?>
                                    <option value="<?php echo $id; ?>"><?php echo $type; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                </div>
                <div class="panel-footer">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" value="<?php echo language('edit', $_SESSION['lang']); ?>"
                            class="btn btn-primary btn-lg">
                    </form>
                </div>
            </div>
        <?php } else {
            $_SESSION['error'] = language('id-not-found', $_SESSION['lang']);
            header('patients.php?lang='.$selectedLang);
            die();
        }
    }
    else {
        $_SESSION['error'] = language('id-required', $_SESSION['lang']);
        header('Location: patients.php?lang='.$selectedLang);
        die();
    }

} elseif (isset($_GET['manage']) && $_GET['manage'] == 'update') {

/***************************************************************
* UPDATE PATIENT
***************************************************************/

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['modificationTime']) && isset($_POST['firstName']) && isset($_POST['middleName']) && isset($_POST['lastName']) && isset($_POST['dob'])) 
        {
        $modificationTime = testInput($_POST['modificationTime']);
        // firstName Validation
        $firstName = filter_var(testInput($_POST['firstName']), FILTER_SANITIZE_STRING);

        $middleName = filter_var(testInput($_POST['middleName']), FILTER_SANITIZE_STRING);

        $lastName = filter_var(testInput($_POST['lastName']), FILTER_SANITIZE_STRING);

        $passport_number = filter_var(testInput($_POST['passport_number']), FILTER_VALIDATE_INT);
 
        $passport_number = intval($passport_number);
        // image Validation
        $imageName = $_FILES['image']['name'];
        $imageSize = $_FILES['image']['size'];
        $imageTmp = $_FILES['image']['tmp_name'];
        $imageType = $_FILES['image']['type'];
        $imageAllowedExtensions = array('jpeg', 'jpg', 'png');
        $imageExtension = explode('.', $imageName);
        $imageExtension = end($imageExtension);
        $imageExtension = strtolower($imageExtension);
        if (empty($imageName)) {
            // no image is uploaded, keep the old image as it is
            $image = $_POST['oldimage'];
        }
        else {
            // new image is uploaded
            if ($_POST['oldimage'] != 'no_image.png') {
                // new image is uploaded and the old image is not the default image
                // delete the old image if it exists
                if (file_exists('public/patients_thumbnails/'.$_POST['oldimage'])) {
                    unlink('public/patients_thumbnails/'.$_POST['oldimage']);
                }     
            }
            // validating the new image
            if (!in_array($imageExtension, $imageAllowedExtensions)) {
                $_SESSION['error'] = language("image-extension-error", $_SESSION['lang']);
                header('Location: patients.php?manage=edit&id='.$_POST['patient_id'].'&lang='.$selectedLang);
                die();
            }
            if ($imageSize > 4194304) {
                $_SESSION['error'] = language("image-size-error", $_SESSION['lang']);
                header('Location: patients.php?manage=edit&id='.$_POST['patient_id'].'&lang='.$selectedLang);
                die();
            }
            // storing the new image
            $image = time().'_'.$imageName;
            move_uploaded_file($imageTmp, "public/patients_thumbnails/".$image);
        }
        // notes Validation
        $notes = filter_var(testInput($_POST['notes']), FILTER_SANITIZE_STRING);
        // dob Validation
        $dob = testInput($_POST['dob']);
        if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dob)) {
            $_SESSION['error'] = language('dob-wrong-format-error', $_SESSION['lang']);
            header('Location: patients.php?manage=edit&id='.$_POST['patient_id'].'&lang='.$selectedLang);
            die();
        }
        // Getting last data
        $gender_id = $_POST['gender_id'];
        $nationality_id = $_POST['nationality_id'];
        $nationalityType_id = $_POST['nationalityType_id'];
        $id = $_POST['patient_id'];
        try {
            $query = "UPDATE patients SET firstName = :firstName, middleName = :middleName,
                lastName = :lastName,
                passport_number = :passport_number, dob = :dob, modificationTime = :modificationTime, image = :image, notes = :notes,
                gender_id = :gender_id, nationality_id = :nationality_id,
                nationalityType_id = :nationalityType_id WHERE id = :id";
            $stmt = Connection::conn()->prepare($query);
            $stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
            $stmt->bindParam(':middleName', $middleName, PDO::PARAM_STR);
            $stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
            $stmt->bindParam(':passport_number', $passport_number, PDO::PARAM_INT);
            $stmt->bindParam(':modificationTime', $modificationTime);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':image', $image, PDO::PARAM_STR);
            $stmt->bindParam(':notes', $notes);
            $stmt->bindParam(':gender_id', $gender_id, PDO::PARAM_INT);
            $stmt->bindParam(':nationality_id', $nationality_id, PDO::PARAM_INT);
            $stmt->bindParam(':nationalityType_id', $nationalityType_id, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            } catch(PDOException $e) {
                dbError($stmt, 'patients.php?manage=edit&id='.$_POST['patient_id'].'&lang='.$selectedLang);
                die();
            }
            $_SESSION['success'] = language('patients-updated-success', $_SESSION['lang']);
            header('Location: patients.php?manage=view&lang='.$selectedLang);
            die();
        }
        else {
            $_SESSION['error'] = language('patients-required-fields', $_SESSION['lang']);
            header('Location: patients.php?manage=edit&id='.$_POST['patient_id'].'&lang='.$selectedLang);
            die();
        }
    }
    else {
        $_SESSION['error'] = language('method_not_allowed_error', $_SESSION['lang']);
        header('Location: patients.php?manage=view&lang='.$selectedLang);
        die();
    }
} elseif (isset($_GET['manage']) && $_GET['manage'] == 'delete') {

/***************************************************************
* DELETE PATIENT
***************************************************************/

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['id'])) {
            $id = filter_var(testInput($_POST['id']), FILTER_VALIDATE_INT);
            try {
                $query = "DELETE FROM patients WHERE id = :id";
                $stmt = Connection::conn()->prepare($query);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                $_SESSION['success'] = language("patients-delete-success", $_SESSION['lang']);
                header('Location: patients.php?manage=view&lang='.$selectedLang);
                die();
            } catch (PDOException $e) {
                dbError($stmt, 'patients.php?manage=view&lang='.$selectedLang);
                die();
            }
        }
        else {
            $_SESSION['error'] = language('id-required', $_SESSION['lang']);
            header('Location: patients.php?manage=view&lang='.$selectedLang);
            die();
        }
    }
    else {
        $_SESSION['error'] = language('method_not_allowed_error', $_SESSION['lang']);
        header('Location: patients.php?manage=view&lang='.$selectedLang);
        die();
    }

} elseif (isset($_GET['manage']) && $_GET['manage'] == 'show') {

/***************************************************************
* PATIENT SHOW
***************************************************************/

    if (isset($_GET['id'])) {
        if (!filter_var(testInput($_GET['id']), FILTER_VALIDATE_INT)) {
            $_SESSION['error'] = language('page-not-found', $_SESSION['lang']);
            header('Location: patients.php?manage=view&lang='.$selectedLang);
            die();
        }
        $query = "SELECT * FROM patients WHERE id = :id";
        $stmt = Connection::conn()->prepare($query);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        if (!$stmt->rowCount()) {
            $_SESSION['error'] = language('patient-not-found', $_SESSION['lang']);
            header('Location: patients.php?manage=view&lang='.$selectedLang);
            die();
        }
        extract($stmt->fetch(PDO::FETCH_ASSOC));
        ?>
        <div class="panel panel-default patient-panel">
        <div class="panel-heading">
        <i class="fa fa-users fa-2x" aria-hidden="true"></i>
            <?php if ($_SESSION['lang']) {
                echo language('patient-profile', $_SESSION['lang']).' '.$firstName.' '.$middleName.' '.$lastName;
            } else {
                echo $firstName.' '.$middleName.' '.$lastName.''.language('patient-profile', $_SESSION['lang']);
            } ?>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4">
                    <img style="width: 50%; height: 50%;" class="pull-left" src="public/patients_thumbnails/<?php echo $image; ?>">
                </div>
                <div class="col-md-8">
                    <h4><span><?php echo language('id', $_SESSION['lang']).': </span><span>'.$id; ?></span></h4>
                    <h4><?php echo language('patients-firstName', $_SESSION['lang']).': '.$firstName; ?></h4>
                    <h4><?php echo language('patients-middleName', $_SESSION['lang']).': '.$middleName; ?></h4>
                    <h4><?php echo language('patients-lastName', $_SESSION['lang']).': '.$lastName; ?></h4>
                    <h4><?php echo language('patients-passport_number', $_SESSION['lang']).': '.$passport_number; ?></h4>
                    <h4><?php echo language('patients-dob', $_SESSION['lang']).': '.$dob; ?></h4>
                    <h4>
                        <?php
                            echo language('patients-gender', $_SESSION['lang']).': ';
                            $subQuery = "SELECT * FROM genders WHERE id = :gender_id";
                            $subStmt = Connection::conn()->prepare($subQuery);
                            $subStmt->bindParam(':gender_id', $gender_id, PDO::PARAM_INT);
                            $subStmt->execute();
                            extract($subStmt->fetch(PDO::FETCH_ASSOC));
                            echo $gender;
                        ?>
                    </h4>
                    <h4>
                        <?php
                            echo language('patients-nationality', $_SESSION['lang']).': ';
                            $subQuery = "SELECT * FROM nationalities WHERE id = :nationality_id";
                            $subStmt = Connection::conn()->prepare($subQuery);
                            $subStmt->bindParam(':nationality_id', $nationality_id, PDO::PARAM_INT);
                            $subStmt->execute();
                            extract($subStmt->fetch(PDO::FETCH_ASSOC));
                            echo $nationality;
                        ?>
                    </h4>
                    <h4>
                        <?php
                            echo language('patients-nationalityType', $_SESSION['lang']).': ';
                            $subQuery = "SELECT * FROM nationalityTypes WHERE id = :nationalityType_id";
                            $subStmt = Connection::conn()->prepare($subQuery);
                            $subStmt->bindParam(':nationalityType_id', $nationalityType_id, PDO::PARAM_INT);
                            $subStmt->execute();
                            extract($subStmt->fetch(PDO::FETCH_ASSOC));
                            echo $type;
                        ?>
                    </h4>
                </div>
            </div>
            <div class="panel panel-default"><div class="panel-heading"><?php echo language('patients-notes', $_SESSION['lang']).':'; ?></div><div class="panel-body"><?php echo $notes; ?></div></div>
        </div>
        <div class="panel-footer">
            <p>
                <?php echo language('created_at', $_SESSION['lang']).': '.$creationTime; ?>
            </p>
            <p>
                <?php
                    echo language('updated_at', $_SESSION['lang']).': ';
                    echo (isset($modificationTime)) ? $modificationTime : language('patient-not-updated-yet', $_SESSION['lang']);
                ?>
            </p>
            <p>
                <?php echo language('patients-manage', $_SESSION['lang']); ?>
            </p>
            <a href="patients.php?lang=<?php echo $selectedLang; ?>&manage=edit&id=<?php echo $_GET['id']; ?>">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                <?php echo language('patient-edit', $_SESSION['lang']); ?>
            </a>
            <form action="patients.php?lang=<?php echo $selectedLang; ?>&manage=delete" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-danger btn-sm">
                    <span class="glyphicon glyphicon-trash"></span> <?php echo language("delete", $_SESSION['lang']); ?>
                </button>
            </form>
        </div>
        </div>
        <!--Phone Numbers-->
        <div class="panel panel-default">
            <div class="panel-heading">
            <i class="fa fa-address-book-o fa-2x" aria-hidden="true"></i>
                <?php echo language('phoneNumbers', $_SESSION['lang']); ?>
            </div>
            <div class="panel-body">
                <?php
                    $subQuery = "SELECT * FROM phoneNumbers WHERE phoneOf_id = :id";
                    $subStmt = Connection::conn()->prepare($subQuery);
                    $subStmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
                    $subStmt->execute();
                    if ($subStmt->rowCount()) { ?>
                            <table class="table table-striped table-responsive table-hover text-center">
                                <thead>
                                    <tr>
                                        <th><?php echo language('phoneNumbers-number', $_SESSION['lang']); ?></th>
                                        <th><?php echo language('phoneNumbers-typeDiscriminator', $_SESSION['lang']); ?></th>
                                        <th><?php echo language('phoneNumbers-manage', $_SESSION['lang']); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while ($row = $subStmt->fetch(PDO::FETCH_ASSOC)) {
                                            extract($row);
                                    ?>
                                    <tr>
                                        <td><?php echo $number; ?></td>
                                        <td><?php echo $typeDiscriminator; ?></td>
                                        <td>
                                            <a href="phoneNumbers.php?lang=<?php echo $selectedLang; ?>&manage=edit&id=<?php echo $id; ?>">
                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                <?php echo language('phoneNumbers-edit', $_SESSION['lang']); ?>
                                            </a>
                                            <form action="phoneNumbers.php?lang=<?php echo $selectedLang; ?>&manage=delete" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <span class="glyphicon glyphicon-trash"></span> <?php echo language("delete", $_SESSION['lang']); ?>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                    <?php }
                    else { ?>
                        <h3><?php echo language('noPhoneNumbersFound', $_SESSION['lang']); ?></h3>
                    <?php }
                ?>
            </div>
            <div class="panel-footer">
                <a href="phoneNumbers.php?lang=<?php echo $selectedLang; ?>&manage=add&typeDiscriminator=<?php echo language('pat-typeDiscriminator', $_SESSION['lang']); ?>&phoneOf_id=<?php echo $_GET['id']; ?>" class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <?php echo language('phoneNumbers-add', $_SESSION['lang']); ?>
                </a>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
            <i class="fa fa-id-card-o fa-2x" aria-hidden="true"></i>
                <?php echo language('articles-heading', $_SESSION['lang']); ?>
            </div>
            <div class="panel-body">
                <?php
                    $subQuery = "SELECT * FROM articles WHERE patient_id = :patient_id";
                    $subStmt = Connection::conn()->prepare($subQuery);
                    $subStmt->bindParam(':patient_id', $_GET['id'], PDO::PARAM_INT);
                    $subStmt->execute();
                    if ($subStmt->rowCount()) { ?>
                        <table class="table table-striped table-responsive table-hover text-center">
                        <thead>
                            <tr>
                                <th><?php echo language('id', $_SESSION['lang']); ?></th>
                                <th><?php echo language('articles-price', $_SESSION['lang']); ?></th>
                                <th><?php echo language('articles-date', $_SESSION['lang']); ?></th>
                                <th><?php echo language('articles-patient', $_SESSION['lang']); ?></th>
                                <th><?php echo language('articles-transfer', $_SESSION['lang']); ?></th>
                                <th><?php echo language('articles-machine', $_SESSION['lang']); ?></th>
                                <th><?php echo language('articles-department', $_SESSION['lang']); ?></th>
                                <th><?php echo language('articles-manage', $_SESSION['lang']); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ($subRow = $subStmt->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td><a href="articles.php?manage=show&lang=<?php echo $selectedLang; ?>&id=<?php echo $subRow['id']; ?>"><?php echo $subRow['id']; ?></a></td>
                                <td><?php echo $subRow['price']; ?></td>
                                <td><?php echo $subRow['date']; ?></td>
                                <td>
                                    <?php echo $firstName.' '.$middleName.' '.$lastName; ?>
                                </td>
                                <td>
                                    <?php
                                        if (is_null($subRow['transfer_id'])) {
                                            echo language('not-transfered', $_SESSION['lang']);
                                        } else {
                                            $subSubQuery = "SELECT * FROM transfers WHERE id = :id";
                                            $subSubStmt = Connection::conn()->prepare($subSubQuery);
                                            $subSubStmt->bindParam(':id', $subRow['transfer_id'], PDO::PARAM_INT);
                                            $subSubStmt->execute();
                                            $subSubRow = $subSubStmt->fetch(PDO::FETCH_ASSOC);
                                            echo $subSubRow['name'];
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $subSubQuery = "SELECT * FROM machines WHERE id = :id";
                                        $subSubStmt = Connection::conn()->prepare($subSubQuery);
                                        $subSubStmt->bindParam(':id', $subRow['machine_id'], PDO::PARAM_INT);
                                        $subSubStmt->execute();
                                        $subSubRow = $subSubStmt->fetch(PDO::FETCH_ASSOC);
                                        // if Arabic is the language of the session
                                        if ($_SESSION['lang']) {
                                            echo $subSubRow['arName'];
                                        }
                                        // if English is the language of the session
                                        else {
                                            echo $subSubRow['enName'];
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $subSubQuery = "SELECT * FROM departments WHERE id = :id";
                                        $subSubStmt = Connection::conn()->prepare($subSubQuery);
                                        $subSubStmt->bindParam(':id', $subRow['department_id'], PDO::PARAM_INT);
                                        $subSubStmt->execute();
                                        $subSubRow = $subSubStmt->fetch(PDO::FETCH_ASSOC);
                                        echo $subSubRow['name'];
                                    ?>
                                </td>
                                <td>
                                    <a href="articles.php?lang=<?php echo $selectedLang; ?>&manage=edit&id=<?php echo $subRow['id']; ?>">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        <?php echo language('articles-edit', $_SESSION['lang']); ?>
                                    </a>
                                    <form action="articles.php?lang=<?php echo $selectedLang; ?>&manage=delete" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $subRow['id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <span class="glyphicon glyphicon-trash"></span> <?php echo language("delete", $_SESSION['lang']); ?>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <?php }
                    else {
                        echo language('no-articles-to-show', $_SESSION['lang']);
                    }
                ?>
            </div>
            <div class="panel-footer">
                <a href="articles.php?lang=<?php echo $selectedLang; ?>&manage=add&patient_id=<?php echo $_GET['id']; ?>"class="btn btn-primary btn-lg">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    <?php echo language('articles-add', $_SESSION['lang']); ?>
                </a>
            </div>
        </div>
    <?php }
    else {
        header('Location: patients.php?manage=view&lang='.$selectedLang);
        die();
    }

} else {
    header('Location: patients.php?manage=view&lang='.$selectedLang);
    die();
} ?>

<?php require_once "layouts/footer.php"; ?>