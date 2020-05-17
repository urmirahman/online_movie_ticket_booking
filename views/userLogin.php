<?php

	session_start();

	$con = mysqli_connect('localhost', 'root', '',);

	mysqli_select_db($con, 'cinema_db');

	if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
        
        if($_POST['username'] == "urmi"){
            $username = "urmi";
              $_SESSION['username'] = $username;
             header('Location:superadmin.php');
        }
        if($_POST['username'] == "fahim"){
            $username = "fahim";
              $_SESSION['username'] = $username;
             header('Location:Movies.php');
        }

		$s = "select * from users where username = '$username' && password = '$password'";

		$result = mysqli_query($con, $s);

		$num = mysqli_num_rows($result);

		if($num == 1)
		{  
             $_SESSION['username'] = $username;
             header('Location:home.php');
         
			
		}
        
       
	}	

?>
	
<?php
	if(isset($_POST['reg']))
	{
		header("Location:userRegistration.php");
	}

?>

<html>

	<head>
	
		<link rel="stylesheet" href="userLogin_styles.css">
		<link rel="icon" href="ticket.png">
		<title>E-Tickets For Movie</title>
	
	</head>

	<body>
		<div class="header">
			
				<h1 style="margin-top:-10px;" class="head">Buy Tickets Online For Movies</h1>
				
			
		</div>
		
		<div style="margin-top:10px;" class="box">
			
				<form method="post" action="userLogin.php">
				
					<div class="inputbox">
						<input placeholder="username" type="text" name="username" required="" >
										
					</div>
					
					<div class="inputbox">
						<input placeholder="password" type="password" name="password" required="" >
									
					</div>
					
					<input type="submit" name="login" value="Login">
					
				</form>
			</div>
			
			<div class="second_box">
				<form method="post" action="">
				
					<div class="new_account">
					<h3>Don't have an account?</h3>
					<input type="submit" name="reg" value="Create New Account">
					
					</div>
				</form>
			</div>
		
	</body>

</html>