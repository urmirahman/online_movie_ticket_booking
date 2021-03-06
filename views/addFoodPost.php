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

    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
    $connStr = mysqli_connect("localhost","root","","bdmdb");
    if ($connStr->connect_error)
        die("<script>alert('Connection failed: " . $connStr->connect_error . "');</script>");
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $sql = "insert into food_post (f_name, f_branch, f_offer, f_description) values ('";
        $sql .= $_POST['food_name']."','".$_POST['branch']."','".$_POST['offer']."', '".$_POST['description']."')";
        if ($connStr->query($sql))
            echo "<script>alert('Food Item Added!');</script>";
        else
            echo "<script>alert(\"Food Item Add Failed! ".$connStr->error."\");</script>";
    }
    $connStr->close();
?>
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
                    <a href="addMovies.php" class="list-group-item list-group-item-action">Add Movies</a>
                    <a href="addMovieInfo.php" class="list-group-item list-group-item-action">Add Movie Info</a>
                    <a href="addFoodPost.php" class="list-group-item list-group-item-action active">Add Food Post</a>
                    <a href="#" class="list-group-item list-group-item-action">Add Job Post</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="h3">
                                    Add Food Post
                                </div>
                                <form method="post">
                                    <div class="form-group">
                                        <label for="food_name">Food Name</label>
                                        <input type="text" class="form-control" name="food_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="branch">Branch</label>
                                        <input type="text" class="form-control" name="branch">
                                    </div>
                                    <div class="form-group">
                                        <label for="offer">Offer</label>
                                        <input type="text" class="form-control" name="offer">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description" rows="3"></textarea>
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