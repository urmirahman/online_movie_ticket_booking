
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MOVIE PREVIEW</title>
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
    
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/add_movie_preview.css">

    
  </head>
  <body>
    
      <!--varialbles-->
      <?php 
      
      $m_name="" ;
      $m_id="";
      $m_description="";
      $m_rate="";
      $m_thumbnail="";
      $err="";
      
      
      if(isset($_POST['add'])){
				
				if(empty($_POST['m_name'])){
					
					$err="*";
				}
				else
				{			
				$m_name=htmlspecialchars($_POST['m_name']);
				
				}
          if(empty($_POST['m_id'])){
					
					$err="*";
				}
				else
				{			
				$m_id=htmlspecialchars($_POST['m_id']);
				
				}
          
          if(empty($_POST['m_Description'])){
					
					$err="*";
				}
				else
				{			
				$m_description=htmlspecialchars($_POST['m_description']);
				
				}
          
          if(empty($_POST['m_rate'])){
					
					$err="*";
				}
				else
				{			
				$m_rate=htmlspecialchars($_POST['m_rate']);
				
				}
          if(empty($_POST['m_thumbnail'])){
					
					$err="*";
				}
				else
				{			
				$m_thumbnail=htmlspecialchars($_POST['m_thumbnail']);
				
				}
           }
      ?>
      
      <?php 
      
      if(isset($_POST['movies'])){
         
           header("Location:superadmin.php");
         
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
      if(isset($_POST['add_movie'])){
         
           header("Location:add_movie.php");
         
      }
      
      // after the page reloads, print them out
/*if (!isset($_COOKIE['mname'])) {
    		header("Location:add_movie.php");
    }*/

      
      if(isset($_COOKIE["mname"]) || isset($_COOKIE["mid"]) || isset($_COOKIE["mdescription"])|| isset($_COOKIE["mbranch"]))  { // only if it is set
         $name = $_COOKIE["mname"];
          $id=$_COOKIE["mid"];
          $description=$_COOKIE["mdescription"];
          $branch=$_COOKIE["mbranch"];
     }
      
      
      
      
     
   ?>
      
 <section> 
     <form method="post">
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
                     <li class="listDesign" Style="float:right"><a  class="listDesignA" href="login2.php">Logout</a></li>
                    <li class="listDesign" Style="float:right"><a class="listDesignA" href="superadmin_profile.php">Profile</a></li>
                     <li class="listDesign" Style="float:right"><a class="listDesignA"  href="#">Setting</a></li>
                   <li class="listDesign" Style="float:right"><a class="active" href="">Home</a></li>
                    
                   
                    
                
                </ul>
                
             </div>
                
        
     
     <div class="portion" style="margin-top:70px;;margin-left:550px;position:fixed">
   <!--  preview section    -->
         
         
         <table style="border-style:dotted">
         
            <tr>
             <td><img src="img/person01.jpg" style="height:100px;width:100px"></td>
             <td><span style="color:white;font-size:30px;">Urmi Rahman</span><br><span style="font-size:20px;color:grey">ID:#123444</span><br><span style="font-size:20px;color:grey">Job:Super Admin</span></td>
             
             </tr>
             
             <tr>
             
                <td colspan="2" style="font-size:20px;color:grey;text-align:justify">Access:Granted</td>
                 
             </tr>
         
         </table>
     
            
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
