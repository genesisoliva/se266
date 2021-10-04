<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Task Info</h2>
<ul>
    <li><strong>Title</strong> || <?= $task["title"]; ?> </li>
    <br /> 
    <li><strong>Due</strong> || <?= $task["due"]; ?> </li> 
    <br />
    <li><strong>Assigned To</strong> || <?= $task["assignedTo"]; ?> </li> 
    <br />
    
    <li>
        <strong>Completed</strong> 
        <?= $task["completed"] ? "&#9989" : "&#10060" ?>
    </li> 
    <br /><br /><br />
</ul>
<!--This was added to show true case was easy copy/past with 1 edit-->
<ul style="list-style-type: circle;">
    <li><strong>Title</strong> || <?= $task2["title"]; ?> </li> 
    <br />
    <li><strong>Due</strong> || <?= $task2["due"]; ?> </li> 
    <br />
    <li><strong>Assigned To</strong> || <?= $task2["assignedTo"]; ?> </li> 
    <br />
    
    <li>
        <strong>Completed</strong> 
        <?= $task2["completed"] ? "&#9989" : "&#10060" ?>
    </li> 
</ul>
</body>
</html>