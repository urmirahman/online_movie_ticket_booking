<?php
	require_once '../models/database.php';
 


	if(isset($_POST["add"]))
	{
		insertProduct();
	}
	else if(isset($_GET["edit"]))
	{
		editProduct();
	}
else if(isset($_GET["delete"])){
    $p= $_GET["mid"];
    deletemovie($p);
}
    /*
	function getAllProducts()
	{
		$query ="SELECT * FROM products";
		$products = get($query);
		return $products;	
	}
	*/
	function deletemovie($id)
	{
       $query=" DELETE FROM addmovie WHERE m_id=$id";
        execute($query);
		header("Location:../views/allmovies.php");
		
	}
function getmovie($id)
	{
		$query="SELECT * FROM addmovie WHERE m_id=$id";
		$movie=get($query);
		return $movie;
		
	}
	function getMovieName(){
		$query = "SELECT m_id,m_name FROM addmovie";
		$movieName = get($query);
		return $movieName;
	}
function getmovieId(){
		$query = "SELECT m_id FROM addmovie";
		$movieid = get($query);
		return $movieid;
	}

function getAllMovies()
	{
		$query ="SELECT * FROM addmovie";
		$movies = get($query);
		return $movies;	
	}
	function insertProduct()
	{
		$m_name=$_POST["m_name"];
		
		$m_description=$_POST["m_description"];
		$m_rate=$_POST["m_rate"];
		
		 //file upload
        $target_dir="../storage/movie_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
		//echo $target_file;
		$query="INSERT INTO addmovie VALUES(NULL,'$m_name','$m_description',$m_rate,'$target_file')";
		execute($query);
		header("Location:../views/add_movie.php");
		
	}
	function editProduct()
	{
		$target_file=$_GET["prev_image"];
		$id=$_GET["id"];
		$title=$_GET["title"];
		$rate=$_GET["rate"];
		$des=$_GET["des"];
		if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])) 
		{
			$target_dir="../storage/movie_image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			//echo 'No upload';
		}
		$query="UPDATE addmovie SET m_name='$title',m_rate=$rate,m_description='$des',thumbnail='$target_file' WHERE m_id=$id";
		echo $query;
		execute($query);
		header("Location:../views/allmovies.php");
	}
?>