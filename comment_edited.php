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
$id=$_POST['idcom'];
$names=$_POST['names'];
$email=$_POST['email'];
$comment=$_POST['comment'];
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
$qry=mysql_query("UPDATE comments SET names='$names',email='$email',comment='$comment' WHERE idcom='$id'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "Comment Updated Successfully!!";
echo "<br/>";
}
?>
<a href=all_comment.php>Go Back to Admin Panel</a>
</div>
</div>
</body>
</html>
