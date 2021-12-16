<?php
// Example functions for the Disney Character Voting app 

    include (__DIR__ . '/db.php');
    
    // Retrieves all Disney characters in the database
    function getCharacters ()
    {
         global $db;
         $stmt = $db->prepare("SELECT DisneyCharacterId, DisneyCharacterName, DisneyCharacterImage FROM DisneyCharacters ORDER BY DisneyCharacterName");

        $characters = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $characters = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return ($characters);
    }
    
   
    // Adds a vote for the charater whose ID is sent
    function insertDisneyVote ($character_id) {
        global $db;
        $stmt = $db->prepare("INSERT INTO DisneyVotes SET DisneyCharacterID = :character_id");
        $results = "Not added";
        $binds = array(
            ":character_id" => $character_id
        );


        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return (getVotes());
    }
    
    // Gets total of votes for each character
    function getVotes() 
    {
        global $db;
         $sql = "SELECT DisneyCharacterName, COUNT(*) AS VoteCount FROM DisneyCharacters c 
                LEFT OUTER JOIN DisneyVotes v ON c.DisneyCharacterID=v.DisneyCharacterID
                GROUP BY DisneyCharacterName ORDER BY v.DisneyCharacterID ";
        $stmt = $db->query ($sql);
       
       $votes = $stmt->fetchAll(PDO::FETCH_ASSOC);
       $results[0] = array(); // list characters
       $results[1] = array (); // number of votes for each character
    
        foreach ($votes as $v) {
            array_push($results[0], $v['DisneyCharacterName']);
            array_push($results[1], $v['VoteCount']);
        } 
       
        return (json_encode($results));
    }

    // run this code to test instering a vote
//    $test = insertDisneyVote (2);
//    echo $test;
   
