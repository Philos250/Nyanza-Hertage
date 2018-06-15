<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
die("connection to database failed".mysql_error());
}
/* selecting the database "lafraternite" */
$dataselect = mysql_select_db("nyanza",$con);
if(!$dataselect)
{
die("Database namelist not selected".mysql_error());
}
?>

<?php
$name=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$err=$_FILES['image']['error'];
$uploadDir="upload";
if($err==0)
{
move_uploaded_file($tmp, "upload/$name");
}
$name=$_POST['name'];
$img=$_FILES["image"]["name"];
$size=$_POST['size'];
$year=$_POST['year'];
$chamber=$_POST['chamber'];
$decs=$_POST['decs'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JDP</title>
<style type="text/css">
</style>
<link href="admin_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2 align="center">NYANZA HERTAGE MANAGEMENT SYSTEM ADMINISTRATION PANEL</h2>
<?php
$qry=mysql_query("INSERT INTO ibikoresho (name,image,size,year,chamber,decs,time) VALUES ('$name','$img','$size','$year','$chamber','$decs',now())"); 
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "Item Added Successfully";
echo "<br/>";
}
?>
<a href=admin.php>Go back to Admin Panel</a>
</div>
</div>
</body>
</html>
