<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SE 266 Class Examples</h2>
<ul>
    <li><a href="week1/index.php">Week 1</a></li>
    <li><a href="week2/index.php">Week 2</a></li>
    <li><a href="week3/index.php">Week 3</a></li>
    <li><a href="week4/index.php">Week 4</a></li>
    <li><a href="week5/index.php">Week 5</a></li>
    <li><a href="week6/index.php">Week 6</a></li>
    <li><a href="week7/index.php">Week 7</a></li>
    <li><a href="week8/index.php">Week 8</a></li>
    <li><a href="week9/index.php">Week 9</a></li>
</ul>

<a href="class_web_site/site/index.php">Heroku Site</a>

</body>
</html>-->

<?php include("non-pages/php-include/top.php"); ?> <!-- MUST MANUALLY LINK TO top.php & USING ../ but use $upFolderPlaceHolder from now on -->
	    <h1 class="cent"><?php echo $pageTitle . $tagLine; ?></h1><!-- homepage can be special and also print the tagline if needed -->
	    
	    <p>Integer sodales tellus congue tortor imperdiet, ullamcorper vulputate lacus laoreet. Curabitur mollis rhoncus ex, quis volutpat orci sodales eu. Nunc augue ipsum, ullamcorper et fringilla sit amet, lacinia sit amet ante. Nam nulla leo, commodo vel semper in, egestas eu risus. Donec sed congue urna. Aliquam commodo porta mattis. Quisque vulputate sed nulla nec accumsan. Donec viverra libero ex, ultricies pellentesque libero tristique eget. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam et laoreet nulla. In scelerisque risus ligula, at sagittis massa vehicula in. Nam pretium augue in dui varius, ac pharetra enim feugiat. Nunc scelerisque sem sed gravida aliquam. Suspendisse sed dolor ligula. Aliquam molestie commodo tellus nec varius.</p>
	</main>

<?php include($upFolderPlaceholder . "non-pages/php-include/footer.php"); ?>
