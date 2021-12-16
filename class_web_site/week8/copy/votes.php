<?php

 include 'models/dbconnect.php';
 include 'models/functions.php';
 
 $db = getDatabase();

 if (isset($_POST['DisneyCharacterId'])) {
    $stmt = $db->prepare("INSERT INTO disneyvotes SET DisneyCharacterId=:DisneyCharacterId, VoterIp=:VoterIP, VoterDateTime=NOW()");


    $DisneyCharacterId  = filter_input(INPUT_POST, 'DisneyCharacterId');
    
    $ip = getIpAddress();
    
    $binds = array(
    ":DisneyCharacterId" => $DisneyCharacterId,
    ":VoterIP" => $ip
    );

    if ($stmt->execute($binds)) {
        $results = 'Data Added';   
    } 
    
} else { 
    
    $stmt = $db->prepare(" SELECT DisneyCharacterName, COUNT(*) AS VoteCount
                            FROM DisneyCharacters c LEFT OUTER JOIN DisneyVotes v ON c.DisneyCharacterID=v.DisneyCharacterID
                            GROUP BY DisneyCharacterName");
 
    $votes = array();
    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $votes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    $a = array();
    $b = array();
    
    foreach ($votes as $s) {
        array_push  ($a, $s['DisneyCharacterName']);
        array_push($b, $s['VoteCount']);
    }
    
    $results = array();
    
    $results[0] = $a;
    $results[1] = $b;
    
    echo json_encode($results);
}
  
?>