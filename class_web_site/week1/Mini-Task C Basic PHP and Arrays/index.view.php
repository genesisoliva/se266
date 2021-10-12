<?php include __DIR__ . '/../header.php'; ?>

    <h1>Basic PHP and Arrays</h1>
    <ul>
        <?php
            foreach($animals as $animal)
            echo '<li>' . $animal . "</li>";
        ?> 
    </ul>

<?php include __DIR__ . '/../footer.php'; ?>
