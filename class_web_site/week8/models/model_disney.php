<?php

    include (__DIR__ . '/db.php');
    
    function addVote($charID)
    {
        global $db;
        $results = 'Data NOT Added';
        $stmt = $db->prepare("INSERT INTO DisneyVotes SET DisneyCharacterID = :charID");

        $stmt->bindValue(':charID', $charID);

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
    function getVotes()
    {
        global $db;
        $sql = "SELECT DisneyCharacterName, COUNT(*) AS VoteCount FROM DisneyCharacters c
            LEFT OUTER JOIN DisneyVotes v ON c.DisneyCharacterID=v.DisneyCharacterID
            GROUP BY DisneyCharacterName";
        $stmt = $db->query($sql);

        $votes = $stmt-> fetchAll(PDO::FETCH_ASSOC);
        $results[0] = array();
        $results[1] = array();

        foreach ($votes as $v)
        {
            array_push($results[0], $v['DisneyCharacterName']);
            array_push($results[1], $v['VoteCount']);
        }

        return json_encode($results);
    }
    function getCharacters()
    {
        global $db;
        $sql = "SELECT DisneyCharacterID, DisneyCharacterName, DisneyCharacterImage FROM disneycharacters";
        $stmt = $db->query($sql);

        $votes = $stmt-> fetchAll(PDO::FETCH_ASSOC);
        $results[0] = array();
        $results[1] = array();
        $results[2] = array();

        foreach ($votes as $v)
        {
            array_push($results[0], $v['DisneyCharacterID']);
            array_push($results[1], $v['DisneyCharacterName']);
            array_push($results[2], $v['DisneyCharacterImage']);
        }

        return json_encode($results);
    }