<?php

	session_start();

	$con = mysqli_connect('localhost', 'root', '',);

	mysqli_select_db($con, 'cinema_db');

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$s = "select * from users where username = '$username'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1)
	{
		echo" Username Already Taken";
	}
	else
	{
		$reg = "insert into users(username, email, password) values ('$username', '$email', '$password')";
		mysqli_query($con, $reg);
		echo" Registration Successful.";
	}

?>

<?php
	if(isset($_POST['login']))
	{
		header("Location:userLogin.php");
	}

?>

<?php
	
	$err_username="";
	$username="";
	
	if(isset($_POST['register_btn']))
	{
		if($num == 1)
		{
			$username=$_POST['username'];
		}
	}
?>

<?php
	if(isset($_POST['register_btn']))
	{
		if($num == 1)
		{
			$err_username="*Usename has already taken.";
		}
	}

?>

<?php
	$err_email="";
	$email="";
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['email']))
		{
			$err_email="*invalid email";
		}
		else
		{
			$email=$_POST['email'];	
		}
		
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$email=$_POST['email'];			
		}
		else
		{
			$err_email="*invalid email";
		}
	}

?>

<html>

<head>

	<title>E-Tickets For Movie</title>
	<link rel="stylesheet" type="text/css" href="userRegistration_styles.css">
	<link rel="icon" href="ticket.png">
    <script>
	
		function validate_form(){
			username = document.getElementById("username").value;
			email = document.getElementById("email").value;
			password = document.getElementById("password").value;
			
			if(username == "" || email == "" || password == "")
			{    alert("empty field");
				//return false;
			}
		}
	
	</script>
	
</head>


<body>
	
	<div class="header">
			<h1 class="head">Buy Tickets Online For Movies</h1>
			
			
			
	</div>
	
	<div class="box">
	
		<form method="post" onsubmit="return validate_form()" action="userRegistration.php">
		
			<div class="inputbox">
				<input placeholder="username" type="text" id="username" name="username" required="" value="<?php echo $username;?>" >
				<span style="color:red"><?php echo $err_username;?></span>
				
			</div>
			
			<div class="inputbox">
				
				<input placeholder="email" type="text" id="email" name="email" value="" required="" >
				<br> <span style="color:red"><?php echo $err_email;?></span>
				
				
			</div>
			
			<div class="inputbox">
				
				<input placeholder="password" type="password" id="password" name="password" required="" >
				
				
			</div>
			
			<div class="inputbox">
				<input type="submit" name="register_btn" value="Submit">
			</div>
			
		</form>
	
	</div>
	
	<div class="second_box">
			<form action="" method="post">
			
				<div class="new_account">
					<h3>Already have an account?</h3>
					<input type="submit" name="login" value="Login">
				</div>
				
			</form>
	</div>
		
</body>

</html>