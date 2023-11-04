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
	$t2=$_POST["fn"];
	$t3=$_POST["mn"];
	$t4=$_POST["ln"];
	$t5=$_POST["actname"];

	$sql="UPDATE STAFF SET first_name='$t2',middle_name='$t3',last_name='$t4',activities_name='$t5' WHERE staff_id='$t1'";
	pg_query($db,$sql);
	pg_close($db);
?>

</body>
</html>