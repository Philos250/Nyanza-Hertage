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
$names=$_POST['names'];
$email=$_POST['email'];
$tel=$_POST['telephone'];
$comment=$_POST['comment'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JDP</title>
<style type="text/css">
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h2 align="center">NYANZA HERTAGE MANAGEMENT SYSTEM </h2>
<?php
$qry=mysql_query("INSERT INTO comments (names,email,telephone,comment,time) VALUES ('$names','$email','$tel','$comment',now())"); 
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
echo "<br/>";
echo "Comment Sent Successfully";
echo "<br/>";
}
?>
<a href=contact.php>Go back to Contact Page</a>
</div>
</div>
</body>
</html>
