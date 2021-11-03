<?php
  include_once __DIR__ . "/../models/model_schools.php";

  function insertSchools ($fname) {
     // code intentionally left out. Call addSchool in loop
    }
    
    function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    
    /*deleteAllSchools ();
    insertSchools ('../schools.csv');
    
    $r = getAllSchools ();
    var_dump ($r);
     * */
     
 ?>