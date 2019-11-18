<?php 
if (isset($_REQUEST["add"])) {
   include("connection.php");

   session_start();

   $name=$_REQUEST["name"];
   $password=$_REQUEST["password"];
   $type = $_REQUEST["admintype"];

   $result=mysqli_query($connect,"SELECT *  FROM `admin_infos` WHERE userid ='$name' AND type = '$type'");
   $row=mysqli_fetch_array($result);
   $r=mysqli_num_rows ( $result );
    if($r>0){
      if ($row["password"]==$password) {
          $_SESSION["userid"] = $name;
          $_SESSION["type"] = $type;
          setcookie("login","1"); 
          if ($type == "super") {
               header("location:index.php"); 
          }else{
              header("location:subAdminIndex.php");
          }    
      } 
      else{
         header("location:adminlogin.php?err=1");
        }
      }
    else{
      header("location:adminlogin.php?err=1");
    }
}  
?>
