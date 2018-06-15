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
<link rel="stylesheet" type="text/css" href="style.css">
<title>Deleting Item</title>
</head>

<body>
<h2 align="center">NYANZA HERTAGE MANAGEMENT SYSTEM ADMINISTRATION PANEL</h2>
<?php
if(isset($_GET['ID']))
{
$id=$_GET['ID'];
$qry=mysql_query("DELETE FROM ibikoresho WHERE ID='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "Item ".$id." DELETED Successfully";
echo "<br/>";
}
}
?>
<a href=all_item.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>
