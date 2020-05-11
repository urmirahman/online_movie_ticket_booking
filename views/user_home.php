<html>

	<head>
	
		<link rel="stylesheet" href="homepage_styles.css">
		<link rel="icon" href="ticket.png">
		<title>E-Tickets For Movie</title>
	
	</head>
	
	<body>
	
		<div class="header">
			<h1 class="head">Hello & Welcome To Our Page</h1>
			
			<hr width="100%" color="#BB8FCE">
		</div>
		
		<div class="box">
		
			<form method="post" action="">
			
				<div class="inputbox">
					
					<select name="profession">
						
						<option selected="selected">Select Movie</option>
						<option>Guerrilla</option>
						<option>Matir moina</option>
						<option>Amar Bondhu Rashed</option>
						<option>Shyamol Chhaya</option>
						<option>Aguner Poroshmoni</option>
						<option>Joyjatra</option>
						
					</select>
				</div>
				
				<div class="inputbox">
				
					<input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" />
					
				</div>
				
				<input type="submit" name="confirm" value="Confirm">
				
			</form>
		</div>
		
		<div class="moviebox">
			<span>Now Showing</span><br>
			<img src="1.png" alt="MuktirGaan">
		</div>
	
	</body>

</html>