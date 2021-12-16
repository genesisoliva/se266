<?php

include (__DIR__ . '/models/model_disney.php');

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

if ($contentType === "application/json") {
  //Receive the RAW post data.
  $content = trim(file_get_contents("php://input"));

  $decoded = json_decode($content, true);

  //If json_decode failed, the JSON is invalid.
  if( is_array($decoded)) {
     // echo json_encode($decoded['team_name']);
      $id = $decoded['charID'];
      $results = addVote($id);
      echo json_encode ($results);
  } else {
    // Send error back to user.
  }
}

?>