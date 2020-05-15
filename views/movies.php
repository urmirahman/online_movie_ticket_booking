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
        <style type="text/css">
        	.result {
        		background-color: #fff;
        		border-radius: 7px;
        		padding: 12px 7px;
			    margin: 2px 0;
			    box-shadow: #ccc 0px 0px 0px 2px;
        	}
        </style>
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
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <form action="" method="get" onsubmit="return false">
                    <input type="text" name="search" id="sf" placeholder="Search..." class="form-control" onkeyup="getResult(this.value)">
                    <div id="res" style="position: absolute;z-index: 99;width: 100%"></div>
					<script type="text/javascript">
						function getResult(val) {
							var dom = document.getElementById('res');
							var xhttp = new XMLHttpRequest();
							xhttp.onreadystatechange = function() {
							    if (this.readyState == 4 && this.status == 200) {
							    	var out = JSON.parse(this.responseText);
							    	dom.innerHTML = "";
							    	out.forEach(function(item,i){
							    		dom.innerHTML += '<div class="result"><a href="movies.php?id='+item.id+'"><h5>'+item.name+'</h5></a><small>'+item.rating+'</small></div>';
							    		
							    	});
								    //dom.innerHTML = this.responseText;
							    }
							};
							xhttp.open("GET", "ajax.php?q="+val, true);
							xhttp.send();
							//dom.innerHTML = val;
						}
					</script>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-3">
                <div class="list-group">
                    <a href="movies.php" class="list-group-item list-group-item-action active">
                        Movies
                    </a>
                    <a href="addMovies.php" class="list-group-item list-group-item-action">Add Movies</a>
                    <a href="addMovieInfo.php" class="list-group-item list-group-item-action">Add Movie Info</a>
                    <a href="addFoodPost.php" class="list-group-item list-group-item-action">Add Food Post</a>
                    <a href="#" class="list-group-item list-group-item-action">Add Job Post</a>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                    $connStr = mysqli_connect("localhost","root","","bdmdb");
                    if ($connStr->connect_error)
                        die("<script>alert('Connection failed: " . $connStr->connect_error . "');</script>");
                    if (isset($_GET['id'])) {
                    	$sql = "select * from movies where m_id=".$_GET['id'];
	                    $res = $connStr->query($sql);
	                    while ($row = $res->fetch_assoc()) {
	                        echo '
	                        <div class="row m-1 py-1" style="background:#fff;border-radius:5px">
	                            <div class="col-3">
	                                <img src="'.$row['m_thumb'].'" alt="*" width="200px" />
	                            </div>
	                            <div class="col-9 px-4">
	                                <h4>'.$row['m_name'].'</h4>
	                                <small>Rating: '.$row['m_rating'].'</small>
	                                <p>'.$row['m_desc'].'</p>
	                            <hr/>
	                        ';
	                    }
	                    $sql = "select * from movie_time where m_id=".$_GET['id'];
	                    $res = $connStr->query($sql);
	                    echo '
	                        		<h4>Movie Times:</h4>';
	                    while ($row = $res->fetch_assoc()) {
	                    	echo 'Date:'.$row['mt_date'].'<br/>';
	                    	echo 'Time:'.$row['mt_time'].'<br/>';
	                    	echo 'Tickets:'.$row['mt_tickets'].'<hr/>';
	                    }
	                    echo '</div>
	                        </div>';
	                    
                    }
                    else {
                    	$sql = "select * from movies";
	                    $res = $connStr->query($sql);
	                    while ($row = $res->fetch_assoc()) {
	                        echo '
	                        <div class="row m-1 py-1" style="background:#fff;border-radius:5px">
	                            <div class="col-3">
	                                <img src="'.$row['m_thumb'].'" alt="*" width="200px" />
	                            </div>
	                            <div class="col-9 px-4">
	                                <a href="movies.php?id='.$row['m_id'].'"><h4>'.$row['m_name'].'</h4></a>
	                                <small>Rating: '.$row['m_rating'].'</small>
	                                <p>'.$row['m_desc'].'</p>
	                            </div>
	                        </div>

	                        ';
	                    }
                    }
                    
                    $connStr->close();
                ?>
            </div>
        </div>
    </div>
</body>

</html>