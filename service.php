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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="service.php">Services</a>
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

        <div class="col-lg-3">

          <h1 class="my-4">Service</h1>
          <div class="list-group">
            <a href="news.php" class="list-group-item">News</a>
            <a class="list-group-item" href="Rwanda_Museums_Events_Calendar_2017-2018.pdf" target="_blank"><img src="pdf.PNG" /> Upcoming Events</a>
            <a href="visitor_info.php" class="list-group-item">VISITOR INFO</a>
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
                <input name="search" type="text" class="form-control" placeholder="Search for..." onkeydown="searchq();">
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
          <h1>Nyanza Hertage</h1>

<h3>Services</h3>

<h3>Foreword:</h3>
It is my pleasure to present to you this Service Charter for the Institute of National Museums of Rwanda.
This Service Charter has been prepared in tandem with the Government&acute;s reform agenda and in the spirit of being responsive to effective service delivery, transparency and accountability.
This Service Charter spells out the role of the Institute of National Museums of Rwanda, and highlights the services offered and requirements therein. It lists the service centers at which our services can be accessed and the guiding legal instruments.
The development of this charter signifies our commitment to serve our clients with a view to creating a better understanding and enhancing our service delivery.</br><a class="list-group-item" href="INMR_updated_Service_Charter_February_2017.pdf" target="_blank"><img src="pdf.PNG" /> Click to get a full Service Charter document</a></br>

<h1>Working days</h1>
            All Museums are open every day from <strong>8am &ndash; 6pm </strong></br></br>
            <strong>On Umuganda</strong>- [community work] day, which is the last Saturday of every month, all museums     open at <strong>12:00 am</strong> </br></br>
<strong>Except on: 7th April</strong> when all museums are closed

          </div>

          <div class="row"></div>
            
          </div>
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