<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>
		
		<?php
    error_reporting(E_ALL ^ E_WARNING);
    session_start();
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";

    $users = getUsers();

    if (isPostRequest()) {
        $username = filter_input(INPUT_POST, 'userName');
        $password = filter_input(INPUT_POST, 'password');
       
       // your logic here


    }

//page load process
        if(isset($_SESSION['use']))
        {
             header('Location: upload.php');
        }
        
        if(isset($_POST['login']))
        {
            
            $userName = $_POST["userName"];
            
            $password = $_POST["password"];
            
            
            $result = checkLogin($userName, $password);
            if($results = true){
                
                $_SESSION['use'] = $username;
                $deleteAllSchools = deleteAllSchools();
                
                header('Location: upload.php');
                
            }
            
            else
            {
                echo "Wrong Username or Password";
            }
            
        }

?>
<form method="post" action="index.php">
    <h3>Please Login</h3>
            <div class="rowContainer">
            User Name:<input type="text" name="userName" value="<?=$username="donald";?>">
            </div>
            <div class="rowContainer">
                Password:<input type="password" name="password" value="<?=$password="duck";?>">
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

	</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
