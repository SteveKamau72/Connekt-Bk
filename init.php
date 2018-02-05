<?php
$db_name="id1261733_connekt";
$mysql_user="id1261733_connekt_";
$mysql_pass="root1234";
$server_name="localhost";

try {
	$conn = new PDO("mysql:host=$server_name;dbname=$db_name", $mysql_user, $mysql_pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    // die("OOPs something went wrong");
    $response['message'] =  "Connection failed: " . $e->getMessage();
    $response['success'] = false;
    echo json_encode($response);

    }

?>
