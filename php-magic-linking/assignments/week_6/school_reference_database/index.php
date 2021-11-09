<?php include("../../../non-pages/php-include/top.php"); ?>
	    <h1 class="cent"><?php echo $pageTitle ?></h1>
		
		<?php
    error_reporting(E_ALL ^ E_WARNING);
    session_start();
    include_once __DIR__ . "/models/model_schools.php";
    include_once __DIR__ . "/includes/functions.php";

    $users = getUsers();

    if (isPostRequest()) {
       // $userName = filter_input(INPUT_POST, 'userName');
      //  $password = filter_input(INPUT_POST, 'password');
       
       // your logic here
if(isset($_POST['uname']) && isset($_POST['pword']) && $_POST['uname'] != "" && $_POST['pword'] != "")
{
$result = "";
$user = checkLogin(filter_input(INPUT_POST, 'uname'), sha1(filter_input(INPUT_POST, 'pword')));
if($user == true){
$_SESSION['User'] = filter_input(INPUT_POST, 'uname');
header('Location: upload.php');
}
else{
$result ="invalid";
}

}else{
$result ="please enter inputs";
}
   
}

?>
<form method="post" action="index.php">
    <h3>Please Login</h3>
            <div class="rowContainer">
            User Name:<input type="text" name="uname" value="<?=$username="donald";?>">
            </div>
            <div class="rowContainer">
                Password:<input type="password" name="pword" value="<?=$password="duck";?>">
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
