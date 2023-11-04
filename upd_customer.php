<!DOCTYPE html>
<html>
<head>
	<title>Update Customer</title>

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
			background-color:#2E86C1; 
			font-size: 20px; 
			padding: 5px;
  			text-align: center;
  			background-color: black;

  			-webkit-appearance: button;
    		-moz-appearance: button;
    		appearance: button;
   		 	text-decoration: none;
    		color: initial;
		}

		.book:hover {
  		background-color: red;
		}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 580px;
  height: 440px;
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
	<!--<h1 align="center" style="font-family:Segoe Print"><font size="15" color="#CB4335"><i>Itzz Showtime</i></font></h2>
	<h2 align="center">Meet your next favourite MOVIE!!</h2>-->
	<!--<img src="itzz_showtime_final.jpg" height="65px" width="65px"/>-->
	<form action="upd_back.php" method="POST">
		<i><h1 class="name" align="center" style="font-weight: bold;margin-left: 23%; font-size: 50px;width: 52%; color: white; top: 10px; background-color: grey">UPDATE CUSTOMER DETAILS</h1></i>
		<a href="About.html#about"><input type="button" style="margin-left: 1290px" value="About" onclick="#" class="non1"></a>
    <a href="login.php#login"><input type="button" value="Logout" onclick="#" class="non3"></a>
<div align="center">
<div class="container" align="center"><br>
	<div align="center">	
		<div class="box1" align="center">	
			 <label style="font-size: 25px;"><b>MembershipID</b>&emsp;&emsp;<input type="text" name="memid" placeholder="Eg: 123456789" autofocus required title="MembershipID"></label><br><br><br>
			<label style="font-size: 25px;"><b>First Name</b>&emsp;&emsp;&emsp;&emsp;<input type="text" name="fn" required title="First Name"></label><br><br><br> 
			<label style="font-size: 25px;"><b>Middle Name</b>&emsp;&emsp;&emsp;<input type="text" name="mn" title="Middle Name"></label><br><br><br> 
			<label style="font-size: 25px;"><b>Last Name</b>&emsp;&emsp;&emsp;&emsp;<input type="text" name="ln" required title="Last Name" ></label><br><br><br>
			<label  style="font-size: 25px;"><b>MembershipType</b>&emsp;<input type="text" name="memtype" required title="MembershipType"></label><br><br><br>

			<button type="submit" style="color: white;font-size: 25px;" st class="book" name="reg_user">Update</button>
		</div>
	</div>	
</div>
</div>
</form>
</body>
</html>
		
	