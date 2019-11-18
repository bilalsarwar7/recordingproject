<?php 

if (isset($_REQUEST['userid'])) {

	include 'connection.php';

	$query = "SELECT * FROM audio_location_data WHERE userid = '$userid'";

	$res = mysqli_query($connect,$query);

	$row = mysqli_fetch_array($res);
		
	echo json_encode(array('start_date' => $row['start_date'],'end_date' => $row['end_date'],'type' => $row['type']));
}
 ?>