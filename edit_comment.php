<?php 
session_start();
?>

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

<script type="text/javascript">
function searchq(){
	var searchTxt = $("input[name='search']").val();
	$.post("searchPolice.php", {searchVal: searchTxt}, function(output){
		$("#output").html(output);
	});
}
</script>

</head>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
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
              <a class="nav-link" href="logout.php">logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">ADD ITEM</h1>
          <div class="list-group">
		  	<a href="administraton.php" class="list-group-item">Home</a>
            <a href="additem.php" class="list-group-item">Add Item</a>
            <a href="all_item.php" class="list-group-item">View All Items</a>
            <a href="#" class="list-group-item">Add Events</a>
			<a href="#" class="list-group-item">View All Events</a>
			<a href="all_comment.php" class="list-group-item">View All Comments</a>
          </div>
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
		 <h5 class="card-header">Search</h5>
            <div class="card-body">
			 <form action="search_Item.php" method="post">
              <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Search for..." onKeyDown="searchq();">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
			</div>
			</form>
		  </div>
        </div>
        <!-- /.col-lg-3 -->
		
 <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
 
<div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Nyanza Administration
          <strong>Panel</strong>
        </h2>
        <hr class="divider">
       
      </div>
          </div>
<?php
if(isset($_GET['idcom']))
{
$id=$_GET['idcom'];
$qry=mysql_query("SELECT * FROM comments WHERE idcom=$id", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
/* Fetching data from the field "title" */
$row=mysql_fetch_array($qry);
}
?>
          <div class="row"></div>
<form action="comment_edited.php" method="post" enctype="multipart/form-data" name="form1" id="form"  onSubmit="return validation();">
<input type="hidden" name="idcom" id="idd" value="<?php echo $row['idcom']; ?>" class="form-control"/>
<div class="col-lg-12">
<div class="form-group">
<label for="fname">Names</label>
<input type="text" name="names" value="<?php echo $row['names'];?>" placeholder="Enter Item Name" class="form-control">
</div>

<div class="form-group">
<label for="fname">Email</label>
<input type="text" name="email" value="<?php echo $row['email'];?>" placeholder="Enter Item Name" class="form-control">
</div>


<div class="form-group">
<label>Message*</label>
<textarea class="form-control" id="comment" name="comment" placeholder="Enter Item Description"><?php echo $row['comment'];?></textarea>
</div>

<div class="form-group">
<input name="add" type="submit" value="Submit Edited" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;
		  </div>
          </div> <!-- /.row -->
</div>
</div>
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
<style>
.tl_row img{
	width:100%;
	height:250px;
}
</style>