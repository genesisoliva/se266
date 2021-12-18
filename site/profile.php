<?php require_once "layouts/footer.php"; ?>

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

if (isset($_GET['manage']) && $_GET['manage'] == 'view') {

/***************************************************************
* VIEW USER
***************************************************************/

?>
    <?php
    if (isset($_GET['id'])) {
        $id = filter_var(testInput($_GET['id']), FILTER_VALIDATE_INT);
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = Connection::conn()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount()) {
            extract($stmt->fetch(PDO::FETCH_ASSOC));
        ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo language('users-edit', $_SESSION['lang']); ?>
                </div>
                <div class="panel-body">
                    <form action="profile.php?manage=edit" method="POST" data-parsley-validate="">
                        <!--Username-->
                        <div class="form-group">
                            <label for="username"><?php echo language('users-username', $_SESSION['lang']); ?></label>
                            <input type="text" placeholder="<?php echo language('users-username', $_SESSION['lang']); ?>"
                                value="<?php echo $username; ?>" name="username" required="" class="form-control"
                                data-parsley-length="[4, 50]" data-parsley-required="true"
                            />
                        </div>
                        <!--Password-->
                        <div class="form-group">
                            <label for="password"><?php echo language('users-password', $_SESSION['lang']); ?></label>
                            <input type="password" placeholder="password" name="password" required="required" class="form-control"
                            data-parsley-length="[6, 100]" data-parsley-required="true"/>
                        </div>
                </div>
                <div class="panel-footer">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" value="<?php echo language('update', $_SESSION['lang']); ?>"
                            class="btn btn-primary btn-lg">
                    </form>
                </div>
            </div>
        <?php } else {
            $_SESSION['error'] = language('id-not-found', $_SESSION['lang']);
            header('profile.php?lang='.$selectedLang);
            die();
        }
    }
    else {
        $_SESSION['error'] = language('id-required', $_SESSION['lang']);
        header('Location: profile.php?lang='.$selectedLang);
        die();
    }

} elseif (isset($_GET['manage']) && $_GET['manage'] == 'edit') {

/***************************************************************
* EDIT USERS
***************************************************************/

?>
    <?php
    if (isset($_GET['id'])) {
        $id = filter_var(testInput($_GET['id']), FILTER_VALIDATE_INT);
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = Connection::conn()->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt->rowCount()) {
            extract($stmt->fetch(PDO::FETCH_ASSOC));
        ?>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo language('users-edit', $_SESSION['lang']); ?>
                </div>
                <div class="panel-body">
                    <form action="profile.php?manage=update" method="POST" data-parsley-validate="">
                        <!--Username-->
                        <div class="form-group">
                            <label for="username"><?php echo language('users-username', $_SESSION['lang']); ?></label>
                            <input type="text" placeholder="<?php echo language('users-username', $_SESSION['lang']); ?>"
                                value="<?php echo $username; ?>" name="username" required="" class="form-control"
                                data-parsley-length="[4, 50]" data-parsley-required="true"
                            />
                        </div>
                        <!--Password-->
                        <div class="form-group">
                            <label for="password"><?php echo language('users-password', $_SESSION['lang']); ?></label>
                            <input type="password" placeholder="password" name="password" required="required" class="form-control"
                            data-parsley-length="[6, 100]" data-parsley-required="true"/>
                        </div>
                </div>
                <div class="panel-footer">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" value="<?php echo language('update', $_SESSION['lang']); ?>"
                            class="btn btn-primary btn-lg">
                    </form>
                </div>
            </div>
        <?php } else {
            $_SESSION['error'] = language('id-not-found', $_SESSION['lang']);
            header('profile.php?lang='.$selectedLang);
            die();
        }
    }
    else {
        $_SESSION['error'] = language('id-required', $_SESSION['lang']);
        header('Location: profile.php?lang='.$selectedLang);
        die();
    }

} elseif (isset($_GET['manage']) && $_GET['manage'] == 'update') {

/***************************************************************
* UPDATE USER
***************************************************************/

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = filter_var(testInput($_POST['username']), FILTER_SANITIZE_STRING);
            $password = filter_var(testInput($_POST['password']), FILTER_SANITIZE_STRING);
            try {
                $query = "UPDATE users SET username = :username, password = :password WHERE id = :id";
                $stmt = Connection::conn()->prepare($query);
                $stmt->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt->bindParam(':password', Hash::password_hash_function($password), PDO::PARAM_STR);
                $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
                $stmt->execute();
            } catch(PDOException $e) {
                dbError($stmt, 'profile.php?manage=edit&id='.$_POST['id'].'&lang='.$selectedLang);
                die();
            }
            $_SESSION['success'] = language('users-update-success', $_SESSION['lang']);
            header('Location: profile.php?manage=view&lang='.$selectedLang);
            die();
        }
        else {
            $_SESSION['error'] = language('users-required', $_SESSION['lang']);
            header('Location: profile.php?manage=edit&id='.$_POST['id'].'&lang='.$selectedLang);
            die();
        }
    }
    else {
        $_SESSION['error'] = language('method_not_allowed_error', $_SESSION['lang']);
        header('Location: profile.php?manage=view&lang='.$selectedLang);
        die();
    }

else {
    header('Location: profile.php?manage=view&lang='.$selectedLang);
    die();
} ?>


<?php require_once "layouts/footer.php"; ?>
