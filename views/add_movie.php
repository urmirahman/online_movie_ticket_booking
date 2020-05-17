
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADD MOVIE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font-awesome CDN CSS -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
  

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/add_movie.dashboard.css">
<!--  AJAX search  -->
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
      
      $m_name="Imitation Game" ;
      $m_id="";
      $m_description="action";
      $m_rate="5";
      $m_thumbnail="";
      $err="";
      
      
      if(isset($_POST['preview'])){
          
         setcookie("mname", $m_name);
         
         setcookie("mdes",$m_description);
          setcookie("mrate", $m_rate);
           header("Location:add_movie_preview.php");
          
				
				
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
      
      
   
    
      ?>
      
     <!-- sidebar   -->
      
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
                     <li class="listDesign" Style="float:right"><a  class="listDesignA" href="userLogin.php">Logout</a></li>
                    <li class="listDesign" Style="float:right"><a class="listDesignA" href="superadmin_profile.php">Profile</a></li>
                     <li class="listDesign" Style="float:right"><a class="listDesignA"  href="#">Setting</a></li>
                   <li class="listDesign" Style="float:right"><a class="active" href="">Home</a></li>
                    
                   
                    
                
                </ul>
                
             </div>
       
         
        
     
     <div style="margin-top:350px;padding-bottom:-100px;" class="portion">
     <div class=" pos"></div>

      <!--   -->    
    
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
             <td><input   type="text" class="inp" name="m_description"><span style="color:red"><?php if(empty($_POST['m_description'])){echo $err;}?></span></td>
         
         </tr>
          <tr>
         
            <td>Imdb Rate:</td>
             <td><input  type="text" class="inp"  name="m_rate"><span style="color:red"><?php if(empty($_POST['m_rate'])){echo $err;}?></span></td>
       
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
               
             </tr>
         
         </table>
        
          <!-- list view iframe --->
            
         </div>
    
     
     </form>
       <!-- List of all movies   -->
     
       <div style="margin-top:-500px;margin-left:60%;height:75%;width:700px; ">
         <iframe height="70%" width="520px" class="iframe" src="allmovies.php" name="iframe_a"></iframe>
           <form method="post">
     <button style="margin-top:-13.5%; margin-left:-50%;" type="submit" name="preview" class="button button1">PREVIEW</button>
     </form>
         </div>
     
     </section> 
      
 
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
</html>
