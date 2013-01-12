<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php require_once("connection.php"); ?>
<h1>Your Information</h1>
<!-- Player Name and ID !-->
<?php
 $var_name = "Name:";
 $id = $_GET['id'];
 $name = $_GET['name'];
 echo "<strong>".$var_name.'  '.$name."</strong>";
 echo "<br/><strong>".$id."</strong>"
 ?>
 <?php
 // Perform database query
$result = mysql_query("SELECT * FROM raceentry WHERE raceid = raceentry.raceid and race.mapid = mapid and raceentry.personid and raceentry.personid = 99 GROUP by raceid", $connection);
	
	if (!$result) {
		die("Database query failed:  " . mysql_error());
	}

?>



<br/>
<h1> Heading </h1>

</body>
</html>