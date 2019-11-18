<?php 
	include("connection.php");

	if (isset($_REQUEST['submit'])) {

		$name=$_REQUEST['adminname'];
		$userId=$_REQUEST['userid'];
		$password=$_REQUEST['pass'];
		$admin_type=$_REQUEST['admintype'];

		$result=mysqli_query($connect,"SELECT *  FROM `admin_infos` WHERE userid ='$name' AND type = '$type'");
   		$r=mysqli_num_rows ( $result );
   		if ($r>0) {
   			header("location:addSubAdmin.php?ar=1");
   		}else{
   			$query = "INSERT INTO `admin_infos` (`userid`, `password`, `name`, `type`) VALUES ('$userId', '$password', '$name', '$admin_type')";
				
			if (mysqli_query($connect,$query)) {
				header("location:addSubAdmin.php?suc=1");
			}else{
				header("location:addSubAdmin.php?err=1");
			}
   		}		
	}

?>