<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="w3.css">
<html>
<title>  Library Management System </title>
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
<div class="w3-container w3-round-xxlarge w3-sand" style="margin-top:3%; margin-left:25%; margin-right:25%" >
<HEAD><b> <h1> <CENTER> Registration Form </CENTER> </h1> </b> </HEAD>
<body>

	<form action = " " method="POST"> 
	<center>
	    <b> Enter Your Name:  </b>
		<input class="w3-round-xlarge w3-sand" type = "text" Name = "Fullname" placeholder="  Name" required> <br> <br>
 		<b>Enter Your Mobile Number: </b>
		<input class="w3-round-xlarge w3-sand" type = "Number" Name = "Mobile_number" placeholder="  Mobile number" required> <br> <br>
		<b> Enter Your Email Id:  </b>
		<input class="w3-round-xlarge w3-sand" type = "text" Name = "Email_Id" placeholder="  Email_id" required> <br> <br>
		<b> Enter Your Address:  </b>
		<input class="w3-round-xlarge w3-sand" type = "text" Name = "Address" placeholder="  Address" required> <br> <br>
		<b> Enter your Username: </b>
		<input class="w3-round-xlarge w3-sand" type = "text" Name = "Username" placeholder="  Username" required> <br> <br>
		<b> Enetr the Password: </b>
		<input class="w3-round-xlarge w3-sand" type = "password" Name = "Password" placeholder="  Password" required> <br> <br>
		<input class="w3-round-xlarge w3-btn" type = "Submit" Name = "Submit">
		<input class="w3-round-xlarge w3-btn" type = "Submit" Name = "Button" value = "Clear"> <br>  <br>
		<BUTTON class="w3-round-xlarge w3-btn" style="margin-bottom:3%"> <a href=loginPage.php> Log In </a> </BUTTON>
	</center>
</form>
    </div>
</body>
</html>
<?php
error_reporting(0);
 		$conn = mysqli_connect("localhost","root","","library"); 
		if(isset($_POST ['Submit']))
		{
			$Name = $_POST['Fullname'];
			$Mobile_no = $_POST['Mobile_number'];
			$Email = $_POST['Email_Id'];
			$Addr = $_POST['Address'];
			$user = $_POST['Username'];
			$Psw = $_POST['Password'];
			$query = "insert into student_info(Name,Mobile_n,email_id,address,username,password) values('$Name',$Mobile_no,'$Email','$Addr','$user','$Psw')";
			$result = mysqli_query($conn, $query);
			if(mysqli_num_rows($result) == 0)
			{
				echo "<script> alert('Welcome into Library '); window.location.href='loginPage.php'; </script> ";
			}
			else 
			{
				echo "<script> alert('Registration failed'); </script>";
			}
		}
?>