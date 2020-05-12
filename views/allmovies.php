
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Allmovies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
    
    
    <!-- Font-awesome CDN CSS -->
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,700i,900&display=swap" rel="stylesheet">
   
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/allmovies.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
    
  </head>
  <body>
    
   
    <div class="card-view">
        <table>
            <tr>
                <td class="td1"> <img class="image" src="../storage/movie_image/1.1.jpg" >
                </td> 
            <td >
                <h3 class="title"> Title</h3> 
                <span class="rating">Rating</span>
            </td>
                <td class="td2" rowspan="2">
                    <input type="submit" value="Update" name="update" class="button button1">
                    <input type="submit" value="Delete" name="delete" class="buttonn button2">
                </td>
            </tr>
          <!---  <tr>
            
                <td colspan="3">
               <span class="descrip" >Lorem Ipsum is simply dummy text of the printing and typesetting industry.when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span>
                    
                </td>
                
            </tr> -->
        </table>
        
      </div>
  </body>
</html>
