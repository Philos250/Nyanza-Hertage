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