<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
// 3. Perform database query
	$result = mysql_query("SELECT * FROM `map` LIMIT 0, 30 ", $connection);
	if (!$result) {
		die("Database query failed:  " . mysql_error());
	}
//4. Use returned data
while ($row = mysql_fetch_array($result)) {
	echo $row[1]."".$row[2]."<br/>";
	} 
	?>
</body>
</html>