<!DOCTYPE html>
<?php
    include 'models/dbconnect.php';
    include 'models/functions.php';
    
    $results = '';
    
    $db = getDatabase();
    
    $stmt = $db->prepare("SELECT * FROM se266_genesis.DisneyCharacters;");
    
    $disneyChar = array();
    
    $stmt->execute() && $stmt->rowCount() > 0;
    $disneyChar = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <style type="text/css">
            .results {float: left; margin-right: 10px; border: 1px solid black; width: 400px; margin-top: 100px;} 
        </style>
        <title>Disney Votes</title>
    </head>
    <body>
        <div class="jumbotron">
            <h1><center>Disney Votes</center></h1>
        </div>
        <div class="container">
            <br />
            <?php foreach ($disneyChar as $row): ?>
                <br />
                <div class="container" style="border: 2px solid black; height: 450px; width: 450px; background-color: #FFECC3;">
                    <br />
                    <form method="post" action="vote.php">   
                        <input type="button" data-idx="<?php echo $row['DisneyCharacterID']?>" id="1"  class=" btn btn-info btn-lg"  value="vote for <?php echo $row['DisneyCharacterName']?>!"> 
                    </form>
                    <img src="images/<?php echo  $row['DisneyCharacterImage'] ; ?>" />
                </div>
            <?php endforeach; ?> 
            <?php echo $results ?>
            <div class="results">
                <h2>Voting Results</h2>
                <canvas id="myChart" ></canvas>
            </div>
        </div>
        <script>        
            function displayChart () {
             $.get ("vote.php", function (data) {
                 votes = JSON.parse (data);
                 console.log (votes);
                 new Chart(document.getElementById("myChart"), {
                     type: 'bar',
                     data: {
                       labels: votes[0],
                       datasets: [
                         {
                           label: "Number of Votes",
                           backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                           data: votes[1],
                           borderWidth: 10
                         }
                       ]
                     },
                     options: {
                       legend: { display: false },
                       title: {
                         display: false,
                         text: 'Number of Votes By Disney Character'
                       },
                       scales: {
                             yAxes: [{
                                 ticks: {
                                     beginAtZero:true
                                 }
                             }]
                         }
                     }
                 });
             })
         }
        $(document).ready (function (e) {
         displayChart ();

          $(":button").click (function (e) {
            var idx = $(this).data("idx");
            $.post ("vote.php", {DisneyCharacterId:idx}, function (data) {
                displayChart ();
            });
        });
        
    });
                
        </script>
    </body>
</html>