<?php
	
	require_once '../controllers/add_job_controller.php';
 
	 $key=$_GET['sk'];
$jobs = getAlljob($key);/*
foreach($movies as $m){
    echo $m["m_name"];
}
    */
	
?>
  <form method="get" action="../controllers/add_job_controller.php">
    
      <div class="topnav">
        
      
    
      
   
  
          
        </div>
      
      <?php 
        foreach ($jobs as $job){
            
        $id= $job["j_id"];
      ?>
  
    <div  class="card-view">
        <table>
           
           
           
            <tr>
                 <td >
            <span style="color:white;font-size:1px;" value="" name="mid"><?php echo $id;?></span>
                </td>
                <td class="td1"> <img style="height:70px;" class="image" src="../storage/movie_image/job.jpg" >
                </td> 
            <td >
                <h3 class="title"><?php echo $job["j_title"];?></h3> 
                <h3 class="rating"><?php echo $job["j_branch"];?></h3>
                
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
      