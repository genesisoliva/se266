<?php

    include (__DIR__ . '/db.php');
    
    function addSchool ($name, $city, $state) {
        global $db;
        $results = "";
        $stmt = $db->prepare("INSERT INTO schools SET schoolName = :name, schoolCity = :city, schoolState = :state");

        $binds = array(
            ":name" => htmlspecialchars ($name),
            ":city" => htmlspecialchars ($city),
            ":state" => htmlspecialchars ($state)
            
        );
            
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        if ($results == "") {
            var_dump ($binds);
            exit;
        }
        return ($results);
    }
    
   // I didn't use this function except for testing purposes
    function getAllSchools () {
        global $db;
        
        $results = [];
        $stmt = $db->prepare("SELECT id, schoolName, schoolCity, schoolState FROM schools");
 
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);               
         }
         
         return ($results);
    }
    
   function deleteAllSchools () {
       global $db;
       
       $stmt = $db->query("DELETE FROM schools;");
       return 0;
   }
   
   function checkLogin ($userName, $password) {
       // code deliberately left out
   }
   
   function getSchools ($name, $city, $state) {
       global $db;
       
       $binds = array();
       $sql = "SELECT * FROM schools WHERE 0=0 ";
       if ($name != "") {
            $sql .= " AND schoolName LIKE :schoolName";
            $binds['schoolName'] = '%'.$name.'%';
       }
       if ($city != "") {
           $sql .= " AND schoolCity LIKE :city";
           $binds['city'] = '%'.$city.'%';
       }
       if ($state != "") {
           $sql .= " AND schoolState LIKE :state";
           $binds['state'] = '%'.$state.'%';
       }
       
        
       $stmt = $db->prepare($sql);
      
        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return ($results);
   }
   
   $schools = getSchools ('New England', '', 'RI');
   
   var_dump ($schools);
  // $b = checkLogin('donald', 'duck');
   //if ($b) echo "Logged in"; else echo "Not logged in";
   
