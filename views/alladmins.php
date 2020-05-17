<?php 
require_once("../controllers/add_admin_controller.php");
	//$products=getAllProducts();
$admins = getAlladmins()
//$adminid=getadminId();
/*
$key=$_GET['sk'];
$movie = getAllMovie($key);
foreach($movie as $p){
    echo $p["m_name"]; }*/


?>
<html lang="en" dir="ltr">
  <head>
      
      <script>
       function search(){
           http = new XMLHttpRequest();
           var search_word=document.getElementById("search_input").value;
           http.onreadystatechange = function(){
               if(http.readyState == 4 && http.status == 200){
                   document.getElementById("search_result").innerHTML=http.responseText;
               }
           }
           http.open("GET","admin_search.php?sk="+search_word,true);
            //http.open("GET","allmovies.php?sk="+search_word,true);
			http.send();
          
       }
        
      </script>
    <meta charset="utf-8">
    <title>All admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <!-- Font-awesome CDN CSS -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
   
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/allmovies.css">

    
  </head>
  <body>
    <input id="search_input" onkeyup="search()" class="search-input" type="text" placeholder="Search.." name="search" > 
      
      <div id="search_result">
      
      </div>
      <form method="get" action="../controllers/add_movie_controller.php">
    
      <div class="topnav">
        
      
    
      
   
  
          
        </div>
      
      <?php 
        foreach ($admins as $admin){
            
        $id= $admin["a_id"];
      ?>
  
    <div  class="card-view">
        <table>
           
           
           
            <tr>
                 <td >
            <span style="color:white;font-size:1px;" value="" name="mid"><?php echo $id;?></span>
                </td>
                <td class="td1"> <img class="image" src="<?php echo $admin["a_image"];?>" >
                </td> 
            <td >
                <h3 class="title"><?php echo $admin["a_name"];?></h3> 
                <h2 class="rating"><?php echo $admin["a_branch"];?></h2>
                <span class="rating">Access:<?php echo $admin["a_access"];?></span>
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
