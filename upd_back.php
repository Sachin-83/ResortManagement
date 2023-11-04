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

	$MembershipID=$_POST["memid"];
	$FirstName=$_POST["fn"];
	$MiddleName=$_POST["mn"];
	$LastName=$_POST["ln"];
	$MembershipType=$_POST["memtype"];

	$sql="UPDATE CUSTOMERS SET first_name='$FirstName',middle_name='$MiddleName',last_name='$LastName',membership_type='$MembershipType' WHERE membership_id='$MembershipID'";
	pg_query($db,$sql);
	pg_close($db);
?>

</body>
</html>
