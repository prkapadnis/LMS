<?php
$conn = mysqli_connect("localhost", "root", "", "library");
    $id = $_GET['Id'];
    $query = "select * from bookMaster where Id ='$id' ";
    $result = mysqli_query($conn, $query);
    $query1 = "Delete from bookMaster where Id = '$id' ";
    mysqli_query($conn, $query1);
    echo "<script> alert('Deleted!!!!');  window.location.href ='bookAvailability.php'; </script> ";
?>