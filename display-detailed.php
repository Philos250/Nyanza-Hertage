<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
die("connection to database failed".mysql_error());
}
$dataselect = mysql_select_db("nyanza",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Nyanza Hertage</title>

<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- Custom styles for this Aplication -->
<link href="css/nyanza.css" rel="stylesheet">
</head>

<body>
<!-- Bootstrap core JavaScript -->
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Nyanza Hertage Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
<?php
if(isset($_GET['ID']))
{
$id=$_GET['ID'];
$qry=mysql_query("SELECT * FROM ibikoresho WHERE ID=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
while($row=mysql_fetch_array($qry))
{
?>
          <h1 class="my-4"><?php echo $row['name'];?>
            <small><?php echo $row['year'];?></small>
          </h1>

          <!-- Blog Post -->
          <div class="card mb-4">
			<?php echo "<img src='upload/".$row['image']."' class='card-img-top' alt='Card image cap'>"; ?>
            <div class="card-body">
              <h2 class="card-title"><?php echo $row['name'];?></h2>
              <p class="card-text"><?php echo $row['decs'];?></p>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $row['time'];?> by
              <a href="#">Nyanza Admin</a>
            </div>
          </div>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
<?php 
if(isset($_POST['search'])){
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	$query = mysql_query("SELECT * FROM ibikoresho WHERE name LIKE '%$searchq%' OR year LIKE '%$searchq%'") or die("Could not search");
	$count = mysql_num_rows($query);
	if($count == 0){
		$output = "There Was not Search result!";
		echo"$output";
	}else{
		while($row = mysql_fetch_array($query)){
			$id=$row['ID'];
			$name=$row['name'];
			$size=$row['size'];
			$year=$row['year'];
			$chamber=$row['chamber'];
			$time=$row['time'];
			$output .='<div>'.$name.''.$id.'</div>';
		}
	}
}
?>
          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
			<form action="search_Item.php" method="post">
            <div class="card-body">
              <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
			   </form>
            </div>
          </div>

         

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">More About <small><?php echo $row['name'];?></small></h5>
            <div class="card-body">
			<ul class="list-unstyled mb-0">
                    <li>
                      <strong>Size:</strong> <?php echo $row['size'];?>
                    </li>
					  <li>
                      <strong>Year of Publication:</strong> <?php echo $row['year'];?>
                    </li>
					  <li>
                      <strong>Chamber (<cite>Exact Location</cite>):</strong> <?php echo $row['chamber'];?>
                    </li>
			</ul>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Nyanza Hertage 2017</p>
      </div>
      <!-- /.container -->
    </footer>

  </body>

</html>
<?php
}
}
?>