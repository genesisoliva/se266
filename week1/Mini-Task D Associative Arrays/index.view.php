<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Task D Associative Arrays</title>
</head>
<body>
    <h1>Mini-Task D Associative Arrays</h1>
<ul>
    <?php
        foreach($task as $key => $value)
            echo '<li style="margin:20px;"><strong>' . $key . "</strong> \t - \t" . $value . "</li>";
    ?> 
</ul>
</body>
</html>