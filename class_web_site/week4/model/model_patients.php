<?php

    include (__DIR__ . '/db.php');
    
    
    function getPatients () {
        global $db;
        
        
        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM tb_patients ORDER BY id"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }

    
    function addPatient($first, $last, $married, $birthdate) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO tb_patients SET patientFirstName = :patientFirstName, patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate");

        $binds = array(
            ":patientFirstName" => $first,
            ":patientLastName" => $last,
            ":patientMarried" => $married,
            ":patientBirthDate" => $birthdate
        );
        
        
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
   
    
    //   $result = addTeam2 ('Ajax', 'Eredivisie');
    //   echo $result;
    
    

?>

