<?php 

	$key=$_GET["sk"];
	
	$con = mysqli_connect('localhost', 'root', '',);

	mysqli_select_db($con, 'online_movie');

	$query="SELECT m_name FROM addmovie WHERE m_name LIKE '%$key%'";
	
	$rs=mysqli_query($con,$query);

?>


        
        <table >
			<?php 
				while($row=mysqli_fetch_assoc($rs)){
					
					echo "<tr>";
					echo "<td>".$row["m_name"]."</td>";
					echo "</tr>";
					
				}
            
            ?>
        </table>
  