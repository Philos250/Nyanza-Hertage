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
              <a class="nav-link"  href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
			<li class="nav-item">
              <a class="nav-link active" href="about.php">Visitor</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Visitor</h1>
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
          <h1>Info</h1>



          </div>

          <div class="row"></div>
<div class="entry-content"><p style="text-indent:-.25in; line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">A.<span style="font-variant-numeric: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;; ">&nbsp;&nbsp;&nbsp; </span></span></b><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">ENTRANCE FEE</span></b></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">&nbsp;</span></b></p><table border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border:none" class="contenttable"> <tbody><tr> <td valign="top" width="175" style="width:131.15pt; border:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt" colspan="2"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">CATEGORY</span></b></p></td> <td valign="top" width="110" style="width:82.85pt; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">NATIONALS</span></b></p></td> <td valign="top" width="115" style="width:1.2in; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">CITIZENS- EAC/CEPGL</span></b></p></td> <td valign="top" width="111" style="width:83.6pt; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">RESIDENTS IN RWANDA</span></b></p></td> <td valign="top" width="111" style="width:83.5pt; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">NON- RESIDENTS</span></b></p></td> </tr> <tr> <td valign="top" width="175" style="width:131.15pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt" colspan="2"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Adults </span></p> <p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p></td> <td valign="top" width="110" style="width:82.85pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">1500</span></p></td> <td valign="top" width="115" style="width:1.2in; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">3000 or 5$</span></p></td> <td valign="top" width="111" style="width:83.6pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">5000 or 8$</span></p></td> <td valign="top" width="111" style="width:83.5pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">6000 or 10$</span></p></td> </tr> <tr style="height:30.75pt"> <td valign="top" width="109" style="width:82.1pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt; height:30.75pt" rowspan="2"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;Undergraduate students</span></p> <p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p> <p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p></td> <td valign="top" width="65" style="width:49.05pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:30.75pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Single</span></p> <p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p></td> <td valign="top" width="110" style="width:82.85pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:30.75pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">700</span></p></td> <td valign="top" width="115" style="width:1.2in; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:30.75pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">1000 or 3$</span></p></td> <td valign="top" width="111" style="width:83.6pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:30.75pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">1500 or 3$</span></p></td> <td valign="top" width="111" style="width:83.5pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:30.75pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">3000 or 5$</span></p></td> </tr> <tr style="height:24.0pt"> <td valign="top" width="65" style="width:49.05pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:24.0pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Group of 20</span></p></td> <td valign="top" width="110" style="width:82.85pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:24.0pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">500</span></p></td> <td valign="top" width="115" style="width:1.2in; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:24.0pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">700</span></p></td> <td valign="top" width="111" style="width:83.6pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:24.0pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">500</span></p></td> <td valign="top" width="111" style="width:83.5pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt; height:24.0pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">2000 or 4$</span></p></td> </tr> </tbody></table><p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Combined tickets</span></b></p><table border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border:none" class="contenttable"> <tbody><tr> <td valign="top" width="306" style="width:229.25pt; border:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Type of ticket</span></b></p></td> <td valign="top" width="240" style="width:2.5in; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Price</span></b></p></td> </tr> <tr> <td valign="top" width="306" style="width:229.25pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">All museums</span></p></td> <td valign="top" width="240" style="width:2.5in; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Discount of 30%</span></p></td> </tr> <tr> <td valign="top" width="306" style="width:229.25pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">King’s Palace Museum &amp;National Art Gallery</span></p></td> <td valign="top" width="240" style="width:2.5in; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Discount of 20%</span></p></td> </tr> <tr> <td valign="top" width="306" style="width:229.25pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Presidential Palace Museum &amp; Natural History Museum</span></p></td> <td valign="top" width="240" style="width:2.5in; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Discount of 20%</span></p></td> </tr> <tr> <td valign="top" width="306" style="width:229.25pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Ethnographic Museum, King’s Palace Museum &amp; National Art Gallery Museum</span></p></td> <td valign="top" width="240" style="width:2.5in; border-top:none; border-left:none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Discount of 25%</span></p></td> </tr> </tbody></table><p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></b></p>
<p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">N.B:</span></b><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif"> - A single ticket is valid for 3 hours</span></b></p>
<p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - A combined ticket is valid for 3months</span></b></p>
<p style="margin-bottom:0in; margin-bottom:.0001pt; line-height: normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></b></p>
<p style="text-indent:-.25in; line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">B.<span style="font-variant-numeric: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;; ">&nbsp;&nbsp;&nbsp;&nbsp; </span></span></b><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">Other services</span></b></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">B. 1.<b> </b>wedding photos: 25,000 frw</span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">&nbsp;&nbsp; </span></b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;2. Video coverage: 100,000 frw (on special request)</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp; <b>C. Hiring gardens</b></span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">C.1. Ethnographic Museum – Huye</span></b></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">a. Gardens &amp; photos: 150,000Frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">b. Exclusive of the gardens: 300,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">c. Other ceremony: * 1 to 50 people: 50,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 50- above: 250,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">d. Hands on experience: 150,000frw/day</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">C.2. King’s Palace Museum- Rukari</span></b></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">a. Full package (garden, tents, chairs &amp; photos): 200,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">b. Gardens only: 100,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">c. Gardens &amp; chairs: 170,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">d. Inyambo parading: 50,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">e. Other ceremonies: * 1 to 50 people: 30,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 50 – above: 250,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">C.3. National Art Gallery</span></b></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">a. All inclusive: 100,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">b. Gardens only: 50,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">C.4. Natural History Museum</span></b></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">&nbsp;</span></b></p>
<p style="margin-left:.75in; text-indent:-.25in; line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">a.<span style="font-variant-numeric: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">Terrace: 200,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>C.5. Presidential Palace Museum</b></span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-size: 12.0pt; font-family:&quot;Times New Roman&quot;,serif">a. All inclusive: 400,000Frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. Other ceremonies: * 1 to 50 people: 50,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * 50 – above: 400,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>C.6. Museum of Environment </b></span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-size: 12.0pt; font-family:&quot;Times New Roman&quot;,serif">a. Gardens only: 150,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; b. Other ceremonies: * 1 to 50 people: 40,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * 50- above: 200,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; c.&nbsp; conference hall or wedding: 200,000frw</span></p>
<p style="line-height:normal" class="bodytext"><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>C.7 National Liberation Museum Park- Mulindi</b></span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family: &quot;Times New Roman&quot;,serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">a. Visit into H.E Paul Kagame’s bunker: 10,000frw&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
<p style="line-height:normal" class="bodytext"><b><span style="font-size:12.0pt; font-family:&quot;Times New Roman&quot;,serif">D. TRADITIONAL DANSE PERFORMANCE AT ETHNOGRAPHIC MUSEUM.</span></b></p><table border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse; border:none" class="contenttable"> <tbody><tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">Group of visitors</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">8:00 am-04:00pm</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">04:00 pm-06:00pm</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-left:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">06:00pm-08:00pm</span></b></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">1-2 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">50,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">70,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">3-5 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">70,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">90,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">6-10 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">100,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">120,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">11-15 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">120,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">140,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">16-20 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">140,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">160,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">21-25 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">160,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">180,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">26-30 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">180,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">200,000 frw</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> <tr> <td valign="top" width="160" style="width:119.7pt; border:solid windowtext 1.0pt; border-top:none; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">More than 30 people</span></b></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">4,000 frw per person</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">5,000 frw per person</span></p></td> <td valign="top" width="160" style="width:119.7pt; border-top:none; border-left: none; border-bottom:solid windowtext 1.0pt; border-right:solid windowtext 1.0pt; padding:0in 5.4pt 0in 5.4pt"><p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">Increase of 25%</span></p></td> </tr> </tbody></table><p style="margin-top:0in; margin-right:0in; margin-bottom: 10.0pt; margin-left:.5in; line-height:normal" class="bodytext"><b><span style="font-family:&quot;Times New Roman&quot;,serif">&nbsp;</span></b></p>
<p style="margin-bottom:10.0pt; line-height:normal" class="bodytext"><span style="font-family:&quot;Times New Roman&quot;,serif">N.B: For week-ends, holidays and special order, <b>Increase of 50%</b></span></p>
<p style="margin-bottom:10.0pt; line-height:normal" class="bodytext">&nbsp;&nbsp;&nbsp;&nbsp; The validity of ticket is 3 hours.</p>
<p style="margin-bottom:10.0pt; line-height:normal" class="bodytext">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The validity of combined ticket is 3 months.</p></div><!-- .entry-content -->
        </div>        
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