<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	$db=pg_connect("host='localhost' port='5432' dbname='resortmanagement' user='postgres' password='123'");
	if(!$db)
	{
		die("Connection failed:".pg_connect_error());
	}

	$t1=$_POST["stfid"];
	$t2=$_POST["level"];
	$t3=$_POST["fn"];
	$t4=$_POST["mn"];
	$t5=$_POST["ln"];
	$t6=$_POST["mstfid"];
	$t7=$_POST["actname"];
	$t8=$_POST["roomno"];
	$t9=$_POST["restname"];

	$sql="INSERT INTO STAFF VALUES('$t1','$t2','$t4','$t4','$t5','$t6','$t7','$t8','$t9');";
	pg_query($db,$sql);
	pg_close($db);
?>

</body>
</html>