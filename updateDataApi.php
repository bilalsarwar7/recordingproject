	<?php 
	if (isset($_REQUEST['imei'])) {
		include("connection.php");
		$name=$_REQUEST['userid'];
		$imei=$_REQUEST['imei'];
		$cellno=$_REQUEST['cell'];

		$query = "UPDATE `users` SET imei='$imei', cell_number='$cellno' WHERE userid ='$name'";
				
		if (mysqli_query($connect,$query)) {
			echo json_encode(array('result' => "1"));
		}else{
			echo json_encode(array('result' => "0"));
		}		
	}

?>	