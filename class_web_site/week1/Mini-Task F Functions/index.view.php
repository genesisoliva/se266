<?php include __DIR__ . '\..\..\include\header.php'; ?>

<table border="1">
        <tr>
            <td>Age</td>
        
            <td>Allowed In?</td>
        </tr>
        <?php
            foreach($ages as $age)
                echo "<tr> <td>" . $age . "</td> <td>" . (aboveAgeLimit($age) ? "&#9989" : "&#10060") . "</td> </tr>";
        ?>
    </table>
    
    <?php include __DIR__ . '\..\..\include\footer.php'; ?>