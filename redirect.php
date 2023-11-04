<!DOCTYPE html>
<html>
<head>
<title>Redirect</title>
<link>

<script type="text/javascript">
/* <![CDATA[ */
function sub() {
window.location.href = site;
}
function goTo(URL) {
site = URL;
} 
/* ]]> */
</script>

<style>

  body 
  { 
      background: url(Atmosphere-Resorts-Spa-Luxury-Resort.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    
  }
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  /*display: flex;
  -ms-flex-wrap: wrap; */
  flex-wrap: wrap;
  margin: 0 -16px;
  align-items: left;
  padding: 10px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;

}

.col-25,
.col-50,
.col-75 {
  padding: 0 10px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  width: 500px;
  height: 420px;
}

input[type=text] {
  width: 50%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;

}


.btn {
  background-color: black;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 50%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: red;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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
<i><h1 class="name" align="center" style="font-weight: bold;margin-left: 23%; font-size: 50px;width: 52%; color: white; top: 10px; background-color: grey">SELECT MODE OF OPERATION</h1></i>
<a href="About.html#about"><input type="button" style="margin-left: 1290px" value="About" onclick="#" class="non1"></a>
    <a href="login.php#login"><input type="button" value="Logout" onclick="#" class="non3"></a>
<br><br>
<div class="row" align="center" style="margin-left: 5px">
  <div class="col-75">
    <div class="container"><br>
      
      
        <div class="row">
          
          <div class="col-75">
        
           <div>
    <h3 align="left">
      <input type=radio  style="border: 0px;width: 5%;height: 1.5em" name="site"  onchange="if(this.checked){goTo('ins_customer.php')}"/>
      Insert into CUSTOMER</h3>
  </div>
            
  <div>
    <h3 align="left">
      <input type=radio style="border: 0px;width: 5%;height: 1.5em" name="site" onchange="if(this.checked){goTo('ins_staff.php')}"/>
      Insert into STAFF</h3>
  </div>
  <div>
    <h3 align="left">
      <input type=radio style="border: 0px;width: 5%;height: 1.5em" name="site" onchange="if(this.checked){goTo('upd_customer.php')}"/>
      Update CUSTOMER</h3>
  </div>

  <div>
    <h3 align="left">
      <input type=radio style="border: 0px;width: 5%;height: 1.5em" name="site" onchange="if(this.checked){goTo('upd_staff.php')}"/>
      Update STAFF</h3>
  </div>

  <div>
    <h3 align="left">
      <input type=radio style="border: 0px;width: 5%;height: 1.5em" name="site" onchange="if(this.checked){goTo('del_customer.php')}"/>
      Delete from CUSTOMER</h3>
  </div>

  <div>
    <h3 align="left">
      <input type=radio style="border: 0px;width: 5%;height: 1.5em" name="site" onchange="if(this.checked){goTo('del_staff.php')}"/>
    Delete from STAFF</h3>
  </div>
    
      <input type="submit" value="Proceed" class="btn" onclick="sub()">
            <br><br>
            
          </div>
          
        </div>
        
    </div>
  </div>
</div>
</body>
</html>
