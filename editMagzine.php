<?php
include "session.php";
#$conn = mysqli_connect("localhost", "root", "", "library");
$id = $_GET['Id'];
$query = "select magzineName,quantity, Price, description from addmagzine where Id = '$id' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
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
        <img class="w3-round-xxlarge" src="Pratik.jpg" style="width:50px ; height:50px;" alt="book view"> <br>
        <b> My
            <?php
            echo $p;
            ?>
        </b> <br>
    </h2>
    <a href="listOfRequestedBook.php" class="w3-bar-item w3-button w3-center"> <b> Requested Book </b> </a>
    <a href="bookMaster.php" class="w3-bar-item w3-button w3-center"> <b> Add Book </b> </a>
    <a href="#" class="w3-bar-item w3-button w3-center"> <b> Add Magzine </b> </a>
    <a href="bookAvailability.php" class="w3-bar-item w3-button w3-center"> <b> Available Books </b> </a>
</div>
<ul class="w3-navbar w3-green">
    <li class="w3-right w3-green"> <a href="logOut.php"> Log Out </a> </li>
    <li class="w3-right w3-green"> <a href="reset_password.php"> Reset Password </a> </li>
</ul>-->
<div class="w3-container w3-round-xxlarge w3-sand" style="margin-top:5%; margin-left:35%; margin-right:15%">
    <form action="" method="POST">
        <center>

            <p> <label class="w3-text-green"> <b> Name of Magzine </b> </label>
                <input class="w3-input w3-border w3-round-xxlarge" name="magzineName" value="<?php echo $row['magzineName']; ?>" type="text" placeholder="Enter the Name of Magzine" style="width:50%" ; required>
            </p>
            <p>	<label class="w3-text-green"> <b> Quantity </b> </label>
                <label>
                    <input class="w3-input w3-border w3-round-xxlarge" name="quantity" value="<?php echo $row['quantity']; ?>" type="Number" placeholder="Enter the Quantity" style="width:50%"; required>
                </label>
            </p>
            <p>	<label class="w3-text-green"> <b> Price </b> </label>
                <label>
                    <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" name="price" value="<?php echo $row['Price']; ?>" type="number" placeholder="Enter the Price" style="width:50%"; required>
                </label>
            </p>
            <p>	<label class="w3-text-green"> <b> Description </b> </label>
                <label>
                    <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" name="description" value="<?php echo $row['description']; ?>" type="varchar" placeholder="Enter the Description" style="width:50%"; required>
                </label>
            </p>
            <input class="w3-round-xxlarge w3-btn" type="Submit" name="Update" style="margin-bottom:2%">
            <button class="w3-btn w3-round-xxlarge" type="Submit" name="Clear" value="Clear" style="margin-bottom:2%"> Clear </button>
        </center>
    </form>
</div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "library");
if(isset($_POST['Update'])) {
    $id = $_GET['Id'];
    $magzineName = $_POST['magzineName'];
    $Quantity = $_POST['quantity'];
    $Price = $_POST['price'];
    $Description = $_POST['description'];
    $query = "update addmagzine set magzineName='$magzineName', quantity='$Quantity', Price='$Price', description='$Description' where Id='$id' ";
    mysqli_query($conn, $query);
    echo "<script> alert('Updated!!!!');  window.location.href ='magzineAvailable.php'; </script> ";
}

?>