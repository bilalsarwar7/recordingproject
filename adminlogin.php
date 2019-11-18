<!Doctype html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
	<link rel="stylesheet"  href="css/animate.css">
	
</head>
<body class="bdy1" style="background-image: url(images/giphy.gif);"> 
<div class="loginbox">
	<div class="glass">
		<img src="images/user2.png" class="user">
		<h3>Sign in here</h3>
			<form action="insert.php" method="POST">
				<div class="inputbox">
					<span>
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
					<input type="text" name="name" required placeholder="UserID"  >
				</div>
				<div class="inputbox">
				<span>
					<i class="fa fa-key" aria-hidden="true"></i>
				</span>
				<input type="password" name="password" placeholder="password" required >
        		</div>
        		<div class="inputbox">
					<select name="admintype" class="sele" required>
						<option value="super">Super Admin</option>
						<option value="high">High</option>
						<option value="medium">Medium</option>
						<option value="low">Low</option>
					</select>
        		</div>

				<input type="submit" name="add" value="login" >
		 		<?php 
		  			if (isset($_REQUEST["err"])) {
		  				echo "<font color=white>Invalid User name and password</font>";
		  			}
	   			?></p>
			</form>
			<p><a href="send-mail.php">Forgot Password?</a></p>
		
	</div>
</div>

 
	
</form>
</div>
</center>
				<?php 
                  if (isset($_REQUEST["suc"])) { ?>
                  <script type="text/javascript">
                  alert("Successfully Sent password to your email");
                  </script>
                <?php } ?>
 
</body>
</html>
