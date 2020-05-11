<?php
	if(isset($_POST['reg']))
	{
		header("Location:registration.php");
	}

?>

<html>

	<head>
	
		<link rel="stylesheet" href="login_styles.css">
		<link rel="icon" href="ticket.png">
		<title>E-Tickets For Movie</title>
	
	</head>
	
	<?php
		
		$err_username="";
		$username="";
		
		$err_password="";
		$password="";
		
		$admin="abc";
		$admin_pass="123";
		
		$r_user="xyz";
		$r_user_pass="789";
		
		if(isset($_POST['login']))
		{
			
			if (empty($_POST['username']))
			{
				$err_username="*Usename Required";				
			}
			else
			{
				$username=$_POST['username'];								
			}
				
			if (empty($_POST['password']))
			{
				$err_password="*Password Required";
			}
			else
			{
				$password=$_POST['password'];
			}					
			
			if($username==$admin and $password==$admin_pass)
			{
				header("Location:superadmin.php");
			}
			
			if($username==$r_user and $password==$r_user_pass)
			{
				header("Location:homepage.php");
			}
			
			
			if($username==$admin and $password!=$admin_pass or $username==$r_user and $password!=$r_user_pass)
			{
				echo "Wrong Password.";
				$password = "";
			}
			elseif(($username!=$admin and $password==$admin_pass or $username!=$r_user and $password==$r_user_pass))
			{
				echo "Wrong Username";
				$username="";
			}
			else
			{
				echo "Wrong User & Password.";
				$username = "";
				$password = "";
			}
			
		}	
				
	?>
	
	<body>
	
		<div class="header">
		
			<h1 class="head">Buy Tickets Online For Movies</h1>
			<h2 class="head2">Login Form</h2>
			
			<hr color="#BB8FCE">
		
		</div>
	
		
	
		<div class="box">
		
			<form method="post" action="">
			
				<div class="inputbox">
					<input type="text" name="username" required="" value="<?php echo $username;?>">
					<span style="color:red"><?php echo $err_username;?></span>
					<label>Username</label>				
				</div>
				
				<div class="inputbox">
					<input type="password" name="password" required="" value="<?php echo $password;?>">
					<span style="color:red"><?php echo $err_password;?></span>
					<label>Password</label>				
				</div>
				
				<input type="submit" name="login" value="Login">
				
			</form>
		</div>
		
		<div class="second_box">
			<form method="post" action="">
			
				<div class="">
				<p>Don't have an account?</p>
				<input type="submit" name="reg" value="Create New Account">
				
				</div>
			</form>
		</div>
       
			
	</body>

</html>