<?php
	
	require_once '../controllers/add_movie_controller.php';
 
	 $key=$_GET['sk'];
$movies = getAllMovie($key);/*
foreach($movies as $m){
    echo $m["m_name"];
}
    */
	
?>
 <form method="get" action="../controllers/add_movie_controller.php">
    
      <div class="topnav">
        
      
    
      
   
  
          
        </div>
      
      <?php 
        foreach ($movies as $movie){
            
        $id= $movie["m_id"];
      ?>
   
    <div  class="card-view">
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