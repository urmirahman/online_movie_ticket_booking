<!DOCTYPE html>

<?php

	session_start();

?>


<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="Style/styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
			integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<title>Homepage</title>
		<link rel="icon" type="image/png" href="Img/logo.png">
		
		<!--------->
		
			<script>
					
				function search(){
					http=new XMLHttpRequest();
					var search_word=document.getElementById("search_input").value;
					http.onreadystatechange=function(){
						if(http.readyState == 4 && http.status == 200){
							document.getElementById("search_result").innerHTML=http.responseText;
						}
						
					   
					}
					http.open("GET","search_.php?sk="+search_word,true);
					http.send();
				}
				
			</script>
		
		<!--------->
		
		<style>
		
			input[type=text] {
				width: 20%;
				padding: 5px 5px;
				margin: 5px 0;
				box-sizing: border-box;		
				font-size: 25px;
				color: red;
				float: right;
			}
			
			#search_result{
				
				font-size: 20px;
				color: red;
				float: right;
			}
			
		</style>
		
	</head>

	<body>

		<header>
			
			<h1 class="welcome">Welcome <?php echo $_SESSION['username']; ?> </h1>
			
				<nav>
					<ul>
						
						<li> <a href="home.php">Home</a> </li>
						<li> <a href="profile.php">Change Password</a> </li>
						<li> <a href="userLogin.php">Logout</a> </li>
						
					</ul>
				</nav>
				
		</header>
		
		<div class="second-header">
			
			<div id="output">
			</div><br>
		
			<input type="text" id="search_input" onkeyup="search()" id="search" placeholder="Search Movie Here">
            <div style="color:red;" id="search_result">
		</div>
		</div>
		
		

		<?php
			$link = mysqli_connect("localhost", "root", "", "online_movie");
			$sql = "SELECT * FROM addmovie";
		?>
		
		<header></header>
		
		<div id="home-section-1" class="movie-show-container">
		
			

			<div class="movies-container">

				<?php
					if($result = mysqli_query($link, $sql)){
						if(mysqli_num_rows($result) > 0){
							for ($i = 0; $i <= 5; $i++){
								$row = mysqli_fetch_array($result);
								echo '<div class="movie-box">';
								echo '<img src="'. $row['thumbnail'] .'" alt=" ">';
								echo '<div class="movie-info ">';
								echo '<h3>'. $row['m_name'] .'</h3>';
								echo '<a href="booking.php?id='.$row['m_id'].'"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
								echo '</div>';
								echo '</div>';
							}
							mysqli_free_result($result);
						} else{
							echo '';
						}
					} else{
						echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					}
					
					// Close connection
					mysqli_close($link);
				?>
			</div>
		</div>

	</body>

</html>