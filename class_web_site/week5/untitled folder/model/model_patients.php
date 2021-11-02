<?php
include (__DIR__ . '/db.php');

function getPatients() {
    global $db;
    $results = [];

    $stmt = $db->prepare("SELECT id, patientFirstName, patientLastName, patientMarried ,patientBirthDate FROM patients ORDER BY patientLastName");

    if($stmt->execute() && $stmt->rowCount() > 0){
        $results= $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}
//F = first name l = last name m = married b = birthdate
function addPatient($f, $l, $m, $b){
    global $db;
    $results = "Not added";


    $stmt = $db->prepare("INSERT INTO patients SET patientFirstName = :patientfirstname, patientLastName = :lastname, patientMarried = :married ,patientBirthDate = :birthdate");

    $binds = array(
        ":patientfirstname" => $f,
        ":lastname" => $l,
        ":married" => $m,
        ":birthdate" => $b
    );
   

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = "Data Added";
    }
}
function updatePatient($f, $l, $m, $b, $id)
{
    global $db;
    $results = "No rows edited";


    $stmt = $db->prepare("UPDATE patients SET patientFirstName = :firstname, patientLastName = :lastname, patientMarried = :married ,patientBirthDate = :birthdate WHERE id=:id" );
    $binds = array(
        ":id" => $id,
        ":firstname" => $f,
        ":lastname" => $l,
        ":married" => $m,
        ":birthdate" => $b
    );
    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = "Rows edited";
    }

    return $results;
}
function deletePatient($id){
    global $db;
    $results = "data was not deleted";
    $stmt = $db->prepare("DELETE FROM patients WHERE id=:id");
    $binds =  array(
        ":id"=> $id
    );

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = "Rows deleted";
    }

    return $results;

}
function getPatient ($id) {
    global $db;
   
   $result = [];
   $stmt = $db->prepare("SELECT id ,patientFirstName , patientLastName , patientMarried ,patientBirthDate FROM patients WHERE id=:id");
   $stmt->bindValue(':id', $id);
  
   if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                   
    }
    
    return ($result);
}
//updatePatient('TTTT', 'hh', 1,'2020-5-29', 13 );
//deletePatient(13);

function addPatientInfo($mID,$id, $md, $pw, $ph, $bps, $bpd)
{
    global $db;
    $results = "Not added";


    $stmt = $db->prepare("INSERT INTO patientMeasurements SET patientMeasurementId = :measurementsID, patientId = :patID, patientMeasurementDate = :measurementDate ,patientWeight = :patientweight, patientHeight = :patientheight, patientBPSystolic = :patientBPS, patientBPDialstolic = :patientBPD");

    $binds = array(
        ":measurementsID" => $mID,
        ":patID" => $id,
        ":measurementDate" => $md,
        ":patientweight" => $pw,
        ":patientheight" => $ph,
        ":patientBPS" => $bps,
        ":patientBPD" => $bpd
    );
   

    if($stmt->execute($binds) && $stmt->rowCount() > 0){
        $results = "Data Added";
    }
}
?>