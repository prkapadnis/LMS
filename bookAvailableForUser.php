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
    <div style="margin-left: 20%">
        <table class="w3-table" style="text-align:center;">
            <th> Id </th>
            <th> Name of Book </th>
            <th> Quantity </th>
            <th> Description </th>
    </div>
    <?php
    #        session_start();
    $conn = mysqli_connect("localhost", "root", "", "library");
    $query = "select * from bookMaster";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        while($row=mysqli_fetch_array($result)) {
            $i = $row['Id'];
            echo " <tr> 
			<td>".$row['Id']."</td> 
			<td>".$row['nameOfBook']."</td> 
			<td>".$row['quantity']."</td> 
			<td> ".$row['description']."</td>
			</tr>";
        }
    }
    echo"
        </table>
	</body>
</html>";
    ?>
