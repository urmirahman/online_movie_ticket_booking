<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADD ADMIN</title>
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
    <link rel="stylesheet" href="css/add_movie.dashboard.css">

    
  </head>
  <body>
    
      <!--varialbles-->
      <?php 
      
      $a_name="" ;
      $a_id="";
      $a_branch="";
      $a_access="";
      $a_image="";
      $err="";
      
      
      if(isset($_POST['add'])){
				
				if(empty($_POST['a_name'])){
					
					$err="*";
				}
				else
				{			
				$a_name=htmlspecialchars($_POST['a_name']);
				
				}
          if(empty($_POST['a_id'])){
					
					$err="*";
				}
				else
				{			
				$a_id=htmlspecialchars($_POST['a_id']);
				
				}
          
        
          
          if(empty($_POST['a_image'])){
					
					$err="*";
				}
				else
				{			
				$a_image=htmlspecialchars($_POST['a_image']);
				
				}
          $a_branch=htmlspecialchars($_POST['a_branch']);
          $a_access=htmlspecialchars($_POST['a_access']);

           }
      ?>
      
   <?php 
      
      if(isset($_POST['add_movie'])){
         
           header("Location:add_movie.php");
         
      }
      if(isset($_POST['add_movie_timing'])){
         
           header("Location:add_movie_timing.php");
         
      }
      if(isset($_POST['movies'])){
         
           header("Location:superadmin.php");
         
      }
      if(isset($_POST['add_job'])){
         
           header("Location:add_job_post.php");
         
      }
      
      if(isset($_POST['preview'])&& !empty($_POST['a_name']) && !empty($_POST['a_id']) && !empty($_POST['a_access']) && !empty($_POST['a_branch'])){
           setcookie("mname", $_POST['a_name']);
          setcookie("mid", $_POST['a_id']);
          setcookie("mdescription", $_POST['a_access']);
          setcookie("mbranch", $_POST['a_branch']);
          /* setcookie("Id", $m_id);
           setcookie("Description", $m_description);*/
           header("Location:add_admin_preview.php");
         
      }
      
      ?>
      
     
    
      
      
 <section> <form method="post">
   <div class="sidebar">
    <header >Dashboard</header>
  <ul>
      
    <li><button class="button-sidebar button3"type="submit" name="movies"><i class="fas fa-film" style="padding-right:10px"></i>Movies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_movie"><i class="far fa-file-video"style="padding-right:10px"></i>Add movie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button></li>
    <li><button class="button-sidebar button3"type="submit" name="add_movie_timing"><i class="fas fa-hourglass-half"style="padding-right:10px"></i>Add movie Timing&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_admin"><i class="fas fa-user-shield"style="padding-right:10px"></i>Add Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_job"><i class="far fa-question-circle"style="padding-right:10px"></i>Add Job Post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
  
  </ul>
</div>
</form>
<form method ="post" action="../controllers/add_admin_controller.php" enctype="multipart/form-data">

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
                
     
     <div class="portion">
     <div class="vl pos"></div>
 <div id="app">
  <div class="card ">
   <table >
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/person01.jpg">  </td>  
            <td> <span class="card-font-t">Admin Name</span> <br> <span style="color:black;font-size:10px">Dhanmondi</span> <span style="color:black;font-size:10px;">Denied</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
      
     <div class="card">
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/person01.jpg">  </td>  
            <td> <span class="card-font-t">Admin Name</span> <br> <span style="color:black;font-size:10px">Kuratoli</span> <span style="color:black;font-size:10px;">Granted</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     <div class="card">
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/person01.jpg">  </td>  
            <td> <span class="card-font-t">Admin Name</span> <br> <span style="color:black;font-size:10px;padding-right:5px">Mohakhali</span><span style="color:black;font-size:10px;">Granted</span>  </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     <div class="card">
   <table >
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/person01.jpg">  </td>  
            <td> <span class="card-font-t">Admin Name</span> <br> <span style="color:black;font-size:10px;padding-right:5px">Panthopath</span> <span style="color:black;font-size:10px;">Granted</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     
        <?php
      
      if(!empty($_POST['a_name']) && !empty($_POST['a_id']) && !empty($_POST['a_branch']) && !empty($_POST['a_access']) ){
     
     
      ?> 
      
      
     
     <div class="card">
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/person01.jpg">  </td>  
            <td> <span class="card-font-t"><?php echo $a_name;?></span> <br> <span style="color:black;font-size:10px;padding-right:5px"><?php echo $a_branch;?></span> <span style="color:black;font-size:10px;"><?php echo $a_access;?></span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     
      <?php }?>
</div>
        
    
     <table class="pos3" >
         <tr>
         <td colspan="2" style="text-align:center">ADD ADMIN</td>
         
         </tr>
     
        <tr>
         
            <td>Admin Name:</td>
             <td><input type="text"  name="a_name"> <span style="color:red"><?php if(empty($_POST['a_name'])){echo $err;}?></span></td>
         
         </tr>   
         
          
         
          <tr>
         
            <?php $branches = array("Bashundhara","Mohakhali","Panthopath");
				
				?>
            <td>Branch:</td>
             <td><select name = "a_branch" >
							<?php foreach($branches as $i){?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>    <!-- branches -->
							<?php }?>
							</select><span style="color:red"><?php if(empty($_POST['a_branch'])){echo $err;}?></span> </td>
         
         </tr>
         
         <tr>
         
         
          <?php $accesses = array("Denied","Granted");
				
				?>
            <td>Access:</td>
             <td><select name = "a_access" >
							<?php foreach($accesses as $i){?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>    <!-- access -->
							<?php }?>
							</select><span style="color:red"><?php if(empty($_POST['a_access'])){echo $err;}?></span> </td>
         
         </tr>
          
          <tr>
         
            <td><label for="img">Image:</label></td>
             <td><input type="file" id="img" name="image" ><span style="color:red"><?php if(empty($_POST['a_image'])){echo $err;}?></span></td>
            
           
           
         </tr>
         
     </table>
         <table>
         
             <tr>
             
                <td class="btn-padding">
                    <button type="submit" name="add"class="button button1">ADD</button>
                </td>
                 
                 <td class="btn-padding">
                    <button type="submit" name="preview" class="button button1">PREVIEW</button>
                </td>
                 
                
                 
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
