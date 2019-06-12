<?php
include "session.php";
?>
    <DOCTYPE html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        b
        {
            color:w3-Grey;
        }
        h1
        {
            color:Red;
        }
    </style>
    <div class="w3-card-4">
        <img src="learning.png" style="width: 50px ; height: 50px; float: left" alt="book view"> <h1> Library World </h1>
    </div>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-green w3-bar-block" style="width:18%">
        <h2 class="w3-bar-item w3-bar-block w3-center w3-margin">
            <img class="w3-round-xxlarge" src="default-avatar.png" style="width:50px ; height:50px;" alt="book view"> <br>
            <b> Hello <br>
                <?php
                echo $p;
                ?>
            </b> <br>
        </h2>
        <a href="request_for_book.php" class="w3-bar-item w3-button w3-center"> <b> Request a Book </b> </a>
        <a href="bookAvailableForUser.php" class="w3-bar-item w3-button w3-center"> <b> Available Books </b> </a>
        <a href="MagzineAvailableForUser.php" class="w3-bar-item w3-button w3-center"> <b> Available Magzines </b> </a>
    </div>
    <ul class="w3-navbar w3-green">
        <li class="w3-right w3-green"> <a href="logOut.php"> Log Out </a> </li>
        <li class="w3-right w3-green"> <a href="reset_password.php"> Reset Password </a> </li>
    </ul>
    <div class="w3-container w3-round-xxlarge w3-sand" style="margin-top:5%; margin-left:35%; margin-right:15%">
		<form action="" method="POST">
		<center>
		
		<p> <label class="w3-text-green"> <b> Name of Book </b> </label>
			<input class="w3-input w3-border w3-round-xxlarge" name="Book_name" type="text" placeholder="Enter the Name of Book" style="width:50%" ; required> 
		</p>
		<p>	<label class="w3-text-green"> <b> Number Of Days </b> </label>
            <label>
                <input class="w3-input w3-border w3-round-xxlarge" name="noOfDays" type="Number" placeholder="Enter the Number of days" style="width:50%"; required>
            </label>
        </p>
		<p>	<label class="w3-text-green"> <b> Mobile Number </b> </label>
            <label>
                <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" name="mobileNumber" type="varchar" placeholder="Enter the mobile number" style="width:50%"; required>
            </label>
        </p>
		<p>	<label class="w3-text-green"> <b> Issue date  </b> </label>
            <label>
                <input class="w3-text-green" type="date" name="issueDate" required>
            </label>
        </p>
			<div align="center">
				<input class="w3-round-xxlarge w3-btn" type="Submit" name="Submit" style="margin-bottom:2%">
				<button class="w3-btn w3-round-xxlarge" type="Submit" name="Clear" value="Clear" style="margin-bottom:2%"> Clear </button>
				<button class="w3-btn w3-round-xxlarge w3-btn" type="submit" name="button" value="Back" style="margin-bottom: 2%">
					<a href="user.php"> Back </a>
				</button>

				</center>
        </form>
	</div>	
	</body>
	</html>
	<?php
	#session_start();
		$conn = mysqli_connect("localhost","root", "","library");
			if(isset($_POST['Submit']))
			{
				$user = $_SESSION['nuser'];
				$bookName = $_POST['Book_name'];
				$Days = $_POST['noOfDays'];
				$Mobile_no = $_POST['mobileNumber'];
				$Issue_date = $_POST['issueDate'];
				if($_SESSION['nuser'] == $user) {
					$query = "insert into request_for_book(username,nameOfBook,noOfDays,mobileNo,issueDate) values('$user','$bookName', $Days , $Mobile_no, '$Issue_date')";
					mysqli_query($conn, $query);
					echo "<script> alert('request Submited'); </script>";
				}
				else {
					echo "<script> alert ('Your current entered username is wrong!! please check your username!!'); </script> ";
				}	
			}
?>