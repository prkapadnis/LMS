<?php
$conn = mysqli_connect("localhost", "root", "", "library");
    $id = $_GET['Id'];
    $query = "select nameOfBook,quantity,description from bookMaster where Id = '$id' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    ?>
<!DOCTYPE html>
<link href="w3.css" rel="stylesheet" type="text/css" xmlns:margin-bottom="http://www.w3.org/1999/xhtml">
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
<div class="w3-navbar w3-green">
    <h3> Book Master  </h3>
</div>
<div class="w3-container w3-round-xxlarge w3-sand" style="margin-top:5%; margin-left:25%; margin-right:25%">
    <form action=" " method="POST">
        <center>
            <br> <b> Name Of Book </b> <br>
            <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" type = "text" Name = "nameOfBook" value="<?php echo"$row[nameOfBook]"; ?>" placeholder="  Name Of B0ook" style="width:50%" required> <br>
            <b> Quantity </b>
            <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" type = "text" Name = "quantity" value="<?php echo"$row[quantity]"; ?>" placeholder="  Quantity" style="width:50%" required> <br>
            <b> Description </b>
            <input class="w3-input w3-border w3-round-xxlarge w3-margin-center" type = "text" Name = "description" value="<?php echo"$row[description]"; ?>" placeholder="  Description" style="width:50%" required> <br>
            <button class="w3-round-xlarge w3-btn" type="submit" name="Update" value="Update" style="margin-bottom:5%"> Update </button>
            <a class="w3-round-xlarge w3-btn" type="submit" name="Back" value="Back" href="bookAvailability.php" style="margin-bottom:5%"> Back </a>
        </center>
    </form>
</div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "library");
if(isset($_POST['Update'])) {
    $id = $_GET['Id'];
    $BookName = $_POST['nameOfBook'];
    $Quantity = $_POST['quantity'];
    $Description = $_POST['description'];
    $query = "update bookMaster set nameOfBook='$BookName', quantity='$Quantity', description='$Description' where Id='$id' ";
    mysqli_query($conn, $query);
    echo "<script> alert('Updated!!!!');  window.location.href ='bookAvailability.php'; </script> ";
}

?>