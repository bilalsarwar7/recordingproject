<?php if (!isset($_COOKIE["login"])) {
  header("location:adminlogin.php");
} 
include("connection.php");
$userid  = $_REQUEST['userid'];

if (isset($_REQUEST['submit'])) {
	$admin = $_REQUEST['admintype'];

	mysqli_query($connect,"UPDATE users SET admin = '$admin' WHERE userid ='$userid'");
	?>
	<script type="text/javascript">
        alert("Admin Updated");
    </script>
	<?php

}

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Android Recording</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Studies Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>
<!--header-->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
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
								<h1 style="font-size: 38px;float:left;font-weight: bold; font-family:Holiday;margin-top:8px;color: white">&nbsp;Android<span style="color: white;font-size: 18px;">&nbsp;Recording </span></h1>
							</div>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li ><a href="index.php"><b><span style="padding: 4px;border: 1px solid;font-family:Segoe UI;" data-hover="Admin-Home">Admin-Home</span></a></b></li>
									
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
	<!--header-->
			<!--contact-->

			<div class="contact-w3l">
				<div class="container">
					<div class="col-md-4 contact-left">
					</div>
					<div class="col-md-8 contact-left cont">
						<div class="contct-info">
							<h4>Update Admin</h4>
							<form  method="POST" >
								<div class="row">
									
									<div class="clearfix"></div>
									<div class="col-md-6 row-grid" style="margin-top: 25px;">
									<span style="font-weight: bold;">Select Admin:</span>
									<select name="admintype" class="sele" required>
										<option value="">-- Please select --</option>
							              <?php
							    
							                  $query = "SELECT * FROM `admin_infos`";
							                  $result = mysqli_query($connect, $query);
							                  if (mysqli_affected_rows($connect) != 0) {
							                      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							                      	if ($row['type'] != "super") {
							                      		 echo "<option value=" . $row['userid'] . ">" . $row['name'] . "</option>";	
							                      	}
							                          
							                      }
							                  }
							                  
							              ?>
									</select>
									</div>
              						
								</div><br><br>
								<input type="hidden" name="userid" value="<?php echo $_REQUEST['userid'] ?>">	
								<input type="submit" name="submit" value="Update" >
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--contact-->
		</div>

		<!--footer-->
			<div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid">
							<h4 style="font-family:indo;">About Us:</h4>
							<p> All the news you want.All in one place.
								<span>Pak News collect all the stories you want to read.So You no need to move from app to app</span></p>
						</div>
						<div class="col-md-4 footer-grid"></div>
						<div class="col-md-4 footer-grid">
						<h4 style="font-family:indo;">Information:</h4>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Chanab Chok Jangh Road, Faisalabad</li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+92 041-8868326-30</li>
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
