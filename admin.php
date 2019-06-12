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
        <img class="w3-round-xxlarge" src="default-avatar.png" style="width:50px ; height:50px;" alt="book view"> <br>
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
</body>
</html>