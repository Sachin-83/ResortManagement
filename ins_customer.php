<!DOCTYPE html>
<html>
<head>
	<title>Insert Customer</title>

<style>
	.box1
	{
		box-sizing:border-box;
		padding: 40px;
		width: 80%;
    	font-size: 15px;
		
	}

	h2
	{
		font-family: "Ink Free";
		font-size:30px;
		font-style:oblique;
	
		
	}
	
	body 
	{ 
  		background: url(Atmosphere-Resorts-Spa-Luxury-Resort.jpg) no-repeat center center fixed; 
  		-webkit-background-size: cover;
  		-moz-background-size: cover;
  		-o-background-size: cover;
  		background-size: cover;
	}

	.book
		{
			background-color:#4CAF50; 
			font-size: 20px; 
			padding: 5px;
			background-color: black;

  			text-align: center;
  			-webkit-appearance: button;
    		-moz-appearance: button;
    		appearance: button;
   		 	text-decoration: none;
    		color: initial;
		}

		.book:hover {
  		background-color: grey;
		}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 580px;
  height: 640px;
}

.non1{
	background-color:black;
	font-weight: bold;
	width: 100px;
	height: 50px;
	color: white;
	font-size: 20px;
	margin-left:1390px;
	top: 16%;
	position: absolute;
	display: block;
	opacity: 0.8;
	}

	.non1:hover{
		background-color: rgb(140, 140, 140);
	}

.non3{
background-color:black;
font-weight: bold;
width: 100px;
height: 50px;
color: white;
font-size: 20px;
margin-left:1402px;
top: 16%;
position: absolute;
display: block;
opacity: 0.8;
}

.non3:hover{
	background-color: rgb(140, 140, 140);
}

</style>

</head>

<body>
	
	<form action="ins_back.php" method="post">
		<i><h1 class="name" align="center" style="font-weight: bold;margin-left: 23%; font-size: 50px;width: 52%; color: white; top: 10px; background-color: grey">ADD A NEW CUSTOMER</h1></i>
		<a href="About.html#about"><input type="button" style="margin-left: 1290px" value="About" onclick="#" class="non1"></a>
    <a href="login.php#login"><input type="button" value="Logout" onclick="#" class="non3"></a>
		<div align="center">
<div class="container" align="center"><br>
	<div align="center">	
		<div class="box1" align="center">	
			
			<label style=" font-size: 25px;"><b>MembershipID</b>&emsp;&emsp;<input type="text" name="MembershipID" placeholder="Eg: 123456789" id="t1" autofocus required title="MembershipID"></label><br><br><br>
			<label style=" font-size: 25px;"><b>First Name</b>&emsp;&emsp;&emsp;&emsp;<input type="text" name="fn" required id="t2" title="First Name"></label><br><br><br> 
			<label style="font-size: 25px;"><b>Middle Name</b>&emsp;&emsp;&emsp;<input type="text" id="t3" name="mn" title="Middle Name "></label><br><br><br> 
			<label style="font-size: 25px;"><b>Last Name</b>&emsp;&emsp;&emsp;&emsp;<input type="text" id="t4" name="ln" required title="Last Name" ></label><br><br><br>
			<label style="font-size: 25px;"><b>Email</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label><input id="t5" type="text" name="Email" required title="Email"><br><br><br>
			<label style="font-size: 25px;"><b>DOB</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input id="t6" type="DOB" name="DOB" title="DOB"></label><br><br><br>
			<label  style="font-size: 25px;"><b>MembershipType</b>&emsp;<input type="text" id="t7" name="MembershipType" required title="MembershipType"></label><br><br><br>
			<label style="font-size: 25px;"><b>PackageType</b>&emsp;&emsp;&emsp;<input id="t8" type="text" name="PackageType" title="PackageType"></label><br></br><br>

			<button type="submit" style="color: white; font-size: 25px;" st class="book" name="reg_user">Insert</button>
		</div>
	</div>	
</div>
</div>
</form>

</body>
</html>
