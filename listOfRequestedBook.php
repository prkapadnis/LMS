<?php
include "session.php";
?>
    <!DOCTYPE html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    h1
    {
        color:Red ;
    }
</style>
<div class="w3-card-4">
    <img src="learning.png" style="width: 50px ; height: 50px; float:left" alt="book view"> <h1> Library World </h1>
</div>
<!-- Sidebar -->
<div class="w3-sidebar w3-green w3-bar-block" style="width:20%">
    <h2 class="w3-bar-item w3-bar-block w3-center w3-margin">
        <a href="admin.php" style="text-decoration:none">
            <img class="w3-round-xxlarge" src="default-avatar.png" style="width:50px ; height:50px;" alt="book view"> <br>
        </a>
        <b> My
            <?php
            echo $p;
            ?>
        </b> <br>
    </h2>
    <a href="listOfRequestedBook.php" class="w3-bar-item w3-button w3-center"> <b> Requested Book </b> </a>
    <a href="bookMaster.php" class="w3-bar-item w3-button w3-center"> <b> Add Book </b> </a>
    <a href="addMagzine.php" class="w3-bar-item w3-button w3-center"> <b> Add Magzine </b> </a>
    <a href="bookAvailability.php" class="w3-bar-item w3-button w3-center"> <b> Available Books </b> </a>
    <a href="magzineAvailable.php" class="w3-bar-item w3-button w3-center"> <b> Available Magzine </b> </a>
    <a href="visitorStudent.php" class="w3-bar-item w3-button w3-center"> <b> Visitor Student </b> </a>
</div>
<ul class="w3-navbar w3-green">
    <li class="w3-right w3-green"> <a href="logOut.php"> Log Out </a> </li>
    <li class="w3-right w3-green"> <a href="reset_password.php"> Reset Password </a> </li>
</ul>
<div style="margin-left:20%">
		<div class="w3-margin"> </div>
		<table class="w3-table" style="text-align:center;">
			<th> Id </th> 
			<th> Username </th>
			<th> Name of Book </th> 
			<th> NumberOf Days </th>
			<th> Mobile Number </th> 
			<th> Issue Date </th> 
			<th> Action </th>
			<th> Status </th>
        </div>
<?php
#session_start();
	$conn = mysqli_connect("localhost", "root", "", "library"); 	
	$query = "select * from request_for_book"; 
	$result = mysqli_query($conn, $query); 
	if(mysqli_num_rows($result) > 0) { 
		while($row=mysqli_fetch_array($result)) {
			$i = $row['Id'];
			echo " <tr> 
			<td>".$row['Id']."</td> 
			<td>".$row['username']."</td>
			<td>".$row['nameOfBook']."</td> 
			<td>".$row['noOfDays']."</td> 
			<td> ".$row['mobileNo']."</td>
			<td>".$row['issueDate']."</td>
			<td>
				<form action= '' method='POST'>
				 <a class='w3-round-xxlarge w3-btn' href ='issueBook.php?Id=$i'> Issue Book </a>
				  <a class='w3-round-xxlarge w3-btn' href ='rejectBook.php?Id=$i'> Reject Book </a>
				</form>				 
			</td> 
			<td> ".$row['Status']."</td>
			</tr> ";
		}
    }
echo "
		</table>
	</body>
   ";
	?>