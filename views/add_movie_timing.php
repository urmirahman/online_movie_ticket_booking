<?php 
    include '../controllers/add_movie_controller.php';
    $movieNames = getMovieName();
	  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADD MOVIE TIME</title>
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
      
      $m_name="" ;
      $m_branch="";
      $m_time="";
      $m_date="";
      $m_tickets="";
      $err="";
      
      
      if(isset($_POST['add'])){
				
				if(empty($_POST['m_name'])){
					
					$err="*";
				}
				else
				{			
				$m_name=htmlspecialchars($_POST['m_name']);
				
				}
          
          
          
          
          if(empty($_POST['m_date'])){
					
					$err="*";
				}
				else
				{			
				$m_date=htmlspecialchars($_POST['m_date']);
				
				}
          
				
				
          
          $m_branch=htmlspecialchars($_POST['m_branch']);
          $m_time=htmlspecialchars($_POST['m_time']);
          $m_tickets=htmlspecialchars($_POST['m_tickets']);
          $m_date=htmlspecialchars($_POST['m_date']);
      }
      
     
      
      if(!empty($_POST['m_name']) && !empty($_POST['m_date']) && !empty($_POST['m_branch']) && !empty($_POST['m_time']) && !empty($_POST['m_tickets']) && isset($_POST['add'])){
          echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
          exit();
      }
     
     
      
      
      ?>
      
      <?php 
      
      if(isset($_POST['add_movie'])){
         
           header("Location:add_movie.php");
         
      }
      if(isset($_POST['movies'])){
         
           header("Location:superadmin.php");
         
      }
      if(isset($_POST['add_admin'])){
         
           header("Location:add_admin.php");
         
      }
      if(isset($_POST['add_job'])){
         
           header("Location:add_job_post.php");
         
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
 </form>
     <form method="post" action="../controllers/add_movie_timing_controller.php" enctype="multipart/form-data">
  
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
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/movie01New.jpg">  </td>  
            <td> <span class="card-font-t">Movie Name</span> <br> <span style="color:black;font-size:10px">rating:★★★★★★</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
      
     <div class="card">
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/movie03New.jpg">  </td>  
            <td> <span class="card-font-t">Movie Name</span> <br> <span style="color:black;font-size:10px">rating:★★★★★★</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     <div class="card">
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/movie02New.jpg">  </td>  
            <td> <span class="card-font-t">Movie Name</span> <br> <span style="color:black;font-size:10px">rating:★★★★★★</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     <div class="card">
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/slider3.jpg">  </td>  
            <td> <span class="card-font-t">Movie Name</span> <br> <span style="color:black;font-size:10px">rating:★★★★★★</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     
     <?php
      
      if(!empty($_POST['m_name']) && !empty($_POST['m_id']) && !empty($_POST['m_rate']) && !empty($_POST['m_description']) ){
     
     
      ?> 
      
      
     
     <div class="card">
   <table>
      
        <tr>
        
            <td colspan="2"> <img class="card__img" src="img/movie02New.jpg">  </td>  
            <td> <span class="card-font-t"><?php echo $m_name;?></span> <br> <span style="color:black;font-size:10px">rating:★★★★★★</span> </td> 
            <td ><span style="" ><a href="#">See More</a></span></td>
            
       </tr>
       </table>
  </div>
     
      <?php }?>
</div>
        
    
     <table class="pos3" >
     <tr>
             
             <td colspan="2" style="text-align:center">ADD MOVIE TIMING</td>
             
             </tr>
         
            
              
              <tr>
             
                <td>Movie Name:</td>
                 <td>
                 <select name="mm_name" >
                 <?php
              foreach($movieNames as $category)
              {
                echo "<option value='".$category["m_name"]."'>".$category["m_name"]."</option>";
              }
            ?>
            
          </select>
                 </td>
             
             </tr>
              <tr>
               <?php $branches = array("Bashundhara","Mohakhali","Panthopath");
            
            ?>
                <td>Branch:</td>
                 <td><select name = "m_branch" >
                  <?php foreach($branches as $i){?>
                    <option value ="<?php echo $i;?>"><?php echo $i;?></option>    <!-- branches -->
                  <?php }?>
                  </select><span style="color:red"><?php if(empty($_POST['m_branch'])){echo $err;}?></span> </td>
             
             </tr> 
             
             <tr>
                 <?php $time_slots = array("11.30 am - 2.30 pm","3 pm - 5 pm","7 pm to 10 pm");
            
            ?>
                <td>Time Slot:</td>
                 <td><select name = "m_time">
                  <?php foreach($time_slots as $i){?>
                    <option value="<?php echo $i;?>"><?php echo $i;?></option>    <!-- timeslots-->
                  <?php }?>
                  </select><span style="color:red"><?php if(empty($_POST['m_time'])){echo $err;}?></span></td>
             
             </tr>
              <tr>
             
                <td>Date:</td>
                 <td><input type="date"  name="m_date"><span style="color:red"><?php if(empty($_POST['m_date'])){echo $err;}?></span></td>
           
             </tr>

             <tr>
             
             <td>Tickets:</td>
              <td><select name="m_tickets" >
               <?php for($i = 250;$i<=500;$i++){?>
                 <option value="<?php echo $i;?>"><?php echo $i;?></option>    <!-- day -->
               <?php }?>
               </select><span style="color:red"><?php if(empty($_POST['m_tickets'])){echo $err;}?></span></td>
             
            
            
          </tr>
         
     </table>
         <table>
         
             <tr>
             
                <td class="btn-padding">
                    <button type="submit" name="add"class="button button1">ADD</button>
                </td>
                 </form>
                 <form method="post">
                 <td class="btn-padding">
                    <button type="submit" name="select" class="button button1">PREVIEW</button>
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
