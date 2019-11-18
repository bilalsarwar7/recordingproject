<?php 
	include("connection.php");

	if (isset($_REQUEST['submit'])) {

		$name=$_REQUEST['adminname'];
		$userId=$_REQUEST['userid'];
		$password=$_REQUEST['pass'];
		$admin=$_REQUEST['admintype'];


		$result=mysqli_query($connect,"SELECT *  FROM `users` WHERE userid ='$name'");
   		$r=mysqli_num_rows ( $result );
   		if ($r>0) {
   			header("location:addSubAdmin.php?ar=1");
   		}else{

   		}	
		$query = "INSERT INTO `users` (`name`, `userid`, `password`, `admin`, `imei`, `cell_number`) VALUES ('$name', '$userId', '$password', '$admin','no data','no data')";
				
		if (mysqli_query($connect,$query)) {
			header("location:registerAndroidUser.php?suc=1");
		}else{
			header("location:registerAndroidUser.php?err=1");
		}		
	}

?>