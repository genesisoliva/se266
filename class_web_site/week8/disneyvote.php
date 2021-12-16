<?php
    require __DIR__ . "/models/model_disney.php";
?>
<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vote for your favorite Disney Character</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

        <style type="text/css">
    .character {float: left; margin-right: 10px; border: 10px solid black; padding: 0px 10px 0px 0px; width: 300px;}
    .results {float: left; margin-right: 10px; border: 1px solid black; width: 400px; margin-top: 100px;}
    .button-size {width: 200px; height: 50px;}
    .button-div {margin: 10px 0px 10px 30px;}
    h2, h3 {margin-left: 50px;}
   
</style>
    </head>
<body>
    <div class="main">
        <h1>Vote for your favorite Disney Character</h1>
        <p>After voting results will show up</p>

        <span id="main">
</span>

        <div class="results" id = "chartContainer">
        </div>
    </div>
    </body>
</html>
<script>
    function displayVoteOptions (characters) 
    {
        characters = JSON.parse(characters)
        for (i=0; i<characters[0].length;i++) 
        {
            document.getElementById("main").innerHTML += '<div class="character"><h1>'+characters[1][i]+'</h1><img src="images/' + characters[2][i] +'"><div class="button-div"><input type="button" class="btn btn-success button-size" data-character-id="' + characters[0][i] +'" value = "Vote for ' + characters[1][i] + '"></div></div>';
        }
    }

    window.addEventListener('load', loadPage);

    function addButtonListeners() 
    {
        document.querySelectorAll('.btn').forEach(item => {
            item.addEventListener('click', insertVote);
        })
    };

    async function insertVote(event)
    {
        var id = event.target.getAttribute('data-character-id');

        const url = 'insertDisneyVote.php';
        const data = {charID : id};
    
        try {
            const response = await fetch(url, {
              method: 'POST',
              body: JSON.stringify(data),
              headers:{
                  'Content-Type': 'application/json'
              }
            });
            const json = await response.json(); 
        } catch (error) {
            console.error (error);
        }
        getVotes()
    }

    async function loadPage (event) {   
        const url = 'getDisneyCharacters.php';
    
        try {
            const response = await fetch(url, {
              method: 'GET'
            });
            const json = await response.json();
            displayVoteOptions (json);
            
          } catch (error) {
              console.error (error);
          }
          addButtonListeners();
    }

    async function getVotes (event) {   
        const url = 'getDisneyVotes.php';
    
        try {
            const response = await fetch(url, {
              method: 'POST'
            });
            const json = await response.json();
            drawGraph(json);
          } catch (error) {
              console.error (error);
          }          
    }

    function drawGraph(json)
    {
        json = JSON.parse(json);
        colors = [];

        document.getElementById("chartContainer").innerHTML = '<h2>Voting Results</h2><canvas id="myChart"></canvas>';

        new Chart(document.getElementById("myChart"), {
            scaleFontColor: "white",
            type: 'bar',
            data: {
                labels: json[0],
                datasets: [
                {
                    label: "Number of Votes",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                    data: json[1],
                    borderWidth: 10
                }
                ]
            },
            options: {
                legend: { 
                    //fontColor:"white",
                    display: false
                },
                label:{
                    //fontColor:"white"
                },
                title: {
                    display: false,
                    text: 'Number of Votes by Character'
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }],
                    xAxes: [{
                        ticks:{
                        }
                    }]
                }
            }
        })
    }

</script>