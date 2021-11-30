<?php

    include (__DIR__ . '/db.php');
    
    function getPatients () {
    global $db;
    
    $results = [];

    $stmt = $db->prepare("SELECT id, patientFirstName, patientMiddleName, patientLastName, patientMarried, patientBirthDate FROM tb_patients ORDER BY id"); 
    
    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             
     }
     
     return ($results);
}
    
    
    function addPatient($first, $middle, $last, $married, $birthDate) {
    global $db;
    $results = "Not added";

    $stmt = $db->prepare("INSERT INTO tb_patients SET patientFirstName = :patientFirstName, patientMiddleName = :patientMiddleName,
     patientLastName = :patientLastName, patientMarried = :patientMarried, patientBirthDate = :patientBirthDate");
   
    $stmt->bindValue(':patientFirstName', $first);
    $stmt->bindValue(':patientMiddleName', $middle);
    $stmt->bindValue(':patientLastName', $last);
    $stmt->bindValue(':patientMarried', $married);
    $stmt->bindValue(':patientBirthDate', $birthDate);
    
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = 'Data Added';
    }
   
    $stmt->closeCursor();
   
    return ($results);
}
    


function updatePatient($id, $first, $middle, $last, $married, $birthDate) {
    global $db;

    $results = "Data NOT Updated";
    
    $stmt = $db->prepare("UPDATE tb_patients SET patientFirstName = :patientFirstName, patientMiddleName = :patientMiddleName,
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

    $stmt = $db->prepare("DELETE FROM tb_patients WHERE id=:id");
    
    $stmt->bindValue(':id', $id);
        
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = 'Data Deleted';
    }
    
    return ($results);
}
  

    function getPatient($id){
        global $db;
        
        $results = [];

        $stmt = $db->prepare("SELECT id, patientFirstName, patientMiddleName, patientLastName, patientMarried, patientBirthDate 
        FROM tb_patients WHERE id=:id"); 

        $stmt->bindValue(':id', $id);
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
         }
         
         return ($results);
}

  function searchPatients ($column, $searchValue) {
      global $db;
        
       $results = [];
       $stmt = $db->prepare("SELECT id, patientFirstName, patientMiddleName, patientLastName, patientMarried, patientBirthDate FROM tb_patients WHERE $column LIKE :search");
       $search = '%'.$searchValue.'%';
       $stmt->bindValue(':search', $search);
       
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
         }
         return ($results);
  }
  
    
  
  function sortPatients ($column, $order) {
      
       global $db;
       $results = [];
       $stmt = $db->prepare("SELECT id, patientFirstName, patientMiddleName, patientLastName, patientMarried, patientBirthDate FROM tb_patients ORDER BY $column $order");
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);             
         }
         return ($results);
  }


  
  function getFieldNames () {
      $fieldNames = ['id', 'patientFirstName', 'patientMiddleName', 'patientLastName', 'patientMarried', 'patientBirthDate'];
      
      return ($fieldNames);
      
  }
  
  
  function checkLogin ($userName, $password)
  {
    global $db;

    $stmt = $db->prepare("SELECT userId FROM tb_users WHERE userName =:userName AND userPassword = :password");
    $stmt->bindValue(':userName', $userName);
    $stmt->bindValue(':password', $password);

    $stmt->execute ();

    return( $stmt->rowCount() > 0);

  }
