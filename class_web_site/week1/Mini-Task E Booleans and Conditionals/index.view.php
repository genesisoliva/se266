<?php include __DIR__ . '/../include/header.php'; ?>

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

<?php include __DIR__ . '/../include/footer.php'; ?>