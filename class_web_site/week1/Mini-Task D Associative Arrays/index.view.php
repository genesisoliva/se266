<?php include __DIR__ . '\..\..\include\header.php'; ?>

    <h1>Mini-Task D Associative Arrays</h1>
<ul>
    <?php
        foreach($task as $key => $value)
            echo '<li>' . $key . " \t - \t" . $value . "</li>";
    ?> 
</ul>

<?php include __DIR__ . '\..\..\include\footer.php'; ?>