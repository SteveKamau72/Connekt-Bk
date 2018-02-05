<?php

include("./init.php");

  $imei_code =  $_GET["imei_code"];
  $type =  $_GET["type"];
  $active_time =  $_GET["active_time"];
  $last_active_time =  $_GET["last_active_time"];
  
  //insert sql
  $sql = "INSERT INTO connekt_table (imei_code, active_time, last_active_time, type)
  VALUES ('".$imei_code."','".$active_time."','".$last_active_time."','".$type."')";
  try {

    $conn->exec($sql);

    $response['message'] = 'Signed in Successfully!';
    $response['success'] = true;
  } catch(PDOException $e) {
    $response['message'] = $e->getMessage();
    $response['success'] = false;
  }

    echo json_encode($response);

  
?>
