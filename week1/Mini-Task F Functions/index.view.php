<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
        <tr>
            <td>Age</td>
        
            <td>Allowed In?</td>
        </tr>
        <?php
            foreach($ages as $age)
                echo "<tr> <td>" . $age . "</td> <td>" . (aboveAgeLimit($age) ? "&#9989" : "&#10060") . "</td> </tr>";
        ?>
    </table>
</body>
</html>