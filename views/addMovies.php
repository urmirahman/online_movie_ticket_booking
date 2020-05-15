<?php
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $connStr = mysqli_connect("localhost","root","","bdmdb");
    if ($connStr->connect_error)
        die("<script>alert('Connection failed: " . $connStr->connect_error . "');</script>");
    $tfile = "";
    
    if ($_FILES["thumbnail"]["size"] > 0) {
        try {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
            if ($check !== false) {
                if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
                    $tfile = $target_file;
                } else {
                    echo "<script>alert('Upload failed!');</script>";
                }
            } else {
                echo "<script>alert('Not an Image!');</script>";
            }
        } catch (Exception $e) {
            echo "<script>alert('Error: ".$e."!');</script>";
        }
        
    }
    $sql = "insert into movies (m_name, m_desc, m_rating, m_thumb) values ('";
    $sql .= $_POST['movie_name']."','".$_POST['description']."','".$_POST['imdb_rating']."', '".$tfile."')";

    if ($connStr->query($sql)) {
        echo "<script>alert('Movie Added!');</script>";
    }
    else {
        echo "<script>alert('Error: " . $connStr->error . "');</script>";
    }
    $connStr->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="movies.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="col-md-12">
            
        </div>
        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a href="movies.php" class="list-group-item list-group-item-action ">
                        Movies
                    </a>
                    <a href="addMovies.php" class="list-group-item list-group-item-action active">Add Movies</a>
                    <a href="addMovieInfo.php" class="list-group-item list-group-item-action">Add Movie Info</a>
                    <a href="addFoodPost.php" class="list-group-item list-group-item-action">Add Food Post</a>
                    <a href="#" class="list-group-item list-group-item-action">Add Job Post</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="h3">
                                    Add Movies
                                </div>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="movie_name">Movie Name</label>
                                        <input type="text" class="form-control" name="movie_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="imdb_rating">IMDB Rating</label>
                                        <input type="text" class="form-control" name="imdb_rating">
                                    </div>
                                    <div class="form-group">
                                        <label for="thumbnail">Thumbnail</label>
                                        <input type="file" class="form-control-file" name="thumbnail">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-primary ml-5">Select</button>
                                    <button type="button" class="btn btn-primary ml-2">Update</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>