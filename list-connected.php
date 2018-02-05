<?php

$db_name="id1261733_connekt";
$mysql_user="id1261733_connekt_";
$mysql_pass="root1234";
$server_name="localhost";

$conn = mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
 // Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sqltran = mysqli_query($conn, "SELECT *   FROM connekt_table ")or die(mysqli_error($conn));
		$arrVal = array();
		$i=1;
 		while ($rowList = mysqli_fetch_array($sqltran)) {

						$name = array(
								'num' => $rowList['id'],
 	 		 	 				'imei_code'=> $rowList['imei_code'],
 	 		 	 				'active_time'=> $rowList['active_time'],
								'last_active_time' => $rowList['last_active_time'],
 	 		 	 				'type'=> $rowList['type']
 	 		 	 			);


							array_push($arrVal, $name);
			$i++;
	 	}
	 		 echo  json_encode($arrVal);


	 	mysqli_close($conn);
?>
