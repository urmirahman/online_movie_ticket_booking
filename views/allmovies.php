<?php 
require_once("../controllers/add_movie_controller.php");
	//$products=getAllProducts();
$movies = getAllMovies();
$movieid=getmovieId();

if(isset($_POST['update'])){
     setcookie("mid", $_GET['mid']);
}

?>
<html lang="en" dir="ltr">
  <head>
      
      
    <meta charset="utf-8">
    <title>Allmovies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <!-- Font-awesome CDN CSS -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
   
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/allmovies.css">

    
  </head>
  <body>
      <form method="get" action="../controllers/add_movie_controller.php">
    
      <div class="topnav">
        
      
    
      <input class="search-input" type="text" placeholder="Search.." name="search">
      <button class="search-button" type="submit"><i class="fa fa-search "></i></button>
   
  
          
        </div>
      
      <?php 
        foreach ($movies as $movie){
            
        $id= $movie["m_id"];
      ?>
   
    <div class="card-view">
        <table>
           
           
           
            <tr>
                 <td>
            <span style="color:black;font-size:20px;" value="" name="mid"><?php echo $id;?></span>
                </td>
                <td class="td1"> <img class="image" src="<?php echo $movie["thumbnail"];?>" >
                </td> 
            <td >
                <h3 class="title"><?php echo $movie["m_name"];?></h3> 
                <span class="rating">Rating:<?php echo $movie["m_rate"];?></span>
            </td>
                <td style="margin-left:50px" class="td2" rowspan="2">
                  <a class ="button button1"href="edit_movie.php?id='<?php echo $id; ?>'" >UPDATE</a> 
                       <a class ="buttonn button2"href="delete.php?id='<?php echo $id; ?>'" >DELETE</a> 
                    
                  
                </td>
            </tr>
        
        </table>
       
        
      </div>
    
          
      <?php 
            
			}
		?> 
   
           </form>
      
  </body>
</html>
