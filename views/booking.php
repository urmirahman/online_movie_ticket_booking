<!DOCTYPE html>

<?php

	session_start();

?>

<html lang="en">

	<?php
    require_once("../controllers/add_movie_controller.php");
	
        $id = $_GET['id'];
    echo $id;
        $movies = getmovie($id); 
    foreach($movies as $i){
    $title = $i["m_name"];
    $rating=$i["m_rate"];
    $des=$i["m_description"];
    $img =$i["thumbnail"];}
    
    
		
        $link = mysqli_connect("localhost", "root", "", "online_movie");

        //$movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
		
       // $movieImageById = mysqli_query($link,$movieQuery);
		
      //  $row = mysqli_fetch_array($movieImageById);
		
	?>

	<head>
	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="Style/styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
			integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<title>Book <?php echo $title; ?> Now</title>
		<link rel="icon" type="image/png" href="Img/logo.png">
		
	</head>

	<body style="background-color:black;">

		
		<header>
			<div>
			<h1 class="welcome">Welcome <?php echo $_SESSION['username']; ?> </h1>
			
				<nav>
				
					<ul>
						
						<li> <a href="home.php">Home</a> </li>
						<li> <a href="userLogin.php">Logout</a> </li>
						
					</ul>
					
				</nav>
				
			</div>
			
		</header>
		
		<div class="booking-panel">
		
			<div class="booking-panel-section booking-panel-section1">
			
				<h1>RESERVE YOUR TICKET</h1>
				
			</div>
			
			<div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
				<i class="fas fa-2x fa-times"></i>
			</div>
			
			<div class="booking-panel-section booking-panel-section3">
				<div class="movie-box">
					<?php
						echo '<img src="'.$img.'" alt="">';
						?>
				</div>
			</div>
			
			
			<div class="booking-panel-section booking-panel-section4">
			
				<div class="title"><?php echo $title; ?></div>
				
				<div class="movie-information">
					<table>
						<tr>
							<td>GENGRE</td>
							<td><?php echo "Horror"; ?></td>
						</tr>
						<tr>
							<td>DURATION</td>
							<td><?php echo "2.00 hours"; ?></td>
						</tr>
						<tr>
							<td>RELEASE DATE</td>
							<td><?php echo "10-04-2019"; ?></td>
						</tr>
						<tr>
							<td>DIRECTOR</td>
							<td><?php echo "Andrés Muschietti"; ?></td>
						</tr>
						<tr>
							<td>ACTORS</td>
							<td><?php echo "Bill Skarsgård"; ?></td>
						</tr>
					</table>
				</div>
				
				<div class="booking-form-container">
				
					<form action="" method="POST">

						<select name="theatre" required>
							<option value="" disabled selected>THEATRE</option>
							<option value="Star Cineplex">Star Cineplex</option>
							<option value="Madhumita">Madhumita</option>
							<option value="Ananda">Ananda</option>
							<option value="Balaka">Balaka</option>
							<option value="Rajmoni">Rajmoni</option>
						</select>

						<select name="type" required>
							<option value="" disabled selected>TYPE</option>
							<option value="3D">3D</option>
							<option value="2D">2D</option>
						</select>

						<select name="date" required>
							<option value="" disabled selected>DATE</option>
							<option value="12-4-2020">April 12,2020</option>
							<option value="13-4-2020">April 13,2020</option>
							<option value="14-4-2020">April 14,2020</option>
							<option value="15-4-2020">April 15,2020</option>
							<option value="16-4-2020">April 16,2020</option>
						</select>

						<select name="hour" required>
							<option value="" disabled selected>TIME</option>
							<option value="09-00">09:00 AM</option>
							<option value="12-00">12:00 AM</option>
							<option value="15-00">03:00 PM</option>
							<option value="18-00">06:00 PM</option>
							<option value="21-00">09:00 PM</option>
							<option value="24-00">12:00 PM</option>
						</select>

						<input placeholder="Phone Number" type="text" name="pNumber" required>
						
						<select name="seated" required>
							<option value="" disabled selected>Seat</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>						
						</select>

						<button type="submit" value="submit" name="submit" class="form-btn">Book a Seat</button>
						
						<?php
						
							if(isset($_POST['submit'])){
							 
								$insert_query = "INSERT INTO 
								bookingTable (  movieName,
												bookingTheatre,
												bookingType,
												bookingDate,
												bookingTime,
												bookingPNumber,
												seat)
												
								VALUES (        '".$title."',
												'".$_POST["theatre"]."',
												'".$_POST["type"]."',
												'".$_POST["date"]."',
												'".$_POST["hour"]."',
												'".$_POST["pNumber"]."',
												'".$_POST["seated"]."')";
												
								mysqli_query($link,$insert_query);
							
							}
						
						?>
						
					</form>
					
				</div>
				
			</div>
			
		</div>

	</body>

</html>