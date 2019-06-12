<?php
$conn = mysqli_connect("localhost", "root", "", "library");
$id = $_GET['Id'];
$query = "update request_for_book set Status = 'Undelivered' where Id = '$id' ";
$result = mysqli_query($conn, $query);
echo "<script> window.location.href= 'listOfRequestedBook.php'; </script> ";
?>
