<?php
    error_reporting(E_ALL ^ E_WARNING);
    session_start();
    include __DIR__ . '/../include/header.php';
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";

    $users = getUsers();

    if (isPostRequest()) {
        $username = filter_input(INPUT_POST, 'userName');
        $PW = filter_input(INPUT_POST, 'password');
       
       // your logic here


    }


?>
    <form method="post" action="upload.php">
    <h3>Please Login</h3>
            <div class="rowContainer">
            User Name:<input type="text" name="userName" value="<?=$username="hi";?>">
            </div>
            <div class="rowContainer">
                Password:<input type="password" name="password" value="<?=$PW="bye";?>">
            </div>
              <div class="rowContainer">
                  <input type="submit" name="login" value="Login" class="btn btn-warning">
            </div>
            
        </form>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $row): ?>
                    <tr>
                        <td><?= $row['userId'];?></td>
                        <td><?= $row['userName']?></td>
                        <td><?= $row['userPassword'];?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        


</body>
</html>