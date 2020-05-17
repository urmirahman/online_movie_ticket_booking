
<html !DOCTYPE lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MOVIES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    
    <!-- Font-awesome CDN CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    
    
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/movies.dashboard.css">
      
      <!-- new-->
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="Style/moviestyle.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
			integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      
		<title>Homepage</title>
		<link rel="icon" type="image/png" href="Img/logo.png">

    
  </head>
  <body>
    
      
     
    <?php 
      
      if(isset($_POST['add_movie'])){
         
           header("Location:add_movie.php");
         
      }
      if(isset($_POST['add_movie_timing'])){
         
           header("Location:add_movie_timing.php");
         
      }
      if(isset($_POST['add_admin'])){
         
           header("Location:add_admin.php");
         
      }
      if(isset($_POST['add_job'])){
         
           header("Location:add_job_post.php");
         
      }
      ?>
      
      
 
  

 
    
     

    
      <!--varialbles-->
    
      
      
   
      
     
    
      
      
 <section> <form method="post">
   <div class="sidebar">
    <header >Dashboard</header>
  <ul>
      
    <li><button class="button-sidebar button3"type="submit" name="movies"><i class="fas fa-film" style="padding-right:10px"></i>Movies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_movie"><i class="far fa-file-video"style="padding-right:10px"></i>Add movie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button></li>
    <li><button class="button-sidebar button3"type="submit" name="add_movie_timing"><i class="fas fa-hourglass-half"style="padding-right:10px"></i>Add movie Timing&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_admin"><i class="fas fa-user-shield"style="padding-right:10px"></i>Add Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_job"><i class="far fa-question-circle"style="padding-right:10px"></i>Add Job Post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
  
  </ul>
</div>
 <header class="headerback">
           <!--Header logo-->
            <div>
                 <img src="img/logoNew.png" class="logo"> 
                <span class="movietitle">MovieTime</span>
            </div>
          
        
        </header>
        
             
            <!--menu bar-->
            <div class="">
            
                <ul class="removePoint">
                     <li class="listDesign" Style="float:right"><a  class="listDesignA" href="userLogin.php">Logout</a></li>
                    <li class="listDesign" Style="float:right"><a class="listDesignA" href="superadmin_profile.php">Profile</a></li>
                     <li class="listDesign" Style="float:right"><a class="listDesignA"  href="#">Setting</a></li>
                   <li class="listDesign" Style="float:right"><a class="active" href="">Home</a></li>
                    
                   
                    
                
                </ul>
                
             </div>
                
     
     <div class="portion  ">
  <?php
			$link = mysqli_connect("localhost", "root", "", "online_movie");
			$sql = "SELECT * FROM addmovie";
         $movies ="SELECT * FROM addmovie";
        
		?>
         
         <div id="home-section-1" class="movie-show-container">
		
			

			<div class="movies-container">

				<?php
					if($result = mysqli_query($link, $sql)){
						if(mysqli_num_rows($result) > 0){
                           $r = mysqli_fetch_array($result);
                          $p=count($r);
                           // echo '<div class ="owl-carousel owl-theme">';
							for ($i = 0; $i <$p-2; $i++){
                               
								$row = mysqli_fetch_array($result);
                               //  echo count($row);
                                
								echo '<div class="movie-box  ">';
								echo '<img src="'. $row['thumbnail'] .'">';
								echo '<div class="movie-info ">';
								echo '<h3>'. $row['m_name'] .'</h3>';
								echo '<a href="booking.php?id='.$row['m_id'].'"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
								echo '</div>';
								echo '</div>';
							}
                           // echo '</div';
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

     </div>
     
       </form>
     
     
     </section> 
      
         
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <!-- Wow JS -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Wow JS -->
    <script src="js/wow.min.js"></script>
    <!-- Bootstrap Js File -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main Theme Js File -->
    <script>
         $('.owl-carousel').owlCarousel({
                items:1,
                dots:true,
                merge:true,
                autoplay:true,
                autoplayHoverPause: true,
                loop:true,
                margin:10,
                video:true,
                lazyLoad:true,
                center:true,
                responsive:{
                480:{
                items:2
                },
                600:{
                items:4
                    }
                }
            }) 
    </script>
    <script>
         $('.owl-carousel2').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                dots:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:2
                    }
                }
            }) 
    </script>    
    <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
    </script>


    <script>
              new WOW().init();
    </script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  

     
   
      
     
     
  </body>
</html>

        