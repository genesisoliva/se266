<?php

    include (__DIR__ . '/db.php');

    function getPatients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY patientFirstName"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }

    
    function addPatient ($f, $l, $m, $b) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :firstname, patientLastName = :lastname, patientMarried = :idk, patientBirthDate = :birthdate");

        $binds = array(
            ":firstname" => $f,
            ":lastname" => $l,
            ":idk" => $m,
            ":birthdate" => $b,
        );
        
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
   
   
    
    //   $result = addTeam2 ('Ajax', 'Eredivisie');
    //   echo $result;
    
    

?>

