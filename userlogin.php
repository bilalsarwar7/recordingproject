<?php 
if (isset($_REQUEST["userid"])) {
   include("connection.php");

   $name=$_REQUEST["userid"];
   $password=$_REQUEST["password"];

   $password=$_REQUEST["password"];
   $result=mysqli_query($connect,"SELECT *  FROM `users` WHERE userid ='$name' AND password = '$password'");
   $r=mysqli_num_rows ( $result );
    if($r>0){
      echo json_encode(array('result' => "success"));
      }
    else{
      echo json_encode(array('result' => "fail"));
    }
}  
?>
