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

<?php
$id=$_POST['ID'];
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
if($img)
{
$nam=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];
$err=$_FILES['image']['error'];
$uploadDir="upload";
if($err==0)
{
move_uploaded_file($tmp, "upload/$nam");
}
$qry=mysql_query("UPDATE ibikoresho SET image='$img' WHERE ID='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
}
?>
<?php
$qry=mysql_query("UPDATE ibikoresho SET name='$name',size='$size',year='$year',chamber='$chamber',decs='$decs' WHERE ID='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "Item Updated Successfully!!";
echo "<br/>";
}
?>
<a href=all_item.php>Go Back to Admin Panel</a>
</div>
</div>
</body>
</html>
