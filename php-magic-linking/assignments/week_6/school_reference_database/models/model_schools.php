<?php

    include (__DIR__ . '/db.php');

function IsValidUser($uname, $pword) {
    $db = getDatabase(); 
    $stmt = $db->prepare("SELECT * FROM users WHERE uname = :uname AND pword = :pword");

    $binds = array(
        ":uname" => $uname,
        ":pword" => $pword
    );
    
    $results = false;
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = true;
    } else {
        $results = false;
    }
    
    return $results;
}

    
    function insertSchoolsFromFile ($fname) {
        global $db;
        $i = 0;
       
        if (!file_exists($fname)) return false;

        deleteAllSchools();
        $file = fopen ($fname, 'rb');
        // ignore first line
        $row = fgetcsv($file);
        
        while (!feof($file) && $i++ < 10000) {
            $row = fgetcsv($file);
            $school = str_replace("'", "''", htmlspecialchars ($row[0]));
            $city = str_replace("'", "''", htmlspecialchars ($row[1]));
            $state = str_replace("'", "''", htmlspecialchars ($row[2]));

            $sql[] = "('" . $school . "' , '" . $city . "' , '" . $state. "')";
            // 1,000 records at a time
            if ($i % 1000 == 0) {
                $db->query('INSERT INTO schools (schoolName, schoolCity, schoolState) VALUES '.implode(',', $sql));
                $sql = array();
            }
        }
        if (count($sql)) {
            $db->query('INSERT INTO schools (schoolName, schoolCity, schoolState) VALUES '.implode(',', $sql));
        }

        return(true);
      }
   
    
   function deleteAllSchools () {
       global $db;
       
       $stmt = $db->query("DELETE FROM schools;");
       return 0;
   }
   
  
   function getSchoolCount() {
       global $db;

       $stmt = $db->query("SELECT COUNT(*) AS schoolCount FROM schools");
       $results = $stmt->fetch(PDO::FETCH_ASSOC);   
       return($results['schoolCount']);
   }
   function getSchools ($name, $city, $state) {
       global $db;
       
       $binds = array();
       $sql = "SELECT id, schoolName, schoolCity, schoolState FROM schools WHERE 0=0 ";
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
       
       $sql .= " ORDER BY schoolName ASC";

       $stmt = $db->prepare($sql);
      
        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return ($results);
   }
   
   
function getUsers () {
    global $db;
    
    $results = [];

    $stmt = $db->prepare("SELECT userId, userName, userPassword FROM users ORDER BY userid"); 
    
    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             
     }
     
     return ($results);
}
function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
