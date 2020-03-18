<?php
	if(isset($_POST['login']))
	{
		header("Location:login2.php");
	}

?>

<html>

	<head>
	
		<link rel="stylesheet" href="registration_styles.css">
		<link rel="icon" href="ticket.png">
		<title>E-Tickets For Movie</title>
	
	</head>
	
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

	<body>
	
		<div class="header">
			<h1 class="head">Buy Tickets Online For Movies</h1>
			<h2 class="head2">Registration Form</h2>
			
			<hr width="100%" color="#BB8FCE">
		</div>
		
		<div class="box">
		
			<form action="" method="post">
			
				<div class="inputbox">
					<input type="text" name="name" >
					<label>Name</label>				
				</div>
				
				<div class="inputbox">
					<input type="text" name="email" value="" >
					<br> <span style="color:white"><?php echo $err_email;?></span>
					<label>Email</label>				
				</div>
				
				<div class="inputbox">
					<input type="password" name="password" >
					<label>Password</label>				
				</div>
				
				<div class="inputbox">
					<input type="text" name="phone" >
					<label>Phone</label>				
				</div>
				<h3>Already have an account?</h3>
				<input type="submit" name="submit" value="Submit">
                <input type="submit" name="login" value="Login">
                
                
				
			</form>
		</div>
		
		<!--<div class="second_box">
			<form action="" method="post">
			
				<div class="new_account">
					<h3>Already have an account?</h3>
					<input type="submit" name="login" value="Login">
				</div>
				
			</form>
		</div>
		-->
	
	</body>

</html>