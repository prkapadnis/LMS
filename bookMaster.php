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
    <div class="w3-container w3-round-xxlarge w3-sand" style="margin-top:5%; margin-left:25%; margin-right:25%">
        <form action=" " method="POST">
            <center>
       <br> <b> Name Of Book </b> <br>
        <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" type = "text" Name = "nameOfBook" placeholder="  Name Of Book" style="width:50%" required> <br>
        <b> Quantity </b>
        <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" type = "text" Name = "quantity" placeholder="  Quantity" style="width:50%" required> <br>
        <b> Description </b>
        <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" type = "text" Name = "description" placeholder="  Description" style="width:50%" required> <br>
        <input class="w3-round-xlarge w3-btn" type="submit" name="Submit" value="Submit" style="margin-bottom:5%">
                <input class="w3-round-xlarge w3-btn" type="submit" name="clear" value="clear" style="margin-bottom:5%">
            </center>
    </form>
    </div>
</div>
</body>
</html>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost", "root", "", "library");
if(isset($_POST['Submit'])) {
    $book = $_POST['nameOfBook'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $query = "insert into bookMaster(nameOfBook, quantity, description, date, status) values ('$book', $quantity, '$description', ' ', ' ' )";
    $result = mysqli_query($conn, $query);
    $p = mysqli_num_rows($result);
        echo "<script> alert ('Book Added!!!'); </script>";
}
?>