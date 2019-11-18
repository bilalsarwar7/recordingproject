<?php if (!isset($_COOKIE["login"])) {
  header("location:adminlogin.php");
}  ?>
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

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
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
									<li ><a href="logout.php"><b><span style="padding: 4px;font-family:indo;" data-hover="Log-out">Log-out</span></a></b></li>
									
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
	<!--header-->
	<!--body-->	
	<div class="lates" style="margin-top:94px;margin-bottom: 94px;">
		<div class="container">
			<a href="addSubAdmin.php">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" style="background:silver;margin:45px;">
            		<h3 class="glyphicon glyphicon-folder-open"> ADD Admin </h3><br><br><br>
			    </div>
			</a>
			<a href="viewpost.php">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" style="background:silver;margin:45px;">				
					<h3 class="glyphicon glyphicon-folder-open"> View Users </h3><br><br><br>
			    </div>
			</a>
		</div>
		<div class="container">
			<a href="registerAndroidUser.php">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" style="background:silver;margin:45px;">
            		<h3 class="glyphicon glyphicon-folder-open"> ADD Users </h3><br><br><br>
			    </div>
			</a>
			<a href="viewAdmins.php">
				<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" style="background:silver;margin:45px;">
            		<h3 class="glyphicon glyphicon-folder-open"> View Admins </h3><br><br><br>
			    </div>
			</a>
		</div>
	</div>
<!--body end-->
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
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Chanab Chok Jangh Road, Faisalabad </li>
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
