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

	$sql="DELETE FROM CUSTOMERS WHERE membership_id='$MembershipID' AND first_name='$FirstName' AND middle_name='$MiddleName' AND last_name='$LastName'";
	pg_query($db,$sql);
	pg_close($db);
?>

</body>
</html>
