<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Task E Booleans and Conditionals</title>
</head>
<body>
    <h1>Task for the Day</h1>
    <ul>
        <?php foreach ($task as $heading => $value) : ?>
        <li>
            <strong><?= $heading; ?</strong>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
