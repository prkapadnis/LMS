<DOCTYPE html>
	<link rel="stylesheet" type="text/css" href="w3.css">
	<html>
	<body>
	<style>
	body
	{
		background-image: url("backgroundGreen.jfif") ;
		background-size: cover;
		background-repeat: no-repeat;
	}
	b
	{
		color:w3-Grey;
	}
	</style>
	<div class="w3-card-4">
		<center>
			<span> <b style = "font-size: 40px"> Library Management System </b> </span>  <br>
		</center>
 	</dOiv>
 	<ul class="w3-navbar w3-Green w3-card-4">
  		 <li> <a href=" "> <?php
  		 session_start();
  		 echo "Hello ";
  		 echo $_SESSION['nuser'];
  		 ?>
  		 </a> </li>  	
	</ul>
		<div class="w3-container w3-card-4 w3-round-xxlarge w3-sand" style="margin-top:5%; margin-left:25%; margin-right:25%"">
		<form action="" method="POST">
			<center>
		<p> 
			<label class="w3-text-green"> <b> Current Username </b> </label>
			<input class="w3-input w3-border w3-round-xxlarge" name="currentUsername" type="text" placeholder="Enter Current Username" style="width:50%" ; required> 
		</p>
		<p> 
			<label class="w3-text-green"> <b> Current Password </b> </label>
			<input class="w3-input w3-border w3-round-xxlarge" name="currentPassword" type="text" placeholder="Enter Current password" style="width:50%" ; required> 
		</p>
		<p>
			<label class="w3-text-green"> <b> New Password </b> </label>
			<input class="w3-input w3-border w3-round-xxlarge" name="newPassword" type="text" placeholder="Enter New Password" style="width:50%"; required>
		</p>
				<input class="w3-round-xxlarge w3-btn" type="Submit" name="Change" value = "Change" style="margin-bottom:5%">
				<button class="w3-btn w3-round-xxlarge" type="Submit" name="Clear" value="Clear" style="margin-bottom:5%"> Clear </button> 
				</center>
			</div>
		</form>	
	</div>	
	</div>
</body>
</html>
<?php
	$conn = mysqli_connect("Localhost", "root", "", "library");
	if(isset($_POST['Change'])) {
		$user = $_POST['currentUsername'];
		$Name = $_SESSION['nuser'];
		$pass = $_POST['currentPassword'];
		$newPass = $_POST['newPassword'];
		$query = "select password from student_info where username = '$user'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		if($user == $_SESSION['nuser']) {
		if($pass==$row['password']) {
			if($pass!=$newPass) 
			{
				$query1="update student_info SET password='$newPass' where username='$Name'";
				mysqli_query($conn,$query1);
				echo "<script> alert('Password changed successful. Login again to continue'); window.location.href='user.php'; </script>"; 
			}
			else {
			echo "<script>alert('Current and New Password cannot be same !!')</script>";
			}
		}
		else {
			echo "<script> alert('Your current entered passwors is wrong !!'); </script>";
		}
	}
	else {
		echo "<script> alert('Your current entered username is wrong !!'); </script>";
	}
} 
?>