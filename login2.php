<?php
	
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_invalid="";
	$has_error=false;
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
			
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		if(!$has_error)
		{
			if($uname == "urmi" && $pass=="123")
			{
				//session_start();
				//setcookie("loggedinuser",$uname,time()+120);
				//$_SESSION["loggedinuser"]=$uname;
				header("Location:superadmin.php");
			}
			else
			{
				$err_invalid="Invalid Username Password";
				//echo $err_invalid;
			}
            if($uname == "abc" && $pass=="321")
			{
				
				header("Location:user_home.php");
			}
            if($uname == "a" && $pass=="789")
			{
				header("Location:movies.php");
			}
		}
		
	}

if(isset($_POST['regi'])){
    header("location:registration.php");
}
?>

<html>
	<head><title>Login</title>
    
    <link rel="stylesheet" type="text/css" href="login_styles.css">
          </head>
	<body  align="center">
        
        <div class="header">
		
			<h1 class="head">Buy Tickets Online For Movies</h1>
			<h2 class="head2">Login Form</h2>
			
			<hr color="#BB8FCE">
		
		</div>
        
     <div   style="position: fixed;
	top: 350px;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 500px;
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 10px;
     background-image:url(../Images/2.1.jpg);            
	background: rgba(0,0,0,.8);
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,.1);
	border-radius: 10px;
     -moz-background-size:cover;
    -o-background-size:cover;
    -webkit-background:cover;">
        
		<h1>Login</h1>
		<span><?php echo $err_invalid;?></span>
		<form method="post" action="">
			<table align="center">
				<tr>
					<td style=""><span style="position: absolute;
	top: 29%;
	left: 20px;
	padding: 20px 0;
	font-size: 25px;
	color: #fff;
	pointer-events: none;
	transition: .5s;">Username:</span> </td>
					<td><input placeholder="Enter your username" style="width: 100%;
	padding: 20px 0;
	font-size: 20px;
	color: #fff;
	margin-bottom: 30px;
	border: none;
	border: 1px solid #fff;
	outline: none;
	background: transparent;"type="text" value="<?php echo $uname;?>" name="uname">
						<br><span style="color:red"><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td style="position: absolute;
	top: 54%;
	left: 20px;
	padding: 20px 0;
	font-size: 25px;
	color: #fff;
	pointer-events: none;
	transition: .5s;">Password: </td>
					<td><input placeholder="Enter Your password" style="width: 100%;
	padding: 20px 0;
	font-size: 20px;
	color: #fff;
	margin-bottom: 30px;
	border: none;
	border: 1px solid #fff;
	outline: none;
	background: transparent;" type="password" value="<?php echo $pass;?>" name="pass">
					<br><span style="color:red"><?php echo $err_pass;?></span></td>
				</tr>
                <tr>
                
                    <td colspan="2" align="right" style="color:deepskyblue;font-size:18px"> <span>Didn't have any account?</span></td>
                </tr>
				<tr>
                    
                    <td  align="left"><input type="submit" value="Sign In" name="submit"style="background: transparent;
	border: none;
	outline: none;
	color: #fff;
	background: #BB8FCE;
	padding: 10px 30px;
	font-size: 20px;
	cursor: pointer;
	border-radius: 5px;"></td>
                    <td  align="right"><input type="submit" value="Registration" name="regi" style="background: transparent;
	border: none;
	outline: none;
	color: #fff;
	background: #BB8FCE;
	padding: 10px 30px;
	font-size: 20px;
	cursor: pointer;
	border-radius: 5px;"></td>
                </tr>
			</table>
		</form>
         </div>
	</body>
</html>