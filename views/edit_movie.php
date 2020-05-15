
<?php
require_once ('../controllers/add_movie_controller.php');


  $id = $_GET["id"];
  $movie= getmovie($id);
foreach($movie as $i){
    $title = $i["m_name"];
    $rating=$i["m_rate"];
    $des=$i["m_description"];
    $img =$i["thumbnail"];
    
    echo $title;
    echo $rating;
    echo $des;
    echo $img;

?>

<html>
    <head>
        <title>Edit movie</title>
        <meta charset="utf-8">
    <title>Allmovies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <!-- Font-awesome CDN CSS -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
   
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/edit_movie.css">
    
    </head>
    
    
    <body>
        

 

        <form method="get" action="../controllers/add_movie_controller.php">
     
      
             <table class="table">
            <tr>
                <td>
                  <img  src="<?php echo $img; ?>" style="height:100px;width:100px;text-align:center;border-radius:7px;" >
                </td>
                <td >
                    <input  class="inp" type="file" name="image">
                </td>
            </tr>
                <tr>
             <td >
                    <span >Title:<input class="inp" name="title" value="<?php echo $title; ?>" type="text"></span> </td>
                <td>
                    <span style="text-align:left">Rating:<input class="inp" name="rate" value="<?php echo $rating; ?>" style="width:100%;" type="text"></span>
                </td>
            </tr>
               
                
            
            <tr>
                
                <td colspan="2">
                Descripting:<span><input class="inp" name="des" value="<?php echo $des; ?>" style="width:100%;height:100px;" type="text"></span>
                </td>
            
            </tr>
        </table>
           
        
         <table class="" style="margin-left:50%;margin-top:-10px;">
         
             <tr>
             
                <td class="btn-padding">
                   
                       <button type="submit" name="add"class="button button1"><a href="allmovies.php">BACK </a> </button>
                   
                </td>
                           <input type="hidden" name="id" value="<?php echo $i["m_id"]?>" >
			<input type="hidden" name="prev_image" value="<?php echo $i["thumbnail"]?>" >
                 
                 <td class="btn-padding">
                    <button type="submit" name="edit" class="button button1">ADD</button>
                </td>
                 
                 
                 
             </tr>
             
         
         </table>

            <?php }?>
          
              </form>
        
       
        
    </body>

</html>