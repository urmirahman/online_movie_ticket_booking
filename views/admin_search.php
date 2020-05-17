<?php
	
	require_once '../controllers/add_admin_controller.php';
 
	 $key=$_GET['sk'];
$admins = getAllMovie($key);/*
foreach($movies as $m){
    echo $m["m_name"];
}
    */
	
?>
  <form method="get" action="../controllers/add_admin_controller.php">
    
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
                <span class="rating">Rating:<?php echo $admin["a_access"];?></span>
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
      