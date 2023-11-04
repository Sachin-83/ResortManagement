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

	$sql="DELETE FROM STAFF WHERE staff_id='$t1' AND level='$t2' AND first_name='$t3'  AND middle_name='$t4' AND last_name='$t5'";
	pg_query($db,$sql);
	pg_close($db);
?>

</body>
</html>