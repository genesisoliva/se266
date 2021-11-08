<?php

    include (__DIR__ . '/db.php');
    
    
    function getPatients () {
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientMiddleName, patientLastName, patientMarried, patientBirthDate FROM patients ORDER BY id"); 
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                 
         }
         
         return ($results);
    }
   
    function addPatient($first, $middle, $last, $married, $birthDate) {
        global $db;
        $results = "Not added";

        $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :patientFirstName, patientMiddleName = :patientMiddleName,
         patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate");
       
        $stmt->bindValue(':patientFirstName', $first);
        $stmt->bindValue(':patientMiddlleName', $middle);
        $stmt->bindValue(':patientLastName', $last);
        $stmt->bindValue(':patientMarried', $married);
        $stmt->bindValue(':patientBirthDate', $birthDate);
        
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
       
        $stmt->closeCursor();
       
        return ($results);
    }

    function getPatient($id){
            global $db;
            
            $results = [];
    
            $stmt = $db->prepare("SELECT id, patientFirstName, patientMiddleName, patientLastName, patientMarried, patientBirthDate 
            FROM patients WHERE id=:id"); 

            $stmt->bindValue(':id', $id);
            
            if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
                 $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             }
             
             return ($results);
    }

    function updatePatient($id, $first, $middle, $last, $married, $birthDate) {
        global $db;

        $results = "Data NOT Updated";
        
        $stmt = $db->prepare("UPDATE patients SET patientFirstName = :patientFirstName, patientMiddleName = :patientMiddleName,
        patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':patientFirstName', $first);
        $stmt->bindValue(':patientMiddleName', $middle);
        $stmt->bindValue(':patientLastName', $last);
        $stmt->bindValue(':patientMarried', $married);
        $stmt->bindValue(':patientBirthDate', $birthDate);

      
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Updated';
        }
        
        return ($results);
    }

    function deletePatient ($id) {
        global $db;
        
        $results = "Data was not deleted";
    
        $stmt = $db->prepare("DELETE FROM patients WHERE id=:id");
        
        $stmt->bindValue(':id', $id);
            
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = 'Data Deleted';
        }
        
        return ($results);
    }
