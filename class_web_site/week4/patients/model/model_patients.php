<?php

    include (__DIR__ . '/db.php');
    
    
    function getPatients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY id"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
   
    function addPatient($first, $last, $married, $birthDate) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :patientFirstName,
         patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate");
       
        $stmt->bindValue(':patientFirstName', $first);
        $stmt->bindValue(':patientLastName', $last);
        $stmt->bindValue(':patientMarried', $married);
        $stmt->bindValue(':patientBirthDate', $birthDate);
        
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
       
        $stmt->closeCursor();
       
        return ($results);
    }
   
    
