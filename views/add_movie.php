
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADD MOVIE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    
    
    <!-- Font-awesome CDN CSS -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
   
    
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/add_movie.dashboard.css">

     <script>
      function validateForm() {
              var numbers = /^[0-9]+$/;
        var x = document.forms["movieform"]["m_name"].value;
        var y = document.forms["movieform"]["m_rate"].value;
          var z = document.forms["movieform"]["m_description"].value;
          var a = document.forms["movieform"]["image"].value;
  if (x == ""||y==""|| z==""||a=="") {
    alert(" must be filled out");
    return false;
  }
           if(!/^[0-9]+$/.test(y))
          {alert('please enter a numeric value for rating');
   
      return true;
              
          }
          
}
       
      </script>
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
				$m_thumbnail=htmlspecialchars($_POST['image']);
				
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
      
      if(isset($_POST['preview']) && !empty($_POST['m_name'])  && !empty($_POST['m_description']) && !empty($_POST['m_rate'])){
           setcookie("mname", $_POST['m_name']);
         
          setcookie("mdescription", $_POST['m_description']);
          setcookie("mrate", $_POST['m_rate']);
          /* setcookie("Id", $m_id);
           setcookie("Description", $m_description);*/
           header("Location:add_movie_preview.php");
         
      }
     
    
      ?>
      
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
</div> </form>
     <form name="movieform" method="post" onsubmit="return validateForm()" action="../controllers/add_movie_controller.php" enctype="multipart/form-data">
 
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
       
         
        
     
     <div style="margin-top:350px;padding-bottom:-100px;" class="portion">
     <div class=" pos"></div>

        
    
     <table style="margin-left:80px;" class="pos3" >
         <tr>
         <td colspan="2" style="text-align:center">ADD MOVIE</td>
         
         </tr>
     
        <tr>
         
            <td>Movie Name:</td>
             <td><input type="text" class="inp" name="m_name"> <span style="color:red"><?php if(empty($_POST['m_name'])){echo $err;}?></span></td>
         
         </tr>   
         
         
         
          <tr>
         
            <td>Description:</td>
             <td><input type="text" class="inp" name="m_description"><span style="color:red"><?php if(empty($_POST['m_description'])){echo $err;}?></span></td>
         
         </tr>
          <tr>
         
            <td>Imdb Rate:</td>
             <td><input type="text" class="inp"  name="m_rate"><span style="color:red"><?php if(empty($_POST['m_rate'])){echo $err;}?></span></td>
       
         </tr>
          <tr>
         
            <td><label for="img">Thumbnail:</label></td>
             <td><input class="inp" type="file" id="img" name="image" ><span style="color:red"><?php if(empty($_POST['img'])){echo $err;}?></span></td>
            
           
           
         </tr>
         
     </table>
         <table style="margin-top:-20px;margin-left:47%;">
         
             <tr>
             
                <td class="btn-padding">
                    <button type="submit" name="add"class="button button1">ADD</button>
                </td>
               
              <!--   
                 <td class="btn-padding">
                    <button type="submit" name="preview" class="button button1">PREVIEW</button>
                </td>-->
                 
                 
                 
             </tr>
         
         </table>
        
          <!-- list view iframe --->
            
         </div>
          <div style="margin-top:-500px;margin-left:60%;height:75%;width:700px; ">
         <iframe height="70%" width="520px" class="iframe" src="allmovies.php" name="iframe_a"></iframe>
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
