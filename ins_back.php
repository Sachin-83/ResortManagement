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

	$MembershipID=$_POST["MembershipID"];
	$FirstName=$_POST["fn"];
	$MiddleName=$_POST["mn"];
	$LastName=$_POST["ln"];
	$Email=$_POST["Email"];
	$DOB=$_POST["DOB"];
	$MembershipType=$_POST["MembershipType"];
	$PackageType=$_POST["PackageType"];

	$sql="INSERT INTO CUSTOMERS VALUES('$MembershipID','$FirstName','$MiddleName','$LastName','$Email','$DOB','$MembershipType','$PackageType');";
	pg_query($db,$sql);
	pg_close($db);
?>

</body>
</html>
