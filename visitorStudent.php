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
<div style="margin-left:25%; margin-top:3%">
<div class="w3-container w3-round-xlarge w3-sand" style="margin-top:1%; margin-left:20%; margin-right:20%">
    <form action=" " method="POST">
        <center>
            <div class="row" style="margin-top:5%">
                <div class="col-sm-12">
                    <div class="form-group">
                        <span class="form-label"> <b>  Name Of  Student </b> </span>
                        <select class="w3-form-control w3-round w3-large" name="name">
                            <option> Select Student</option>
                            <?php
                            $query1 = "select Name from student_info";
                            $result = mysqli_query($conn, $query1);
                            while ($row = mysqli_fetch_array($result)) {
                                $FullName = $row['Name'];
                                echo "<option value='$FullName' name='$FullName'> $FullName    </option>";
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <span class="form-label"> <b> Name Of Magzine </b> </span>
                        <select class="form-control w3-round w3-large" name="Magzine">
                            <option> Select Magzine</option>
                            <?php
                            $query2 = "select magzineName from addmagzine";
                            $result = mysqli_query($conn, $query2);
                            while ($row = mysqli_fetch_array($result)) {
                                $magzine = $row['magzineName'];
                                echo "<option value='$magzine' name='$magzine'> $magzine </option>";
                            }
                            ?>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <span class="form-label"> <b> Enter Contact Number </b> </span>
                        <input class="form-control w3-round w3-large" type="varchar"  name="mobileNo"
                               placeholder="Enter Contact Number" required>

                    </div>
                    <br>
                    <div class="form-group">

                        <span class="form-label"> <b>Select Course year </b> </span>
                        <select class="form-control w3-round w3-large" name="class">
                            <option value="1" name="1">Select Course</option>
                            <option value="FYCM" name="FYCM">FYCM</option>
                            <option value="SYCM" name="SYCM">SYCM</option>
                            <option value="TYCM" name="TYCM">TYCM</option>
                        </select>

                    </div>
                    <br>

                    <div class="form-group">
                        <span class="form-label"> <b> Check in time </b> </span>
                        <input class="form-control w3-round w3-large" type="time" name="checkIn"
                               placeholder="Enter Check in time" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <span class="form-label"> <b> Check out time </b> </span>
                        <input class="form-control w3-round w3-large" type="time" name="checkOut"
                               placeholder="Enter Check out time">
                    </div>
                    <br>
                    <div class="form-group">
                        <span class="form-label"> <b> Remark </b> </span>
                        <input class="form-control w3-round w3-large" type="text" name="Remark"
                               placeholder="Enter Remark(if any)">
                    </div>
                    <br>


                    <div class="form-btn" style="margin-bottom:5%">
                        <button class="w3-btn w3-round-xxlarge" name="Submit"> Submit</button>
        </center>
</div>
</div>
</div>
</div>
</div>
</center>
</form>
</div>
</div>
</body>
</html>
<?php
mysqli_connect("localhost", "root", "", "library");
if (isset($_POST['Submit'])) {
    $Name = $_POST['name'];
    $Magzine = $_POST['Magzine'];
    $Mobname = $_POST['mobileNo'];
    $Class = $_POST['class'];
    $Checkin = $_POST['checkIn'];
    $Checkout = $_POST['checkOut'];
    $Remark = $_POST['Remark'];
    $Query = "insert into visitorStudent(name,magzine,mobile,class,checkin,checkout,remark) values ('$Name','$Magzine','$Mobname','$Class','$Checkin','$Checkout','$Remark')";
    mysqli_query($conn, $Query);
    echo "<script>alert('Entry Added Successfully');</script>";
}
?>
