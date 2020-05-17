<?php

	session_start();

	$con = mysqli_connect('localhost', 'root', '',);

	mysqli_select_db($con, 'cinema_db');

	if(isset($_POST['login']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		$query = "update users set password = '$pass' where username = '$user'";
		
		$data = mysqli_query($con, $query);
		
		if($data)
		{
			echo "<script>alert('Password Changed Successfully.')</script>";
			
		}
		else
		{
			echo "<script>alert('Update Failed.')</script>";
		}
	}

?>


<html>

	<head>
	
		<link rel="stylesheet" href="profile_styles.css">
		<link rel="icon" href="ticket.png">
		<title>E-Tickets For Movie</title>
	
	</head>

	<body>
	
		<header>
			
			<h1 class="welcome">Welcome <?php echo $_SESSION['username']; ?> </h1>
			
			<nav>
				<ul>
					
					<li> <a href="home.php">Home</a> </li>
					<li> <a href="userLogin.php">Logout</a> </li>
					
				</ul>
			</nav>
			
		</header>
		
		<div class="header">
			
			<h1 class="head">Buy Tickets Online For Movies</h1>
			<h2 class="head2">Change Password</h2>
			
			<hr color="#BB8FCE">
			
		</div>
		
		<div class="box">
			
			<form method="post" action="profile.php">
			
				<div class="inputbox">
					<input type="text" name="username" required="" >
					<label>Username</label>				
				</div>
				
				<div class="inputbox">
					<input type="password" name="password" required="" >
					<label>New Password</label>			
				</div>
				
				<input type="submit" name="login" value="Change Password">
				
			</form>
		</div>
			
	</body>

</html>