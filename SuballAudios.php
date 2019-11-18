<?php 
if (!isset($_COOKIE["login"])) {
  header("location:adminlogin.php");
} 
include("connection.php");	
session_start();
$userid  = $_REQUEST['userid'];
if (isset($_REQUEST['submit'])) {
	
	$start  = $_REQUEST['start'];
	$end  = $_REQUEST['end'];

	$result=mysqli_query($connect,"SELECT *  FROM `audio_location_data` WHERE userid ='$userid'");
   	$r=mysqli_num_rows ( $result );
   	$row = mysqli_fetch_array($result);
   	if ($r>0) {
   		if ($r<=2) {
   			if ($row['start_date']!="") {
   			?>
   			<script type="text/javascript">
            	alert("Request Already Sent");
        	</script>
   			<?php
   		}else{
   			mysqli_query($connect,"INSERT INTO `audio_location_data` (`userid`, `start_date`, `end_date`, `type`) VALUES ('$userid', '$start', '$end', 'audio')");
   			?>
   			<script type="text/javascript">
            	alert("Successfully Sent");
        	</script>
   			<?php
   		}
   		}else{
			?>
   			<script type="text/javascript">
            	alert("Request Already Sent");
        	</script>
   			<?php
   		}
   		
   	}else{
   		mysqli_query($connect,"INSERT INTO `audio_location_data` (`userid`, `start_date`, `end_date`, `type`) VALUES ('$userid', '$start', '$end', 'audio')");
		?>
		<script type="text/javascript">
            alert("Successfully Sent");
        </script>
   		<?php
   	}
}

?>
<!DOCTYPE html>
<html >
 <head>
<title>Android Recording</title>
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
								<a href="subAdminIndex.php" style="text-decoration: none;">
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
									<li ><a href="subAdminIndex.php"><b><span style="padding: 4px;border: 1px solid;font-family:Segoe UI;" data-hover="Admin-Home">Admin-Home</span></a></b></li>
									
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
<div class="container">
	<div class="col-md-4 contact-left"></div>
		<div class="col-md-8 contact-left cont">
			<div class="contct-info">
				<h4>Send Audio Request</h4>
				<div class="col-md-6  row-grid">
					<form >
						<span style="font-weight: bold;">Start Time:</span>
						<input type="datetime-local" name="start" placeholder="HH:MM" style="width: 100%;" required>
						</div>
									
						<div class="clearfix"></div>
						<div class="col-md-6 row-grid" style="margin-top: 25px;">
						<span style="font-weight: bold;">End Time:</span>
						<input type="datetime-local" name="end" placeholder="HH:MM" style="width: 100%;" required>
						</div>
						<div class="clearfix"></div>
					</div><br><br>
					<input type="hidden" name="userid" value="<?php echo $_REQUEST['userid'] ?>">	
					<input type="submit" name="submit" value="Send Request" style="margin-left: 15px;">
					</form>
		</div>
	</div>
</div>
<div class="container">
    <?php 
        $res=mysqli_query($connect,"SELECT * FROM `audio_location_data` WHERE userid = '$userid' AND type = 'audio'");
        $r=mysqli_num_rows ( $res );
        if($r>0){
            $data = mysqli_fetch_array($res);
    ?>
    <label style="width: 49%;margin-top: 20px;font-size: 23px; font-family: indo;">Pending Task</label>
    <table style="width: 49%;margin-top: 5px;margin-bottom: 24px;font-size: 16px;">
    <tr style="margin-top: 8px;margin-bottom: 8px;">
    <th><font color="black" style="font-family:indo;">No.</font></th>
	<th><font color="black" style="font-family:indo;">Start_date</font></th>
	<th><font color="black" style="font-family:indo;">End_date</font></th>  
	<th><font color="black" style="font-family:indo;">Audio</font></th>
    </tr>
    <tr>
    <td width="7%"><font color="black"><?php echo "1"; ?></font> </td>
	<td><font color="black"><?php echo $data["start_date"];?> </font></td>
	<td><font color="black"><?php echo $data["end_date"];?></font></td>
	<td><font color="black"><?php echo "Pending" ?></font></td>
    </tr>
    
    </table>
    <?php 
        }
    ?>
    
</div>
<div class="container">
	<div class="aw"><font class="font">ALL AUDIOS. . .</font></div>
<table class="table table-striped table-bordered table-hover tb">
<tr>
    <th><font color="black" style="font-family:indo;">No.</font></th>
	<th><font color="black" style="font-family:indo;">Audio</font></th>
	<th><font color="black" style="font-family:indo;">Start_date</font></th>
	<th><font color="black" style="font-family:indo;">End_date</font></th>
</tr>
<?php
	$i=1;
	
	$sql = "SELECT * FROM `audios_data` WHERE userid = '$userid'";
	$result= mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_array($result)) {   
?>
<tr>
    <td width="7%"><font color="black"><?php echo $i++; ?></font> </td>
	<td><font color="black"><a href="<?php echo $row["audio"];?>" download><?php echo $row["audio"];?></a></font></td>
	<td><font color="black"><?php echo $row["start_date"];?></font></td>
	<td><font color="black"><?php echo $row["end_date"];?></font></td>
</tr>
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
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/paginathing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($){
    $('.table tbody').paginathing({
      perPage: 25,
      insertAfter: '.table',
      pageNumbers: true
    });
  });
</script>

</body>
</html>



