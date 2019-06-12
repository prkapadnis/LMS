<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="w3.css">
<html>
<title> Library management system </title>
<body>
<style>
body
{
	background-image: url("backgroundGreen.jfif") ;
	background-size: cover;
	background-repeat: no-repeat;
}
{
	background-color:lightblue;
}
b
{
	color:Brown;
}
h1
{
	color:Red;
}
img
{
 float: left;
}
</style>
<div class="w3-card-4">
    <img src="learning.png" style="width: 50px ; height: 50px"> <h1> Library World </h1>
</div>
<div class="w3-container w3-round-xxlarge w3-sand" style="margin-top:5%; margin-left:25%; margin-right:25%">
    <div style="text-align: center;">
        <b> <h1> Login </h1> </b>
    </div>
    <form action=" " method="POST">
        <div style="text-align: center;">
            <b> Username: </b>
            <input class="w3-round-large w3-large w3-margin" type = "text" Name = "Username" placeholder="  Username" required> <br>
            <b> Password: </b>
            <input class="w3-round-large w3-large" type = "password" Name = "Password" placeholder="  Password" required> <br> <br>
            <input class="w3-round-xlarge w3-btn" type = "Submit" Name = "Sign" value = "Sign_In">
            <input class="w3-round-xlarge w3-btn" type = "Submit" Name = "Clear" value = "Clear"> <br>  <br>
            <button class="w3-round-xlarge w3-btn" style="margin-bottom: 5%" type = "Submit" Name = "Register" value="Register Here"> <a href =registrationForm.php> Register Here </a> </button>
        </div>
    </form>
</div>
</body>
</html>
<?php
include ('login.php');
if(isset($_SESSION['nuser'])) {
			echo "<script> window.location.href= 'user.php'; </script> ";
		}
?>