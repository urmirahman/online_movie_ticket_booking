<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADD JOB</title>
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
      
      $j_title="" ;
      $j_id="";
      $j_description="";
      $j_branch="";
     
      $err="";
      
      
      if(isset($_POST['add'])){
				
				if(empty($_POST['j_title'])){
					
					$err="*";
				}
				else
				{			
				$j_title=htmlspecialchars($_POST['j_title']);
				
				}
          if(empty($_POST['j_id'])){
					
					$err="*";
				}
				else
				{			
				$j_id=htmlspecialchars($_POST['j_id']);
				
				}
          
          if(empty($_POST['j_Description'])){
					
					$err="*";
				}
				else
				{			
				$j_description=htmlspecialchars($_POST['j_description']);
				
				}
          
          			
				$j_branch=htmlspecialchars($_POST['j_branch']);
          
           }
      ?>
      
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
      if(isset($_POST['movies'])){
         
           header("Location:superadmin.php");
         
      }
      
       if(isset($_POST['preview'])&& !empty($_POST['j_title']) && !empty($_POST['j_id']) && !empty($_POST['j_description']) && !empty($_POST['j_branch'])){
           setcookie("mname", $_POST['j_title']);
          setcookie("mid", $_POST['j_id']);
          setcookie("mdescription", $_POST['j_description']);
          setcookie("mbranch", $_POST['j_branch']);
          /* setcookie("Id", $m_id);
           setcookie("Description", $m_description);*/
           header("Location:add_job_preview.php");
         
      }
      
      
      ?>
      
     
    
      
      
 <section> 
     
   <div class="sidebar ">
       <form method="post">
    <header >Dashboard</header>
  <ul>
      
    <li><button class="button-sidebar button3"type="submit" name="movies"><i class="fas fa-film" style="padding-right:10px"></i>Movies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_movie"><i class="far fa-file-video"style="padding-right:10px"></i>Add movie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button></li>
    <li><button class="button-sidebar button3"type="submit" name="add_movie_timing"><i class="fas fa-hourglass-half"style="padding-right:10px"></i>Add movie Timing&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3"type="submit" name="add_admin"><i class="fas fa-user-shield"style="padding-right:10px"></i>Add Admin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
      <li><button class="button-sidebar button3 active"type="submit" name="add_job"><i class="far fa-question-circle"style="padding-right:10px"></i>Add Job Post&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></li>
  
  </ul>
           </form>
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
                    <li class="listDesign" Style="float:right"><a class="listDesignA" href="#">Profile</a></li>
                     <li class="listDesign" Style="float:right"><a class="listDesignA"  href="#">Setting</a></li>
                   <li class="listDesign" Style="float:right"><a class="active" href="">Home</a></li>
                    
                   
                    
                
                </ul>
                
             </div>
                
        
     
     <div style="margin-top:380px;padding-bottom:-100px;" class="portion">
     

        
        <form method="post" action="../controllers/add_job_controller.php" enctype="multipart/form-data">
    
     <table style="margin-left:80px;" class="pos3" >
         
         <tr>
         <td colspan="2" style="text-align:center">ADD JOB POST</td>
         
         </tr>
     
        <tr>
         
            <td>Job Title:</td>
             <td><input class="inpt" type="text"  name="j_title"> <span style="color:red"><?php if(empty($_POST['j_title'])){echo $err;}?></span></td>
         
         </tr>   
         
          
         
          
          <tr>
         
            <?php $branches = array("Bashundhara","Mohakhali","Panthopath");
				
				?>
            <td>Branch:</td>
             <td><select class="inpt" name = "j_branch" >
							<?php foreach($branches as $i){?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>    <!-- branches -->
							<?php }?>
							</select><span style="color:red"><?php if(empty($_POST['j_branch'])){echo $err;}?></span> </td>
       
         </tr>
         
         <tr>
         
            <td>Description:</td>
             <td><input class="inpt" type="text"  name="j_description"><span style="color:red"><?php if(empty($_POST['j_description'])){echo $err;}?></span></td>
         
         </tr>
         
         
     </table>
         <table style="margin-top:-20px;margin-left:45%;">
         
             <tr>
             
                <td class="btn-padding">
                    <button type="submit" name="add"class="button button1">ADD</button>
                </td>
                <!--
                 <td class="btn-padding">
                    <button type="submit" name="preview" class="button button1">PREVIEW</button>
                </td> -->
                 
                
             </tr>
         
         </table>
            
            <div style="margin-top:-270px;margin-left:69%;height:450px;width:700px; ">
         <iframe  class="iframe" src="alljobs.php" name="iframe_a"></iframe>
         </div>
         </form>
       
         </div>

     
     
         
     
     
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
