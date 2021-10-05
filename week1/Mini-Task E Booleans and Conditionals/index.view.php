<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Wk1: Mini-Task E: Booleans and Conditionals</h1>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Due</th>
        <th>Assigned To</th>
        <th>Status</th>
    </tr>
    <tr>
        <td><?= $task["title"]; ?></td>
        <td><?= $task["due"]; ?></td>
        <td><?= $task["assigned"]; ?></td>
        <td>
            <?php 
            if($task['completed'])
            {
                echo '&#10004;';
            }
            else
            {
                echo '&#11093;';
            }
            ?>
        </td>
    </tr>



</table>
</body>
</html>