<?php 
if (!isset($_COOKIE["login"])) {
  header("location:adminlogin.php");
} 
include("connection.php");	
if (isset($_REQUEST['submit'])) {

    $date=$_REQUEST['edate'];
    $time = $_REQUEST['time'];
    $full_str = $date." ".$time;
    $id=$_REQUEST['userid'];
    $query = "UPDATE `register_users` SET expiry_date = '$full_str' WHERE id='$id'";
   
    if(mysqli_query($connect,$query)){
        ?>
        
        <script type="text/javascript">
        alert("Successfully Updated");
        </script>
        <?php
    }else{
    	echo mysql_error();
    }
}



?>
<!DOCTYPE html>
<html >
 <head>
<title>K1 fitness</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Studies Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!--js-->

</head>
  <body>


<!-- header -->
<!--header-->
		<div class="header">
			<div class="container">
				<nav class=" navbar-default">
					<div class="container-fluid con">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed m" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><a href="#" style="text-decoration: none;">
								<span class="sr-only">Toggle navigation</span>
								<span style="color: white;font-weight: bold;">Logout</span>
								</a>
							</button>
							<button type="button" class="navbar-toggle collapsed m" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<a href="admin.php" style="text-decoration: none;">
								<span style="color: white;font-weight: bold;">Home</span>
								</a>
							</button>				  
							<div class="navbar-brand">
								<h1 style="font-size: 38px;float:left;font-weight: bold; font-family: Holiday; margin-top:8px;color: white">&nbsp;K1<span style="color: white;font-size: 18px;">fitness </span></h1>
							</div>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li ><a href="admin.php"><b><span style="border: 1px solid; padding: 4px;font-family:Segoe UI;" data-hover="Admin-Home">Admin-Home</span></a></b></li>
									
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
	<!--header-->
<!-- header end -->
<br><br><br>
<div class="container" style="margin-bottom: 180px;">
	<div class="aw"><font class="font">ALL USERS. . .</font></div>
<table class="table table-striped table-bordered table-hover tb">
<tr>
    <th><font color="black" style="font-family:indo;">No.</font></th>
	<th><font color="black" style="font-family:indo;">Name</font></th>
	<th><font color="black" style="font-family:indo;">Email</font></th>
	<th><font color="black" style="font-family:indo;">Date</font></th>
	<th><font color="black" style="font-family:indo;">Expiry Date</font></th>
	<th><font color="black" style="font-family:indo;">Extend Expiry</font></th>
</tr>
<?php
	$i=1;
	$sql = "SELECT * FROM `register_users`";
	$result= mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_array($result)) {   
    	$ed = $row["expiry_date"];
    	$time = explode(" ", $ed);
?>
<form>
<tr>
    <td><font color="black"><?php echo $i++; ?></font> </td>
	<td><font color="black"><?php echo $row["name"];?></font></td>
	<td><font color="black"><?php echo $row["email"];?></font></td>
	<td><font color="black"><?php echo $row["date"];?></font></td>
	<td><font color="black"><input type="date" style="background: transparent;
    border: transparent;" id="datepicker" name="edate" value="<?php echo $time[0] ?>"></font></td>
	<td><font color="black"><button name="submit" style="background: #c60000; color: white;border: none;width: 100%;height: 40px;">Extend Expiry</button></font></td>
	<input type="hidden" name="userid" value="<?php echo $row['id']; ?>">
	<input type="hidden" name="time" value="<?php echo $time[1]; ?>">
</tr>
</form>
<?php
}
?>

</div>
</table>
</div>
<!--footer-->
			<div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-5 footer-grid">
							<h4 style="font-family:indo;">About Us:</h4>
							<p style="font-size: 12px;"> All the news you want.All in one place.
								<span>Pak News collect all the stories you want to read.So You no need to move from app to app</span></p>
						</div>
						<div class="col-md-2 footer-grid"></div>
						<div class="col-md-5 footer-grid">
						<h4 style="font-family:indo;">Information:</h4>
							<ul>
								<li style="font-size: 12px;"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Chanab Chok Jangh Road, Faisalabad </li>
								<li style="font-size: 12px;"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+92 041-8868326-30</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--footer-->
			<div class="copy-section">
				<div class="container">
					<div class="social-icons">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
				</div>
			</div>

</body>
</html>



